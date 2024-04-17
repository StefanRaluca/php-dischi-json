const { createApp } = Vue
createApp({
    data() {

        return {
            albums: [],
            //impostiamo su null una variabile per il disco clickato
            selectedAlbum: null,
        }
    },
    methods: {
        //facciamo una funzione che terra traccia del disco clickato
        detailsAlbum(album) {
            this.selectedAlbum = album;

        },

        //chiude la schermata del disco selezionato
        closeDetails() {
            this.selectedAlbum = null;
        }

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