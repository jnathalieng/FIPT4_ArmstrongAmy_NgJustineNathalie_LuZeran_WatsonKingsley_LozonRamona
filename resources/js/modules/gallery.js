export default {
    data() {
        return {
            galleries: [],
            selectedGallery: null,
            isMobile: window.innerWidth < 768,
            selectedImage: null
        }
    },
    computed: {
        currentGallery() {
            return this.galleries.find(g => g.id === this.selectedGallery) || this.galleries[0];
        }
    },
mounted() {
    // Fetch galleries from API instead of window object
    fetch('/api/galleries')
        .then(res => res.json())
        .then(data => {
            this.galleries = data;
            this.selectedGallery = this.galleries[0]?.id;
        })
        .catch(err => console.error('Error loading galleries:', err));
    
    // Handle responsive changes
    window.addEventListener('resize', () => {
        this.isMobile = window.innerWidth < 768;
    });
},
methods: {
    selectGallery(galleryId) {
        this.selectedGallery = galleryId;
    },
    openLightbox(image) {  // ← Add this
        this.selectedImage = image;
    },
    closeLightbox() {  // ← Add this
        this.selectedImage = null;
    },
    getImagePath(image, version = 'mobile') {
        const folderPath = image.folder_path || this.currentGallery.folder_path;
        
        // Fallback logic
        if (version === 'desktop') {
            const filename = image.filename_desktop || image.filename_mobile;
            if (!filename) return null;
            return `/images/${folderPath}/desktop/${filename}`;
        } else {
            const filename = image.filename_mobile || image.filename_desktop;
            if (!filename) return null;
            return `/images/${folderPath}/mobile/${filename}`;
        }
    }
},
template: `
    <div class="gallery-container">
        <!-- Gallery Selection Buttons -->
        <div class="button-list" v-if="galleries.length > 0">
            <button 
                v-for="gallery in galleries" 
                :key="gallery.id"
                @click="selectGallery(gallery.id)"
                :class="{ active: selectedGallery === gallery.id }"
                class="box-button"
            >
                {{ gallery.title }}
            </button>
        </div>
        
        <!-- Gallery Info Section -->
        <section class="gallery-info" v-if="currentGallery">
            <h2 class="r-title-text">{{ currentGallery.title.toUpperCase() }}</h2>
            <h3 class="header-text">{{ currentGallery.subtitle }}</h3>
            <p class="body-text">{{ currentGallery.description }}</p>
        </section>
        
        <!-- Gallery Grid -->
        <section class="gallery-grid" v-if="currentGallery && currentGallery.images">
            <img 
                v-for="image in currentGallery.images"
                :key="image.id"
                :src="getImagePath(image, 'mobile')"
                :alt="image.alt_text"
                class="gallery-image"
                @click="openLightbox(image)"
            />
        </section>
        
        <!-- Lightbox (shows desktop version) -->
        <div v-if="selectedImage" class="lightbox" @click="closeLightbox()">
            <div class="lightbox-content" @click.stop>
                <img v-if="getImagePath(selectedImage, 'desktop')" :src="getImagePath(selectedImage, 'desktop')" :alt="selectedImage.alt_text">
                <button class="button" @click="closeLightbox()">Close</button>
            </div>
        </div>

        <!-- Loading state (optional) -->
        <div v-if="galleries.length === 0" class="loading">
            Loading galleries...
        </div>
    </div>
`
}