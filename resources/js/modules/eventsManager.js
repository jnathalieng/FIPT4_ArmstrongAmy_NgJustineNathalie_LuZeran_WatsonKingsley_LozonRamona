export default {
    data() {
        return {
            events: [],
            isLoading: true,
            errors: {},
            deleteId: null,
            showDeleteConfirm: false,
            searchQuery: '',
        }
    },
    computed: {
        filteredBlogs() {
            return this.events.filter(event => 
                event.events_title.toLowerCase().includes(this.searchQuery.toLowerCase())
            );
        }
    },
    mounted() {
        this.fetchBlogs();
    },
    methods: {
        async fetchBlogs() {
            this.isLoading = true;
            try {
                const response = await fetch('/api/events');
                
                if (!response.ok) {
                    throw new Error('Failed to fetch events');
                }

                this.events = await response.json();
                this.isLoading = false;
            } catch (error) {
                console.error('Error fetching events:', error);
                this.errors.general = 'Failed to load event posts';
                this.isLoading = false;
            }
        },

        goToCreate() {
            window.location.href = '/events-manager-add';
        },

        goToEdit(eventId) {
            window.location.href = `/event-manager-edit/${eventId}`;
        },

        openDeleteConfirm(eventId) {
            this.deleteId = eventId;
            this.showDeleteConfirm = true;
        },

        closeDeleteConfirm() {
            this.deleteId = null;
            this.showDeleteConfirm = false;
        },

        async deleteBlog() {
            if (!this.deleteId) return;

            try {
                const response = await fetch(`/api/events/${this.deleteId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
                    }
                });

                if (!response.ok) {
                    throw new Error('Failed to delete event');
                }

                // Remove from list
                this.events = this.events.filter(event => event.id !== this.deleteId);
                this.closeDeleteConfirm();
            } catch (error) {
                console.error('Error deleting event:', error);
                this.errors.general = 'Failed to delete event post';
            }
        },

        formatDate(dateString) {
            const date = new Date(dateString);
            return date.toLocaleDateString('en-US', { 
                year: 'numeric', 
                month: 'short', 
                day: 'numeric' 
            });
        }
    },
    template: `
        <div class="manager-container">
            <div class="manager-header">
                <h2 class="r-header-text">Events Manager</h2>
                <button class="create-button add-button publish-button" @click="goToCreate">
                    + Create New Post
                </button>
            </div>

            <!-- Search Bar -->
            <div class="search-con">
                <input 
                    v-model="searchQuery"
                    type="text"
                    class="add-form-box"
                    placeholder="Search by title..."
                >
            </div>

            <!-- Error Message -->
            <div v-if="errors.general" class="error-message">
                {{ errors.general }}
            </div>

            <!-- Loading State -->
            <div v-if="isLoading" class="loading-message">
                Loading event posts...
            </div>

            <!-- Empty State -->
            <div v-else-if="events.length === 0" class="empty-state">
                <p class="body-text">No event posts yet. <a href="#" @click.prevent="goToCreate">Create one now!</a></p>
            </div>

            <!-- Blog List -->
            <div v-else class="manager-list">
                <div class="manager-list-header">
                    <div class="r-header-text">Title</div>
                    <div class="r-header-text">Date</div>
                    <div class="r-header-text">Created</div>
                    <div class="r-header-text">Actions</div>
                </div>

                <div v-for="event in filteredBlogs" :key="event.id" class="manager-list-item">
                    <div class="col-title">
                        <h4 class="r-body-text">{{ event.events_title }}</h4>
                    </div>
                    <div>
                        <p class="small-text">{{ event.events_start_datetime }}</p>
                    </div>
                    <div class="col-date">
                        <p class="small-text">{{ formatDate(event.created_at) }}</p>
                    </div>
                    <div class="col-actions">
                        <button 
                            class="save-button add-button"
                            @click="goToEdit(event.id)"
                            title="Edit"
                        >
                            Edit
                        </button>
                        <button 
                            class="publish-button add-button"
                            @click="openDeleteConfirm(event.id)"
                            title="Delete"
                        >
                            Delete
                        </button>
                    </div>
                </div>

                <!-- No Results Message -->
                <div v-if="filteredBlogs.length === 0" class="empty-state">
                    <p class="body-text">No events match your search.</p>
                </div>
            </div>

            <!-- Delete Confirmation Modal -->
            <div v-if="showDeleteConfirm" class="modal-overlay">
                <div class="modal-content">
                    <h3 class="r-header-text">Delete Blog Post?</h3>
                    <p class="body-text">Are you sure you want to delete this event post? This action cannot be undone.</p>
                    
                    <div class="modal-buttons">
                        <button 
                            class="add-button cancel-button"
                            @click="closeDeleteConfirm"
                        >
                            Cancel
                        </button>
                        <button 
                            class="add-button delete-btn"
                            @click="deleteBlog"
                        >
                            Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
    `
}