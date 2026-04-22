export default {
    data() {
        return {
            commMembers: []
        }
    },
    mounted() {
        this.commMembers = window.commMembers || [];
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
        <div class="comm-card-con">
            <div v-for="member in commMembers" :key="member.id" class="comm-card-box">
                <div class="comm-card-img-con">
                    <picture>
                        <source media="(min-width: 768px)" :srcset="getImagePath(member.picture)">
                        <img class="comm-card-img" :src="getImagePath(member.picture, true)" :alt="member.name">
                    </picture>
                </div>
                <div class="comm-card">
                    <span class="title-span">{{ member.rank.toUpperCase() }}</span>
                    <h2>{{ member.name.toUpperCase() }}</h2>
                    <p>{{ member.info.toUpperCase() }}</p>
                    
                    <p class="service-number"><span class="label-span">SERVICE NUMBER: </span>{{ member.service_number.toLowerCase() }}</p>
                    <p class="age"><span class="label-span">AGE: </span>{{ member.age }}</p>
                    <p class="rank"><span class="label-span">RANK: </span>{{ member.rank.toUpperCase() }}</p>
                    <p class="force"><span class="label-span">FORCE: </span>{{ member.corps.toUpperCase() }}</p>
                    <p class="force"><span class="label-span">UNIT/REGIMENT: </span>{{ member.unit }}</p>
                    <p class="birth"><span class="label-span">BIRTH: </span>{{ member.birth }}</p>
                    <p class="enlistment"><span class="label-span">ENLISTMENT: </span>{{ member.enlist }}</p>
                    <p class="death"><span class="label-span">DEATH: </span>{{ member.death }}</p>
                    <p class="death"><span class="label-span">BUTIAL/MEMORIAL INFORMATION GRAVE REFERENCE: </span>{{ member.grave }}</p>
                </div>
            </div>
        </div>
    `
}