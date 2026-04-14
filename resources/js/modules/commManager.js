export default {
    data() {
        return {
            currentTable: 'main',
            records: [],
            isLoading: true,
            errors: {},
            searchQuery: '',
            deleteId: null,
            showDeleteConfirm: false,
            
            // Form data
            formData: {
                name: '',
                picture: '',
                rank: '',
                info: '',
                unit: '',
            },
        }
    },
    computed: {
        filteredRecords() {
            return this.records.filter(record =>
                record.name.toLowerCase().includes(this.searchQuery.toLowerCase())
            );
        },
        tableLabel() {
            const labels = {
                'main': 'Main Commemorations',
                'three': 'Number 3 Air Observer School',
                'four': 'Number 4 Air Observer School'
            };
            return labels[this.currentTable];
        },
        apiEndpoint() {
            const endpoints = {
                'main': 'http://127.0.0.1:8000/api/commJson',
                'three': 'http://127.0.0.1:8000/api/commThree',
                'four': 'http://127.0.0.1:8000/api/commFour'
            };
            return endpoints[this.currentTable];
        }
    },
    mounted() {
        this.fetchRecords();
    },
    methods: {
        switchTable(tableName) {
            this.currentTable = tableName;
            this.searchQuery = '';
            this.resetForm();
            this.fetchRecords();
        },

        async fetchRecords() {
            this.isLoading = true;
            try {
                const response = await fetch(this.apiEndpoint);
                
                if (!response.ok) {
                    throw new Error('Failed to fetch records');
                }

                this.records = await response.json();
                this.isLoading = false;
            } catch (error) {
                console.error('Error fetching records:', error);
                this.errors.general = 'Failed to load records';
                this.isLoading = false;
            }
        },

        openDeleteConfirm(recordId) {
            this.deleteId = recordId;
            this.showDeleteConfirm = true;
        },

        closeDeleteConfirm() {
            this.deleteId = null;
            this.showDeleteConfirm = false;
        },

        async deleteRecord() {
            if (!this.deleteId) return;

            try {
                const response = await fetch(`${this.apiEndpoint}/${this.deleteId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
                    }
                });

                if (!response.ok) {
                    throw new Error('Failed to delete record');
                }

                this.records = this.records.filter(record => record.id !== this.deleteId);
                this.closeDeleteConfirm();
            } catch (error) {
                console.error('Error deleting record:', error);
                this.errors.general = 'Failed to delete record';
            }
        },

        goToEdit(recordId) {
            window.location.href = `/comm-manager-edit/${this.currentTable}/${recordId}`;
        },

        goToCreate() {
            window.location.href = `/comm-manager-add/${this.currentTable}`;
        },

        resetForm() {
            this.formData = {
                name: '',
                picture: '',
                rank: '',
                info: '',
                unit: '',
            };
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

            <!-- Tabs -->
            <div class="comm-tabs">

                <button 
                    class="tab-button"
                    :class="{ 'active': currentTable === 'main' }"
                    @click="switchTable('main')">
                    Main Commemorations
                </button>

                <button 
                    class="tab-button"
                    :class="{ 'active': currentTable === 'three' }"
                    @click="switchTable('three')">
                    School 3
                </button>

                <button 
                    class="tab-button"
                    :class="{ 'active': currentTable === 'four' }"
                    @click="switchTable('four')">
                    School 4
                </button>

            </div>

            <!-- Header -->
            <div class="manager-header">

                <h2 class="r-header-text">{{ tableLabel }}</h2>

                    <button class="create-button add-button publish-button" @click="goToCreate">
                        + Add Entry
                    </button>

            </div>

            <!-- Search -->
            <div class="search-con">

                <input 
                    v-model="searchQuery"
                    type="text"
                    class="add-form-box"
                    placeholder="Search by name...">

            </div>

            <!-- Error -->
            <div v-if="errors.general" class="error-message">
                {{ errors.general }}
            </div>

            <!-- Loading -->
            <div v-if="isLoading" class="loading-message">
                Loading records...
            </div>

            <!-- Empty State -->
            <div v-else-if="records.length === 0" class="empty-state">
                <p class="body-text">No entries yet. <a href="#" @click.prevent="goToCreate">Add one now!</a></p>
            </div>

            <!-- Records List -->
            <div v-else class="manager-list">
                <div class="manager-list-header comm-manager-grid">
                    <div class="col-name r-body-text">Name</div>
                    <div class="col-rank r-body-text">Rank</div>
                    <div class="col-unit r-body-text">Unit</div>
                    <div class="col-date r-body-text">Created</div>
                    <div class="col-actions r-body-text">Actions</div>
                </div>

                <div v-for="record in filteredRecords" :key="record.id" class="manager-list-item comm-manager-grid">
                    <div class="col-name">
                        <h4 class="r-body-text">{{ record.name }}</h4>
                    </div>
                    <div class="col-rank">
                        <p class="small-text">{{ record.rank }}</p>
                    </div>
                    <div class="col-unit">
                        <p class="small-text">{{ record.unit }}</p>
                    </div>
                    <div class="col-date">
                        <p class="small-text">{{ formatDate(record.created_at) }}</p>
                    </div>
                    <div class="col-actions">
                        <button 
                            class="add-button save-button"
                            @click="goToEdit(record.id)"
                            title="Edit"
                        >
                            Edit
                        </button>
                        <button 
                            class="add-button publish-button"
                            @click="openDeleteConfirm(record.id)"
                            title="Delete"
                        >
                            Delete
                        </button>
                    </div>
                </div>

                <!-- No Results -->
                <div v-if="filteredRecords.length === 0" class="empty-state">
                    <p class="body-text">No records match your search.</p>
                </div>
            </div>

            <!-- Delete Confirmation Modal -->
            <div v-if="showDeleteConfirm" class="modal-overlay">
                <div class="modal-content">
                    <h3 class="r-header-text">Delete Entry?</h3>
                    <p class="body-text">Are you sure? This action cannot be undone.</p>
                    
                    <div class="modal-buttons">
                        <button 
                            class="add-button cancel-button"
                            @click="closeDeleteConfirm"
                        >
                            Cancel
                        </button>
                        <button 
                            class="add-button delete-btn"
                            @click="deleteRecord"
                        >
                            Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
    `
}