export default {
    data() {
        return {
            galleries: [],
            selectedGallery: null,
            isMobile: window.innerWidth < 768
        }
    },
    computed: {
        currentGallery() {
            return this.galleries.find(g => g.id === this.selectedGallery) || this.galleries[0];
        }
    },
    mounted() {
        // Fetch all galleries from Laravel
        this.galleries = window.galleriesData || [];
        this.selectedGallery = this.galleries[0]?.id;
        
        // Handle responsive changes
        window.addEventListener('resize', () => {
            this.isMobile = window.innerWidth < 768;
        });
    },
    methods: {
        selectGallery(galleryId) {
            this.selectedGallery = galleryId;
        },
        getImagePath(image) {
            const folder = this.isMobile ? 'mobile' : 'desktop';
            return `/images/${this.currentGallery.folder_path}/${folder}/${image.filename}`;
        }
    },
    template: `
        <div class="gallery-container">
            <!-- Gallery Selection Buttons -->
            <div class="gallery-buttons">
                <button 
                    v-for="gallery in galleries" 
                    :key="gallery.id"
                    @click="selectGallery(gallery.id)"
                    :class="{ active: selectedGallery === gallery.id }"
                    class="gallery-button"
                >
                    {{ gallery.title }}
                </button>
            </div>
            
            <!-- Gallery Info Section -->
            <section class="gallery-info">
                <h2>{{ currentGallery.title }}</h2>
                <h3>{{ currentGallery.subtitle }}</h3>
                <p>{{ currentGallery.description }}</p>
            </section>
            
            <!-- Gallery Grid -->
            <section class="gallery-grid">
                <img 
                    v-for="image in currentGallery.images"
                    :key="image.id"
                    :src="getImagePath(image)"
                    :alt="image.alt_text"
                    class="gallery-image"
                />
            </section>
        </div>
    `
}