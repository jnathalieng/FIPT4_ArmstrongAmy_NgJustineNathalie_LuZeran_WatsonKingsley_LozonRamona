export default {
    data() {
        return {
            currentTable: 'main',
            saving: false,
            successMsg: '',
            errors: {},
            formData: {
                name: '', picture: '', rank: '', info: '', unit: '',
                service_number: '', corps: '', age: '', birth: '',
                death: '', enlist: '', grave: '',
                date: '', aircraft: '', incident: '', location: '', details: ''
            }
        }
    },
    computed: {
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
                'main': '/api/comm',
                'three': '/api/commThree',
                'four': '/api/commFour'
            };
            return endpoints[this.currentTable];
        },
        isSchool() {
            return this.currentTable === 'three' || this.currentTable === 'four';
        }
    },
    methods: {
        switchTable(table) {
            this.currentTable = table;
            this.resetForm();
            this.errors = {};
            this.successMsg = '';
        },
        resetForm() {
            this.formData = {
                name: '', 
                picture: '', 
                rank: '', 
                info: '', 
                unit: '',
                service_number: '', 
                corps: '', 
                age: '', 
                birth: '',
                death: '', 
                enlist: '', 
                grave: '',
                date: '', 
                aircraft: '', 
                incident: '', 
                location: '', 
                details: ''
            };
        },
        validate() {
            this.errors = {};
            if (!this.formData.name.trim()) this.errors.name = 'Name is required.';
            return Object.keys(this.errors).length === 0;
        },
        async submitForm() {
            if (!this.validate()) return;
            this.saving = true;
            this.successMsg = '';

            // Build only the fields relevant to the current table
            let payload = {
                name: this.formData.name,
                picture: this.formData.picture,
                rank: this.formData.rank,
                info: this.formData.info,
                unit: this.formData.unit,
            };

            if (!this.isSchool) {
                payload = {
                    ...payload,
                    service_number: this.formData.service_number,
                    corps: this.formData.corps,
                    age: this.formData.age,
                    birth: this.formData.birth,
                    death: this.formData.death,
                    enlist: this.formData.enlist,
                    grave: this.formData.grave,
                };
            } else {
                payload = {
                    ...payload,
                    date: this.formData.date,
                    aircraft: this.formData.aircraft,
                    incident: this.formData.incident,
                    location: this.formData.location,
                    details: this.formData.details,
                };
            }

            try {
                const res = await fetch(this.apiEndpoint, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
                    },
                    body: JSON.stringify(payload)
                });

                if (!res.ok) {
                    const data = await res.json();
                    throw new Error(data.message || 'Failed to save entry.');
                }

                this.successMsg = 'Entry added successfully!';
                this.resetForm();
            } catch (e) {
                this.errors.general = e.message;
            } finally {
                this.saving = false;
            }
        },
        goBack() {
            window.location.href = '/comm-manager';
        }
    },
    template: `
        <div class="manager-container">

            <!-- Header -->
            <div class="manager-header">
                <h2 class="r-header-text">Add Entry — {{ tableLabel }}</h2>
                <button class="add-button cancel-button" @click="goBack">← Back</button>
            </div>

            <!-- Table Selector -->
            <div class="comm-tabs">
                <button class="tab-button" :class="{ active: currentTable === 'main' }" @click="switchTable('main')">Main Commemorations</button>
                <button class="tab-button" :class="{ active: currentTable === 'three' }" @click="switchTable('three')">School 3</button>
                <button class="tab-button" :class="{ active: currentTable === 'four' }" @click="switchTable('four')">School 4</button>
            </div>

            <!-- Messages -->
            <div v-if="successMsg" class="success-message">{{ successMsg }}</div>
            <div v-if="errors.general" class="error-message">{{ errors.general }}</div>

            <!-- Form -->
            <div class="add-form">

                <!-- Shared Fields -->
                <div class="add-form-inputs">
                    <div class="left-box">
                        <label>Name *</label>
                        <input class="drop-down-menu" v-model="formData.name" placeholder="Full name" />
                        <span v-if="errors.name" class="error-message">{{ errors.name }}</span>
                    </div>
                    <div class="right-box">
                        <label>Rank</label>
                        <input class="drop-down-menu" v-model="formData.rank" placeholder="e.g. Flight Lieutenant" />
                    </div>
                </div>

                <div class="add-form-inputs">
                    <div class="left-box">
                        <label>Unit</label>
                        <input class="drop-down-menu" v-model="formData.unit" placeholder="Unit" />
                    </div>
                    <div class="right-box">
                        <label>Picture</label>
                        <input class="drop-down-menu" v-model="formData.picture" placeholder="e.g. smith-j.jpg" />
                    </div>
                </div>

                <!-- Main Comm Only Fields -->
                <template v-if="!isSchool">
                    <div class="add-form-inputs">
                        <div class="left-box">
                            <label>Service Number</label>
                            <input class="drop-down-menu" v-model="formData.service_number" placeholder="Service number" />
                        </div>
                        <div class="right-box">
                            <label>Corps</label>
                            <input class="drop-down-menu" v-model="formData.corps" placeholder="e.g. RCAF" />
                        </div>
                    </div>
                    <div class="add-form-inputs">
                        <div class="left-box">
                            <label>Age</label>
                            <input class="drop-down-menu" type="number" v-model="formData.age" placeholder="Age" />
                        </div>
                        <div class="right-box">
                            <label>Grave</label>
                            <input class="drop-down-menu" v-model="formData.grave" placeholder="Grave reference" />
                        </div>
                    </div>
                    <div class="add-form-inputs">
                        <div class="left-box">
                            <label>Birth</label>
                            <input class="drop-down-menu" type="date" v-model="formData.birth" />
                        </div>
                        <div class="right-box">
                            <label>Death</label>
                            <input class="drop-down-menu" type="date" v-model="formData.death" />
                        </div>
                    </div>
                    <div class="add-form-box">
                        <label>Enlistment</label>
                        <input class="drop-down-menu" v-model="formData.enlist" placeholder="Enlistment details" />
                    </div>
                </template>

                <!-- School 3 & 4 Only Fields -->
                <template v-if="isSchool">
                    <div class="add-form-inputs">
                        <div class="left-box">
                            <label>Date</label>
                            <input class="drop-down-menu" type="date" v-model="formData.date" />
                        </div>
                        <div class="right-box">
                            <label>Aircraft</label>
                            <input class="drop-down-menu" v-model="formData.aircraft" placeholder="e.g. Avro Anson" />
                        </div>
                    </div>
                    <div class="add-form-inputs">
                        <div class="left-box">
                            <label>Incident</label>
                            <input class="drop-down-menu" v-model="formData.incident" placeholder="Incident type" />
                        </div>
                        <div class="right-box">
                            <label>Location</label>
                            <input class="drop-down-menu" v-model="formData.location" placeholder="Location" />
                        </div>
                    </div>
                    <div class="add-form-box">
                        <label>Details</label>
                        <textarea class="add-content-box" v-model="formData.details" rows="3" placeholder="Incident details..."></textarea>
                    </div>
                </template>

                <!-- Info (shared) -->
                <div class="add-form-box">
                    <label>Info</label>
                    <textarea class="add-content-box" v-model="formData.info" rows="4" placeholder="Biographical information..."></textarea>
                </div>

                <!-- Submit -->
                <div class="modal-buttons">
                    <button class="add-button cancel-button" @click="goBack">Cancel</button>
                    <button class="add-button save-button" @click="submitForm" :disabled="saving">
                        {{ saving ? 'Saving...' : 'Add Entry' }}
                    </button>
                </div>

            </div>
        </div>
    `
}