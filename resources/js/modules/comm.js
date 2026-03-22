export default {
    props: ['members'],
    data() {
        return {
            commMembers: []
        }
    },
    mounted() {
        this.commMembers = this.members || [];
    },
    template: `
        <div class="comm-entries-list">
            <div v-for="member in commMembers" :key="member.id" class="comm-gamma-con">
                <div class="comm-gamma-img-con">
                    <picture>
                        <source media="(min-width: 768px)" :srcset="'/images/comm-images/desktop/' + member.picture">
                        <img class="comm-gamma-img" :src="'/images/comm-images/mobile/' + member.picture" :alt="member.name">
                    </picture>
                </div>
                <div class="comm-gamma-text-con">
                    <span class="title-span">{{ member.rank.toUpperCase() }}</span>
                    <h2>{{ member.name.toUpperCase() }}</h2>
                    <p>{{ member.info.toUpperCase() }}</p>
                    
                    <p class="service-number"><span class="label-span">SERVICE NUMBER: </span>{{ member.service_number.toLowerCase() }}</p>
                    <p class="age"><span class="label-span">AGE: </span>{{ member.age }}</p>
                    <p class="rank"><span class="label-span">RANK: </span>{{ member.rank.toUpperCase() }}</p>
                    <p class="force"><span class="label-span">FORCE: </span>{{ member.corps.toUpperCase() }}</p>
                    <p class="birth"><span class="label-span">BIRTH: </span>{{ member.birth }}</p>
                    <p class="enlistment"><span class="label-span">ENLISTMENT: </span>{{ member.enlist }}</p>
                    <p class="death"><span class="label-span">DEATH: </span>{{ member.death }}</p>
                </div>
            </div>
        </div>
    `
}