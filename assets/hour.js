// hour.js
const app = new Vue({
    data() {
        return {
            tempsEcoule: 0,
            isZeroSecond: false
        };
    },
    methods: {
        updateChronometre() {
            setInterval(() => {
                this.tempsEcoule++;
                this.isZeroSecond = this.tempsEcoule % 10 === 0;
            }, 1000);
        }
    },
    mounted() {
        this.updateChronometre();
    }
});

// Montez l'application Vue sur l'élément avec l'ID "app"
app.$mount('#app');
