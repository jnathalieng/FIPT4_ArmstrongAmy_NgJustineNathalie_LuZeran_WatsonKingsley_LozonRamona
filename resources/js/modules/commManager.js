export default {
    data() {
        return {
            comms: [],
            isLoading: true,
            errors: {},
            deleteId: null,
            showDeleteConfirm: false,
            searchQuery: '',
        }
    },
    computed: {
        filteredBlogs() {
            return this.comms.filter(comm => 
                comm.title.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
                comm.slug.toLowerCase().includes(this.searchQuery.toLowerCase())
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
                const response = await fetch('/api/comms');
                
                if (!response.ok) {
                    throw new Error('Failed to fetch comms');
                }

                this.comms = await response.json();
                this.isLoading = false;
            } catch (error) {
                console.error('Error fetching comms:', error);
                this.errors.general = 'Failed to load comm posts';
                this.isLoading = false;
            }
        },

        goToCreate() {
            window.location.href = '/comm-manager-add';
        },

        goToEdit(commId) {
            window.location.href = `/comm-manager-edit/${commId}`;
        },

        openDeleteConfirm(commId) {
            this.deleteId = commId;
            this.showDeleteConfirm = true;
        },

        closeDeleteConfirm() {
            this.deleteId = null;
            this.showDeleteConfirm = false;
        },

        async deleteBlog() {
            if (!this.deleteId) return;

            try {
                const response = await fetch(`/api/comms/${this.deleteId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
                    }
                });

                if (!response.ok) {
                    throw new Error('Failed to delete comm');
                }

                // Remove from list
                this.comms = this.comms.filter(comm => comm.id !== this.deleteId);
                this.closeDeleteConfirm();
            } catch (error) {
                console.error('Error deleting comm:', error);
                this.errors.general = 'Failed to delete comm post';
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
                <h2 class="r-header-text">Blog Manager</h2>
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
                Loading comm posts...
            </div>

            <!-- Empty State -->
            <div v-else-if="comms.length === 0" class="empty-state">
                <p class="body-text">No comm posts yet. <a href="#" @click.prevent="goToCreate">Create one now!</a></p>
            </div>

            <!-- Blog List -->
            <div v-else class="manager-list">
                <div class="manager-list-header">
                    <div class="r-header-text">Title</div>
                    <div class="r-header-text">Link Header</div>
                    <div class="r-header-text">Created</div>
                    <div class="r-header-text">Actions</div>
                </div>

                <div v-for="comm in filteredBlogs" :key="comm.id" class="manager-list-item">
                    <div class="col-title">
                        <h4 class="r-body-text">{{ comm.title }}</h4>
                    </div>
                    <div class="col-slug">
                        <p class="small-text">{{ comm.slug }}</p>
                    </div>
                    <div class="col-date">
                        <p class="small-text">{{ formatDate(comm.created_at) }}</p>
                    </div>
                    <div class="col-actions">
                        <button 
                            class="save-button add-button"
                            @click="goToEdit(comm.id)"
                            title="Edit"
                        >
                            Edit
                        </button>
                        <button 
                            class="publish-button add-button"
                            @click="openDeleteConfirm(comm.id)"
                            title="Delete"
                        >
                            Delete
                        </button>
                    </div>
                </div>

                <!-- No Results Message -->
                <div v-if="filteredBlogs.length === 0" class="empty-state">
                    <p class="body-text">No comms match your search.</p>
                </div>
            </div>

            <!-- Delete Confirmation Modal -->
            <div v-if="showDeleteConfirm" class="modal-overlay">
                <div class="modal-content">
                    <h3 class="r-header-text">Delete Blog Post?</h3>
                    <p class="body-text">Are you sure you want to delete this comm post? This action cannot be undone.</p>
                    
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