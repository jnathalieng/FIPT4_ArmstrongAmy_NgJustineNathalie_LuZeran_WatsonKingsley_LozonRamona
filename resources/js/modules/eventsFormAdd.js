export default {
    data() {
        return {
            formData: {
                events_title: '',
                events_description: '',
                events_start_datetime: '',
                events_end_datetime: '',
                events_timezone: '',
                events_category: '',
                events_status: 'Draft',
                events_image_1: null,
                events_image_alt_1: '',
                events_image_2: null,
                events_image_alt_2: '',
                events_image_3: null,
                events_image_alt_3: '',
            },
            errors: {},
            isLoading: false,
            isDragging: false,
            imagePreview1: null,
            imagePreview2: null,
            imagePreview3: null,
            successMessage: '',
        }
    },
    methods: {
        handleImageDrop(e, slot) {
            this.isDragging = false;
            const files = e.dataTransfer.files;
            if (files.length) {
                this.processImageFile(files[0], slot);
            }
        },

        handleImageSelect(e, slot) {
            const files = e.target.files;
            if (files.length) {
                this.processImageFile(files[0], slot);
            }
        },

        processImageFile(file, slot) {
            if (!file.type.startsWith('image/')) {
                this.errors[`events_image_${slot}`] = 'Please select a valid image file';
                return;
            }

            if (file.size > 5 * 1024 * 1024) {
                this.errors[`events_image_${slot}`] = 'Image must be less than 5MB';
                return;
            }

            this.formData[`events_image_${slot}`] = file;
            this.errors[`events_image_${slot}`] = '';

            const reader = new FileReader();
            reader.onload = (e) => {
                this[`imagePreview${slot}`] = e.target.result;
            };
            reader.readAsDataURL(file);
        },

        removeImage(slot) {
            this.formData[`events_image_${slot}`] = null;
            this[`imagePreview${slot}`] = null;
            this.$refs[`fileInput${slot}`].value = '';
        },

        async submitForm(status) {
            this.formData.events_status = status;
            await this.saveEvent();
        },

        async saveEvent() {
            this.isLoading = true;
            this.errors = {};

            if (!this.formData.events_title.trim()) {
                this.errors.events_title = 'Title is required';
                this.isLoading = false;
                return;
            }

            if (!this.formData.events_description.trim()) {
                this.errors.events_description = 'Description is required';
                this.isLoading = false;
                return;
            }

            if (!this.formData.events_start_datetime) {
                this.errors.events_start_datetime = 'Start date & time is required';
                this.isLoading = false;
                return;
            }

            if (!this.formData.events_category.trim()) {
                this.errors.events_category = 'Category is required';
                this.isLoading = false;
                return;
            }

            const formDataToSend = new FormData();
            formDataToSend.append('events_title', this.formData.events_title);
            formDataToSend.append('events_description', this.formData.events_description);
            formDataToSend.append('events_start_datetime', this.formData.events_start_datetime);
            formDataToSend.append('events_end_datetime', this.formData.events_end_datetime || '');
            formDataToSend.append('events_timezone', this.formData.events_timezone || '');
            formDataToSend.append('events_category', this.formData.events_category);
            formDataToSend.append('events_status', this.formData.events_status);

            [1, 2, 3].forEach(slot => {
                if (this.formData[`events_image_${slot}`] instanceof File) {
                    formDataToSend.append(`events_image_${slot}`, this.formData[`events_image_${slot}`]);
                    formDataToSend.append(`events_image_alt_${slot}`, this.formData[`events_image_alt_${slot}`] || this.formData.events_title);
                }
            });

            try {
                const response = await fetch('/api/events', {
                    method: 'POST',
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

                this.successMessage = this.formData.events_status === 'Published'
                    ? 'Event published successfully!'
                    : 'Event saved as draft!';

                setTimeout(() => {
                    window.location.href = '/events-manager';
                }, 1500);
            } catch (error) {
                this.errors.general = 'An error occurred while saving: ' + error.message;
                console.error('Error saving event:', error);
            } finally {
                this.isLoading = false;
            }
        },

        goBack() {
            window.location.href = '/events-manager';
        }
    },
    template: `
        <div class="add-input-form">

            <div class="title-con">
                <span class="r-header-text">Event Details</span>
            </div>

            <!-- Title -->
            <p class="field-error" v-if="errors.events_title">{{ errors.events_title }}</p>
            <input
                v-model="formData.events_title"
                class="add-form-box title-input"
                type="text"
                placeholder="Event Title"
            >

            <!-- Category -->
            <p class="field-error" v-if="errors.events_category">{{ errors.events_category }}</p>
            <input
                v-model="formData.events_category"
                class="add-form-box title-input"
                type="text"
                placeholder="Event Category (e.g. Dinner Party, Airshow)"
            >

            <!-- Description -->
            <label class="r-header-text content-title">Description</label>
            <p class="field-error" v-if="errors.events_description">{{ errors.events_description }}</p>
            <textarea
                v-model="formData.events_description"
                class="add-content-box"
                placeholder="Enter event description..."
            ></textarea>

            <section class="add-form-inputs">
                <article class="twin-inputs">
                    <!-- Start DateTime -->
                    <div class="left-box">
                        <label class="r-header-text">Start Date & Time</label>
                        <p class="field-error" v-if="errors.events_start_datetime">{{ errors.events_start_datetime }}</p>
                        <input
                            v-model="formData.events_start_datetime"
                            class="add-form-box"
                            type="datetime-local"
                        >
                    </div>

                    <!-- End DateTime -->
                    <div class="left-box">
                        <label class="r-header-text">End Date & Time</label>
                        <input
                            v-model="formData.events_end_datetime"
                            class="add-form-box"
                            type="datetime-local"
                        >
                    </div>
                </article>

                <article class="twin-inputs">
                    <!-- Timezone -->
                    <div class="left-box">
                        <label class="r-header-text">Timezone (optional)</label>
                        <input
                            v-model="formData.events_timezone"
                            class="add-form-box"
                            type="text"
                            placeholder="e.g. EST, UTC-5"
                        >
                    </div>

                    <!-- Status -->
                    <div class="left-box">
                        <label class="r-header-text">Status</label>
                        <select v-model="formData.events_status" class="add-form-box">
                            <option value="Draft">Draft</option>
                            <option value="Published">Published</option>
                            <option value="Sold Out">Sold Out</option>
                            <option value="Cancelled">Cancelled</option>
                        </select>
                    </div>
                </article>
            </section>

            <!-- Images -->
            <div class="title-con" style="margin-top: 2rem;">
                <span class="r-header-text">Event Images</span>
            </div>

            <div v-for="slot in [1, 2, 3]" :key="slot" class="right-box drag-and-drop-con" style="margin-bottom: 1.5rem;">
                <label class="r-header-text">Image {{ slot }} {{ slot === 1 ? '(Featured)' : '(Optional)' }}</label>
                <p class="field-error" v-if="errors['events_image_' + slot]">{{ errors['events_image_' + slot] }}</p>

                <div
                    class="drag-and-drop-images"
                    @dragover.prevent="isDragging = true"
                    @dragleave.prevent="isDragging = false"
                    @drop.prevent="handleImageDrop($event, slot)"
                    :class="{ 'dragging': isDragging }"
                >
                    <input
                        :ref="'fileInput' + slot"
                        type="file"
                        accept="image/*"
                        @change="handleImageSelect($event, slot)"
                        style="display: none;"
                    >

                    <div v-if="!$data['imagePreview' + slot]" class="drop-zone-content">
                        <p>Drag and drop image here or <a href="#" @click.prevent="$refs['fileInput' + slot].click()">click to browse</a></p>
                    </div>

                    <div v-else class="image-preview">
                        <img :src="$data['imagePreview' + slot]" :alt="formData['events_image_alt_' + slot]">
                        <button type="button" @click="removeImage(slot)" class="remove-image-btn">Remove</button>
                    </div>
                </div>

                <input
                    v-if="$data['imagePreview' + slot]"
                    v-model="formData['events_image_alt_' + slot]"
                    type="text"
                    placeholder="Image alt text (for accessibility)"
                    class="add-form-box"
                    style="margin-top: 10px;"
                >
            </div>

            <!-- Buttons -->
            <div class="button-con">
                <button class="add-button cancel-button" type="button" @click="goBack">Cancel</button>
                <button
                    class="add-button save-button"
                    type="button"
                    @click="submitForm('Draft')"
                    :disabled="isLoading"
                >
                    {{ isLoading ? 'Saving...' : 'Save as Draft' }}
                </button>
                <button
                    class="add-button publish-button"
                    type="button"
                    @click="submitForm('Published')"
                    :disabled="isLoading"
                >
                    {{ isLoading ? 'Publishing...' : 'Publish Event' }}
                </button>
            </div>

            <div v-if="successMessage" class="success-message">{{ successMessage }}</div>
            <div v-if="errors.general" class="error-message">{{ errors.general }}</div>
        </div>
    `
}