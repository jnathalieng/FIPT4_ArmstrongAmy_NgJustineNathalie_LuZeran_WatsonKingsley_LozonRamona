import { createApp, ref, computed, onMounted } from 'vue';

const GalleryManager = {
    template: `
    <div class="manager-container">

        <!-- Header -->
        <div class="manager-header">
            <h2>Gallery Manager</h2>
            <button class="action-btn edit-btn create-button" @click="openAddGalleryModal">
                + New Gallery
            </button>
        </div>

        <!-- Error / Success -->
        <div v-if="error" class="error-message">{{ error }}</div>
        <div v-if="successMsg" class="success-message">{{ successMsg }}</div>

        <!-- Loading -->
        <div v-if="loading" class="loading-message">Loading galleries...</div>

        <!-- Gallery List -->
        <div v-else>
            <div v-if="galleries.length === 0" class="empty-state">
                <p>No galleries found. <a @click="openAddGalleryModal">Create your first gallery.</a></p>
            </div>

            <!-- Each Gallery accordion -->
            <div
                v-for="gallery in galleries"
                :key="gallery.id"
                class="gallery-section"
            >
                <!-- Gallery Header Row -->
                <div class="gallery-header-row" @click="toggleGallery(gallery.id)">
                    <div class="gallery-header-left">
                        <span class="gallery-chevron" :class="{ open: openGalleries.includes(gallery.id) }">&#9656;</span>
                        <div>
                            <strong>{{ gallery.title }}</strong>
                            <span class="gallery-meta">{{ gallery.slug }} &mdash; {{ gallery.images ? gallery.images.length : 0 }} image(s)</span>
                        </div>
                    </div>
                    <div class="gallery-header-actions" @click.stop>
                        <button class="action-btn edit-btn" @click="openEditGalleryModal(gallery)">Edit Gallery</button>
                        <button class="action-btn delete-btn" @click="confirmDeleteGallery(gallery)">Delete Gallery</button>
                    </div>
                </div>

                <!-- Expanded Image List -->
                <div v-if="openGalleries.includes(gallery.id)" class="gallery-images-panel">

                    <!-- Add Image button -->
                    <div class="images-panel-header">
                        <span class="images-count">{{ gallery.images ? gallery.images.length : 0 }} image(s) in <em>{{ gallery.folder_path }}</em></span>
                        <button class="action-btn edit-btn" @click="openAddImageModal(gallery)">+ Add Image</button>
                    </div>

                    <!-- Image list header -->
                    <div v-if="gallery.images && gallery.images.length > 0">
                        <div class="image-list-header">
                            <div>Order</div>
                            <div>Desktop Filename</div>
                            <div>Mobile Filename</div>
                            <div>Alt Text</div>
                            <div>Actions</div>
                        </div>

                        <div
                            v-for="image in sortedImages(gallery.images)"
                            :key="image.id"
                            class="image-list-item"
                        >
                            <div data-label="Order">{{ image.order }}</div>
                            <div data-label="Desktop" class="filename-cell">{{ image.filename_desktop || '—' }}</div>
                            <div data-label="Mobile" class="filename-cell">{{ image.filename_mobile || '—' }}</div>
                            <div data-label="Alt Text">{{ image.alt_text || '—' }}</div>
                            <div class="image-actions" data-label="Actions">
                                <button class="action-btn edit-btn" @click="openEditImageModal(image, gallery)">Edit</button>
                                <button class="action-btn delete-btn" @click="confirmDeleteImage(image, gallery)">Delete</button>
                            </div>
                        </div>
                    </div>

                    <div v-else class="empty-state" style="padding: 20px;">
                        No images in this gallery yet.
                        <a @click="openAddImageModal(gallery)">Add one now.</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ==================== GALLERY MODAL ==================== -->
        <div v-if="showGalleryModal" class="modal-overlay" @click.self="closeGalleryModal">
            <div class="modal-content modal-wide">
                <h3>{{ editingGallery ? 'Edit Gallery' : 'New Gallery' }}</h3>

                <div class="add-form">
                    <div class="add-form-box">
                        <label>Title *</label>
                        <input class="drop-down-menu" v-model="galleryForm.title" placeholder="e.g. Battle of Britain" />
                    </div>
                    <div class="add-form-box">
                        <label>Slug *</label>
                        <input class="drop-down-menu" v-model="galleryForm.slug" placeholder="e.g. battle-of-britain" />
                    </div>
                    <div class="add-form-box">
                        <label>Subtitle</label>
                        <input class="drop-down-menu" v-model="galleryForm.subtitle" placeholder="Short subtitle..." />
                    </div>
                    <div class="add-form-box">
                        <label>Description</label>
                        <textarea class="add-content-box" v-model="galleryForm.description" rows="3" placeholder="Gallery description..."></textarea>
                    </div>
                    <div class="add-form-inputs">
                        <div class="left-box">
                            <label>Folder Path *</label>
                            <input class="drop-down-menu" v-model="galleryForm.folder_path" placeholder="e.g. BOB-images" />
                        </div>
                        <div class="right-box">
                            <label>Order</label>
                            <input class="drop-down-menu" type="number" v-model.number="galleryForm.order" min="0" />
                        </div>
                    </div>
                </div>

                <div v-if="modalError" class="error-message">{{ modalError }}</div>

                <div class="modal-buttons">
                    <button class="add-button cancel-button" @click="closeGalleryModal">Cancel</button>
                    <button class="add-button save-button" @click="saveGallery" :disabled="saving">
                        {{ saving ? 'Saving...' : 'Save Gallery' }}
                    </button>
                </div>
            </div>
        </div>

        <!-- ==================== IMAGE MODAL ==================== -->
        <div v-if="showImageModal" class="modal-overlay" @click.self="closeImageModal">
            <div class="modal-content modal-wide">
                <h3>{{ editingImage ? 'Edit Image' : 'Add Image' }}</h3>
                <p class="modal-gallery-label">Gallery: <strong>{{ activeGallery ? activeGallery.title : '' }}</strong></p>

                <div class="add-form">
                    <div class="add-form-inputs">
                        <div class="left-box">
                            <label>Desktop Filename</label>
                            <input class="drop-down-menu" v-model="imageForm.filename_desktop" placeholder="e.g. d-image-name.png" />
                        </div>
                        <div class="right-box">
                            <label>Mobile Filename</label>
                            <input class="drop-down-menu" v-model="imageForm.filename_mobile" placeholder="e.g. m-image-name.png" />
                        </div>
                    </div>
                    <div class="add-form-inputs">
                        <div class="left-box">
                            <label>Folder Path</label>
                            <input class="drop-down-menu" v-model="imageForm.folder_path" placeholder="e.g. BOB-images" />
                        </div>
                        <div class="right-box">
                            <label>Order</label>
                            <input class="drop-down-menu" type="number" v-model.number="imageForm.order" min="0" />
                        </div>
                    </div>
                    <div class="add-form-box">
                        <label>Alt Text</label>
                        <input class="drop-down-menu" v-model="imageForm.alt_text" placeholder="Descriptive alt text for accessibility" />
                    </div>
                </div>

                <div v-if="modalError" class="error-message">{{ modalError }}</div>

                <div class="modal-buttons">
                    <button class="add-button cancel-button" @click="closeImageModal">Cancel</button>
                    <button class="add-button save-button" @click="saveImage" :disabled="saving">
                        {{ saving ? 'Saving...' : 'Save Image' }}
                    </button>
                </div>
            </div>
        </div>

        <!-- ==================== DELETE CONFIRM MODAL ==================== -->
        <div v-if="showDeleteModal" class="modal-overlay" @click.self="closeDeleteModal">
            <div class="modal-content">
                <h3>Confirm Delete</h3>
                <p>{{ deleteModalMessage }}</p>
                <div class="modal-buttons">
                    <button class="add-button cancel-button" @click="closeDeleteModal">Cancel</button>
                    <button class="add-button delete-btn" @click="executeDelete" :disabled="saving">
                        {{ saving ? 'Deleting...' : 'Delete' }}
                    </button>
                </div>
            </div>
        </div>

    </div>
    `,

    setup() {
        const galleries = ref([]);
        const loading = ref(true);
        const error = ref('');
        const successMsg = ref('');
        const saving = ref(false);
        const openGalleries = ref([]);

        // Gallery modal
        const showGalleryModal = ref(false);
        const editingGallery = ref(null);
        const galleryForm = ref(emptyGalleryForm());
        const modalError = ref('');

        // Image modal
        const showImageModal = ref(false);
        const editingImage = ref(null);
        const activeGallery = ref(null);
        const imageForm = ref(emptyImageForm());

        // Delete modal
        const showDeleteModal = ref(false);
        const deleteModalMessage = ref('');
        const pendingDelete = ref(null); // { type: 'gallery'|'image', id, galleryId? }

        // ---- Helpers ----

        function emptyGalleryForm() {
            return { title: '', slug: '', subtitle: '', description: '', folder_path: '', order: 0 };
        }

        function emptyImageForm(gallery = null) {
            return {
                gallery_id: gallery ? gallery.id : null,
                filename_desktop: '',
                filename_mobile: '',
                folder_path: gallery ? gallery.folder_path : '',
                alt_text: '',
                order: 0
            };
        }

        function flashSuccess(msg) {
            successMsg.value = msg;
            setTimeout(() => { successMsg.value = ''; }, 3500);
        }

        function sortedImages(images) {
            return [...images].sort((a, b) => a.order - b.order);
        }

        function toggleGallery(id) {
            const idx = openGalleries.value.indexOf(id);
            if (idx === -1) openGalleries.value.push(id);
            else openGalleries.value.splice(idx, 1);
        }

        // ---- API calls ----

        async function fetchGalleries() {
            loading.value = true;
            error.value = '';
            try {
                const res = await fetch('/api/galleries');
                if (!res.ok) throw new Error('Failed to load galleries');
                galleries.value = await res.json();
            } catch (e) {
                error.value = e.message;
            } finally {
                loading.value = false;
            }
        }

        // ---- Gallery Modal ----

        function openAddGalleryModal() {
            editingGallery.value = null;
            galleryForm.value = emptyGalleryForm();
            modalError.value = '';
            showGalleryModal.value = true;
        }

        function openEditGalleryModal(gallery) {
            editingGallery.value = gallery;
            galleryForm.value = {
                title: gallery.title,
                slug: gallery.slug,
                subtitle: gallery.subtitle || '',
                description: gallery.description || '',
                folder_path: gallery.folder_path,
                order: gallery.order
            };
            modalError.value = '';
            showGalleryModal.value = true;
        }

        function closeGalleryModal() {
            showGalleryModal.value = false;
        }

        async function saveGallery() {
            modalError.value = '';
            if (!galleryForm.value.title.trim()) { modalError.value = 'Title is required.'; return; }
            if (!galleryForm.value.slug.trim()) { modalError.value = 'Slug is required.'; return; }
            if (!galleryForm.value.folder_path.trim()) { modalError.value = 'Folder path is required.'; return; }

            saving.value = true;
            try {
                let res;
                if (editingGallery.value) {
                    res = await fetch(`/api/galleries/${editingGallery.value.id}`, {
                        method: 'PUT',
                        headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': getCsrf() },
                        body: JSON.stringify(galleryForm.value)
                    });
                } else {
                    res = await fetch('/api/galleries', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': getCsrf() },
                        body: JSON.stringify(galleryForm.value)
                    });
                }
                if (!res.ok) {
                    const data = await res.json();
                    throw new Error(data.message || 'Save failed');
                }
                closeGalleryModal();
                await fetchGalleries();
                flashSuccess(editingGallery.value ? 'Gallery updated.' : 'Gallery created.');
            } catch (e) {
                modalError.value = e.message;
            } finally {
                saving.value = false;
            }
        }

        // ---- Image Modal ----

        function openAddImageModal(gallery) {
            editingImage.value = null;
            activeGallery.value = gallery;
            imageForm.value = emptyImageForm(gallery);
            modalError.value = '';
            showImageModal.value = true;
        }

        function openEditImageModal(image, gallery) {
            editingImage.value = image;
            activeGallery.value = gallery;
            imageForm.value = {
                gallery_id: image.gallery_id,
                filename_desktop: image.filename_desktop || '',
                filename_mobile: image.filename_mobile || '',
                folder_path: image.folder_path || gallery.folder_path,
                alt_text: image.alt_text || '',
                order: image.order
            };
            modalError.value = '';
            showImageModal.value = true;
        }

        function closeImageModal() {
            showImageModal.value = false;
        }

        async function saveImage() {
            modalError.value = '';
            saving.value = true;
            try {
                let res;
                if (editingImage.value) {
                    res = await fetch(`/api/gallery-images/${editingImage.value.id}`, {
                        method: 'PUT',
                        headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': getCsrf() },
                        body: JSON.stringify(imageForm.value)
                    });
                } else {
                    res = await fetch('/api/gallery-images', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': getCsrf() },
                        body: JSON.stringify(imageForm.value)
                    });
                }
                if (!res.ok) {
                    const data = await res.json();
                    throw new Error(data.message || 'Save failed');
                }
                closeImageModal();
                await fetchGalleries();
                flashSuccess(editingImage.value ? 'Image updated.' : 'Image added.');
            } catch (e) {
                modalError.value = e.message;
            } finally {
                saving.value = false;
            }
        }

        // ---- Delete Modal ----

        function confirmDeleteGallery(gallery) {
            pendingDelete.value = { type: 'gallery', id: gallery.id };
            deleteModalMessage.value = `Are you sure you want to delete the gallery "${gallery.title}"? This will also delete all ${gallery.images ? gallery.images.length : 0} image(s) within it.`;
            showDeleteModal.value = true;
        }

        function confirmDeleteImage(image, gallery) {
            pendingDelete.value = { type: 'image', id: image.id, galleryId: gallery.id };
            deleteModalMessage.value = `Are you sure you want to delete the image "${image.filename_desktop || image.alt_text || 'this image'}"?`;
            showDeleteModal.value = true;
        }

        function closeDeleteModal() {
            showDeleteModal.value = false;
            pendingDelete.value = null;
        }

        async function executeDelete() {
            if (!pendingDelete.value) return;
            saving.value = true;
            try {
                let url = pendingDelete.value.type === 'gallery'
                    ? `/api/galleries/${pendingDelete.value.id}`
                    : `/api/gallery-images/${pendingDelete.value.id}`;

                const res = await fetch(url, {
                    method: 'DELETE',
                    headers: { 'X-CSRF-TOKEN': getCsrf() }
                });
                if (!res.ok) throw new Error('Delete failed');

                closeDeleteModal();
                await fetchGalleries();
                flashSuccess(pendingDelete.value?.type === 'gallery' ? 'Gallery deleted.' : 'Image deleted.');
            } catch (e) {
                error.value = e.message;
                closeDeleteModal();
            } finally {
                saving.value = false;
            }
        }

        // ---- CSRF helper ----

        function getCsrf() {
            return document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';
        }

        // ---- Mount ----

        onMounted(fetchGalleries);

        return {
            galleries, loading, error, successMsg, saving, openGalleries,
            showGalleryModal, editingGallery, galleryForm, modalError,
            showImageModal, editingImage, activeGallery, imageForm,
            showDeleteModal, deleteModalMessage,
            toggleGallery, sortedImages,
            openAddGalleryModal, openEditGalleryModal, closeGalleryModal, saveGallery,
            openAddImageModal, openEditImageModal, closeImageModal, saveImage,
            confirmDeleteGallery, confirmDeleteImage, closeDeleteModal, executeDelete
        };
    }
};

export default GalleryManager;