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
        },
images: {
    1: { file: null, preview: null, existing: null, removed: false, alt: '', dragging: false },
    2: { file: null, preview: null, existing: null, removed: false, alt: '', dragging: false },
    3: { file: null, preview: null, existing: null, removed: false, alt: '', dragging: false }
},
        errors: {},
        isLoading: false,
        isDragging: false,
        successMessage: '',
        loading: true,
        eventId: null,
    }
    },
    methods: {
        handleImageDrop(e, slot) {
            this.images[slot].dragging = false;
            const file = e.dataTransfer.files[0];
            if (file) {
                this.handleImageSelect({ target: { files: [file] } }, slot);
            }
        },

        handleImageSelect(e, slot) {
            const file = e.target.files[0];
            if (!file) return;

            if (!file.type.startsWith('image/')) return;
            if (file.size > 5 * 1024 * 1024) return;

            const reader = new FileReader();

            reader.onload = (e) => {
                this.images[slot].file = file;
                this.images[slot].preview = e.target.result;
                this.images[slot].removed = false;
            };

            reader.readAsDataURL(file);
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
            const img = this.images[slot];

            img.file = null;
            img.preview = null;

            if (img.existing) {
                img.removed = true;
            }
        },

        async submitForm(status) {
            this.formData.events_status = status;
            await this.saveEvent();
        },

        browseFiles(slot) {
            const input = document.querySelector(`input[data-slot="${slot}"]`);
            if (input) input.click();
        },

        async submitForm() {
            await this.saveEvent();
        },

        async saveEvent() {
                if (!this.formData.events_title.trim()) {
                this.errors.events_title = 'Title is required';
                this.isLoading = false;
                return;
            }
            this.isLoading = true;
            this.errors = {};

            const formDataToSend = new FormData();

            formDataToSend.append('events_title', this.formData.events_title);
            formDataToSend.append('events_description', this.formData.events_description);
            formDataToSend.append('events_start_datetime', this.formData.events_start_datetime);
            formDataToSend.append('events_end_datetime', this.formData.events_end_datetime || '');
            formDataToSend.append('events_timezone', this.formData.events_timezone || '');
            formDataToSend.append('events_category', this.formData.events_category);
            formDataToSend.append('events_status', this.formData.events_status);

            [1,2,3].forEach(slot => {
                const img = this.images[slot];

                if (img.file) {
                    formDataToSend.append(`events_image_${slot}`, img.file);
                }

                formDataToSend.append(`events_image_alt_${slot}`, img.alt || '');

                if (img.removed) {
                    formDataToSend.append(`events_image_remove_${slot}`, '1');
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
                    this.errors = errorData.errors || {};
                    return;
                }

                this.successMessage = 'Event updated successfully!';

                setTimeout(() => {
                    window.location.href = '/events-manager';
                }, 1500);

            } catch (error) {
                this.errors.general = error.message;
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

    <section class="add-form-inputs">

        <article class="twin-inputs">

            <!-- Title -->
        <div class="left-box">
            <p class="field-error" v-if="errors.events_title">{{ errors.events_title }}</p>
            <label for="title" class="r-body-text">Event Title</label>
            <input
                v-model="formData.events_title"
                class="add-form-box"
                type="text"
                placeholder="Event Title">
                </div>
                
            <!-- Category -->
        <div class="left-box">
            <p class="field-error" v-if="errors.events_category">{{ errors.events_category }}</p>
            <label for="category" class="r-body-text">Event Type</label>
            <input
                v-model="formData.events_category"
                class="add-form-box"
                name="category"
                type="text"
                placeholder="Event Category (e.g. Dinner Party, Airshow)">
                </div>
                
            <!-- Description -->
        <div class="left-box">
            <label class="r-body-text content-title">Description</label>
            <p class="field-error" v-if="errors.events_description">{{ errors.events_description }}</p>
            <textarea
                v-model="formData.events_description"
                class="add-content-box"
                placeholder="Enter event description...">
            </textarea>
        </div>
    </article>

                <article class="twin-inputs">

                    <!-- Start DateTime -->
                    <div class="right-box">
                        <label class="r-body-text">Start Date & Time</label>
                        <p class="field-error" v-if="errors.events_start_datetime">{{ errors.events_start_datetime }}</p>
                        <input
                            v-model="formData.events_start_datetime"
                            class="add-form-box"
                            type="datetime-local">
                    </div>

                    <!-- End DateTime -->
                    <div class="right-box">
                        <label class="r-body-text">End Date & Time</label>
                        <input
                            v-model="formData.events_end_datetime"
                            class="add-form-box"
                            type="datetime-local">
                    </div>

                    <!-- Timezone -->
                    <div class="right-box">
                        <label class="r-body-text">Timezone (optional)</label>
                        <input
                            v-model="formData.events_timezone"
                            class="add-form-box"
                            type="text"
                            placeholder="e.g. EST, UTC-5">
                    </div>

                    <!-- Status -->
                    <div class="right-box">
                        <label class="r-body-text">Status</label>
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
                            @dragover.prevent="images[slot].dragging = true"
                            @dragleave.prevent="images[slot].dragging = false"
                            @drop.prevent="handleImageDrop($event, slot)"
                            :class="{ 'dragging': images[slot].dragging }">
                    <input
                        :data-slot="slot"
                        type="file"
                        accept="image/*"
                        @change="handleImageSelect($event, slot)"
                        style="display: none;">

                        <!-- No image -->
                        <div v-if="!images[slot].preview" class="drop-zone-content">
                            <p>Drag and drop image here or <a href="#" @click.prevent="browseFiles(slot)">click to browse</a></p>
                        </div>

                        <div v-if="images[slot].removed" class="removed-label">
                            Image will be removed on save
                        </div>
                        
                        <!-- Image preview -->
                        <div v-else class="image-preview">
                            <img :src="images[slot].preview" :alt="images[slot].alt" />

                            <button type="button" @click="removeImage(slot)" class="remove-image-btn">
                                Remove
                            </button>
                        </div>
                    </div>
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