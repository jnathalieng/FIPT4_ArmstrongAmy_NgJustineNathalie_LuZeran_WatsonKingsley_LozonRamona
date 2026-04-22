export default {
  data() {
    return {
      currentIndex: 0,
      items: [],
      displayItems: [],
      loading: true,
      error: null
    };
  },
  mounted() {
    this.fetchEvents();
  },
  methods: {
    async fetchEvents() {
      try {
        this.loading = true;
        const response = await fetch('/api/events');
        
        if (!response.ok) throw new Error('Failed to load events');
        
        const events = await response.json();
        
        this.items = events.map(event => ({
          id: event.id,
          type: 'event',
          title: event.events_title,
          description: event.events_description,
          date: new Date(event.events_start_datetime).toLocaleDateString('en-US', {
            year: 'numeric',
            month: 'long',
            day: 'numeric'
          }),
          meta: event.events_category,
          image: event.images && event.images[0] 
            ? event.images[0].path 
            : '/images/placeholder.jpg'
        }));

        // Create infinite loop: duplicate items to cycle through
        this.displayItems = [...this.items, ...this.items, ...this.items];
        this.currentIndex = this.items.length; // Start at original first item
      } catch (err) {
        this.error = err.message;
        console.error('Carousel error:', err);
      } finally {
        this.loading = false;
      }
    },
    nextSlide() {
      this.currentIndex++;
      
      // Loop back to start when reaching the end
      if (this.currentIndex >= this.displayItems.length - this.items.length) {
        this.currentIndex = this.items.length;
      }
    },
    prevSlide() {
      this.currentIndex--;
      
      // Loop to end when at the start
      if (this.currentIndex < this.items.length) {
        this.currentIndex = this.displayItems.length - 2 * this.items.length;
      }
    }
  },
  
  template: `
    <div class="carousel-container">
      <div v-if="loading" class="carousel-loading">Loading events...</div>
      
      <div v-else-if="error" class="carousel-error">{{ error }}</div>
      
      <div v-else-if="items.length > 0" class="carousel-wrapper">
        <div class="carousel-track" :style="{ transform: 'translateX(-' + (currentIndex * (100 / 3)) + '%)' }">
          <div v-for="(item, idx) in displayItems" :key="'slide-' + idx" class="carousel-slide">
            <div class="card" :class="{ center: idx === currentIndex + 1 }">
              <img :src="item.image" :alt="item.title" class="card-image" />
              <div class="card-content">
                <div class="card-meta">
                  <span class="meta-label">{{ item.meta }}</span>
                  <span class="meta-icon">📅</span>
                </div>
                <h3 class="card-title">{{ item.title }}</h3>
                <div class="card-date">{{ item.date }}</div>
              </div>
            </div>
          </div>
        </div>
        <button class="nav-btn nav-prev" @click="prevSlide" title="Previous">←</button>
        <button class="nav-btn nav-next" @click="nextSlide" title="Next">→</button>
      </div>

      <div v-else class="carousel-empty">No events available</div>

      <div v-if="items.length > 1" class="carousel-indicators">
        <button 
          v-for="(item, idx) in items" 
          :key="'dot-' + idx"
            class="indicator-dot"
            :class="{ active: idx === ((currentIndex + 1) % items.length) }"
            @click="currentIndex = items.length + idx - 1"
          :aria-label="'Go to slide ' + (idx + 1)"
        />
      </div>
    </div>
  `
};