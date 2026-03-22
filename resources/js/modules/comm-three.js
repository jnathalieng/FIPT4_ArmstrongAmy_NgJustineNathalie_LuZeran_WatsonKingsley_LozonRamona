export default {
    data() {
        return {
            trainingThree: []
        }
    },
    mounted() {
        this.trainingThree = window.trainingThree || [];
    },
    methods: {
        getImagePath(picture, isMobile = false) {
            const folder = isMobile ? 'mobile' : 'desktop';
            const fallback = `d-comm-420-sqn-badge.png`;
            const imageName = picture || fallback;
            return `/images/comm-images/${folder}/${imageName}`;
        }
    },
    template: `   
                    <div class="comm-delta-con" v-for="item in trainingThree" :key="item.id">
                        <div class="comm-delta-img-con">
                            <picture>
                                <source media="(min-width: 768px)" :srcset="getImagePath(item.picture)">
                                <img class="comm-delta-img" :src="getImagePath(item.picture, true)" :alt="item.name">
                            </picture>
                        </div>
                        <div class="comm-delta-text-con">
                            <span class="title-span">{{ item.rank }}</span>
                            <h2>{{ item.name }}</h2>
                            <p>{{ item.info }}</p>
                            
                            <p class="unit"><span class="label-span">UNIT: </span>{{ item.unit }}</p>
                            <p class="incident"><span class="label-span">DATE: </span>{{ item.date }}</p>
                            <p class="location"><span class="label-span">AIRCRAFT: </span>{{ item.aircraft }}</p>
                            <p class="incident"><span class="label-span">INCIDENT: </span>{{ item.incident }}</p>
                            <p class="location"><span class="label-span">LOCATION: </span>{{ item.location }}</p>
                            <p class="details"><span class="label-span">DETAILS: </span>{{ item.details }}</p>
                        </div>
                    </div>`
}