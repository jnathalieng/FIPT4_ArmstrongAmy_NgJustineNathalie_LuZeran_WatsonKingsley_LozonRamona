export default {
    data() {
        return {
            formData: {
                event_title: '',
                slug: '',
                excerpt: '',
                featured_image: null,
                featured_image_alt: '',
                content: '',
            },
            errors: {},
            isLoading: false,
            isDragging: false,
            imagePreview: null,
            currentImage: null,
            successMessage: '',
            loading: true,
            blogId: null,
        }
    },
mounted() {
    console.log('blogFormEdit mounted');
    
    const element = document.querySelector('#blog-form-edit');
    console.log('Element found:', !!element);
    
    if (element) {
        this.blogId = element.dataset.blogId;
        console.log('Blog ID:', this.blogId);
        
        if (this.blogId) {
            this.fetchBlog();
        } else {
            console.warn('No blogId in data attribute');
        }
    } else {
        console.error('Element #blog-form-edit not found!');
    }
},
    methods: {
        async fetchBlog() {
            try {
                const response = await fetch(`/api/blogs/${this.blogId}/edit`);
                
                if (!response.ok) {
                    throw new Error('Failed to fetch blog');
                }

                const blog = await response.json();

                this.formData = {
                    event_title: blog.title,
                    slug: blog.slug,
                    excerpt: blog.excerpt || '',
                    featured_image: null,
                    featured_image_alt: blog.featured_image_alt || '',
                    content: blog.content,
                };

                if (blog.featured_image) {
                    this.currentImage = `/storage/${blog.featured_image}`;
                }

                this.loading = false;
            } catch (error) {
                console.error('Error fetching blog:', error);
                this.errors.general = 'Failed to load blog post';
                this.loading = false;
            }
        },

        handleImageDrop(e) {
            this.isDragging = false;
            const files = e.dataTransfer.files;
            if (files.length) {
                this.processImageFile(files[0]);
            }
        },

        handleImageSelect(e) {
            const files = e.target.files;
            if (files.length) {
                this.processImageFile(files[0]);
            }
        },

        processImageFile(file) {
            if (!file.type.startsWith('image/')) {
                this.errors.featured_image = 'Please select a valid image file';
                return;
            }

            if (file.size > 5 * 1024 * 1024) { // 5MB limit
                this.errors.featured_image = 'Image must be less than 5MB';
                return;
            }

            this.formData.featured_image = file;
            this.currentImage = null;
            this.errors.featured_image = '';

            const reader = new FileReader();
            reader.onload = (e) => {
                this.imagePreview = e.target.result;
            };
            reader.readAsDataURL(file);
        },

        removeImage() {
            this.formData.featured_image = null;
            this.imagePreview = null;
            this.$refs.fileInput.value = '';
        },

        replaceImage() {
            this.currentImage = null;
            this.$refs.fileInput.click();
        },

        async submitForm() {
            await this.saveBlog();
        },

        async saveBlog() {
            this.isLoading = true;
            this.errors = {};

            if (!this.formData.event_title.trim()) {
                this.errors.event_title = 'Title is required';
                this.isLoading = false;
                return;
            }

            if (!this.formData.slug.trim()) {
                this.errors.slug = 'Link header is required';
                this.isLoading = false;
                return;
            }

            if (!this.formData.content.trim()) {
                this.errors.content = 'Content is required';
                this.isLoading = false;
                return;
            }

            const formDataToSend = new FormData();

            formDataToSend.append('title', this.formData.event_title);
            formDataToSend.append('slug', this.formData.slug);
            formDataToSend.append('excerpt', this.formData.excerpt || '');
            formDataToSend.append('content', this.formData.content);

            if (this.formData.featured_image instanceof File) {
                formDataToSend.append('featured_image', this.formData.featured_image);
                formDataToSend.append('featured_image_alt', this.formData.featured_image_alt || this.formData.event_title);
            }

            try {
                const response = await fetch(`/api/blogs/${this.blogId}`, {
                    method: 'PUT',
                    body: formDataToSend,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
                    }
                });

                if (!response.ok) {
                    const errorData = await response.json();
                    if (errorData.errors) {
                        this.errors = errorData.errors;
                    } else {
                        this.errors.general = errorData.message || 'An error occurred while saving';
                    }
                    return;
                }

                this.successMessage = 'Blog post updated successfully!';
                setTimeout(() => {
                    window.location.href = '/blog-manager';
                }, 1500);
            } catch (error) {
                this.errors.general = 'An error occurred while saving: ' + error.message;
                console.error('Error updating blog:', error);
            } finally {
                this.isLoading = false;
            }
        },

        goBack() {
            window.location.href = '/blog-manager';
        }
    },
    template: `
        <form @submit.prevent="submitForm" class="add-input-form" id="blogForm">

            <div v-if="loading" class="loading-message">
                Loading blog post...
            </div>

            <div v-else>
                <div class="title-con">
                    <span class="r-header-text">Post Details</span>
                </div>

                <p class="field-error" v-if="errors.event_title">{{ errors.event_title }}</p>
                <input 
                    v-model="formData.event_title"
                    class="add-form-box title-input"
                    type="text"
                    name="event_title"
                    placeholder="Post Title"
                >

                <section class="add-form-inputs">
                    <article class="twin-inputs">
                        <!-- Slug/Link Header -->
                        <div class="left-box">
                            <label for="slug" class="r-header-text">Link Header</label>
                            <p class="field-error" v-if="errors.slug">{{ errors.slug }}</p>
                            <input
                                v-model="formData.slug"
                                class="add-form-box"
                                type="text"
                                name="slug"
                                placeholder="e.g., history-of-london-aviation"
                            >
                        </div>

                        <!-- Excerpt -->
                        <div class="left-box">
                            <label for="excerpt" class="r-header-text">Excerpt</label>
                            <p class="field-error" v-if="errors.excerpt">{{ errors.excerpt }}</p>
                            <input
                                v-model="formData.excerpt"
                                class="add-form-box"
                                type="text"
                                name="excerpt"
                                placeholder="Short summary of the post"
                            >
                        </div>
                    </article>

                    <article class="twin-inputs">
                        <!-- Featured Image with Drag & Drop -->
                        <div class="right-box">
                            <label for="featured-image" class="r-header-text">Featured Image</label>
                            <p class="field-error" v-if="errors.featured_image">{{ errors.featured_image }}</p>
                            
                            <div 
                                class="drag-and-drop-images"
                                @dragover.prevent="isDragging = true"
                                @dragleave.prevent="isDragging = false"
                                @drop.prevent="handleImageDrop"
                                :class="{ 'dragging': isDragging }"
                            >
                                <input 
                                    ref="fileInput"
                                    type="file" 
                                    accept="image/*"
                                    @change="handleImageSelect"
                                    style="display: none;"
                                >
                                
                                <div v-if="!imagePreview && !currentImage" class="drop-zone-content">
                                    <p>Drag and drop image here or <a href="#" @click.prevent="$refs.fileInput.click()">click to browse</a></p>
                                </div>

                                <div v-else-if="!imagePreview && currentImage" class="image-preview">
                                    <img :src="currentImage" :alt="formData.event_title">
                                    <button type="button" @click="replaceImage" class="remove-image-btn">Replace</button>
                                </div>

                                <div v-else class="image-preview">
                                    <img :src="imagePreview" :alt="formData.event_title">
                                    <button type="button" @click="removeImage" class="remove-image-btn">Remove</button>
                                </div>
                            </div>

                            <input 
                                v-if="imagePreview || currentImage"
                                v-model="formData.featured_image_alt"
                                type="text"
                                placeholder="Image alt text (for accessibility)"
                                class="add-form-box"
                                style="margin-top: 10px;"
                            >
                        </div>
                    </article>
                </section>

                <!-- Content input -->
                <label for="content" class="r-header-text content-title">Content</label>
                <p class="field-error" v-if="errors.content">{{ errors.content }}</p>
                <textarea
                    v-model="formData.content"
                    class="add-content-box"
                    name="content"
                    placeholder="Enter your blog post content..."
                ></textarea>

                <!-- Submit buttons -->
                <div class="button-con">
                    <button class="add-button cancel-button" type="button" @click="goBack">Cancel</button>
                    <button 
                        class="add-button publish-button" 
                        type="submit"
                        :disabled="isLoading"
                    >
                        {{ isLoading ? 'Updating...' : 'Update Post' }}
                    </button>
                </div>

                <div v-if="successMessage" class="success-message">
                    {{ successMessage }}
                </div>
                <div v-if="errors.general" class="error-message">
                    {{ errors.general }}
                </div>
            </div>
        </form>
    `
}