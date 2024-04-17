const { createApp } = Vue
createApp({
    data() {

        return {
            albums: [],
        }
    },
    methods: {


    },
    mounted() {
        // richiesta al nostro backend per ottenere i dati dei dischi
        axios.get('api.php')
            .then(response => {
                //console.log(this.albums);
                // quando abbiamo i dati li assegniamo alla variabile albums 
                this.albums = response.data;
            })
            .catch(error => {
                console.error('Errore!', error);
            });


    }
}).mount('#app')