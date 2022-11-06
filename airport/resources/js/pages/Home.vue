<template>
    <div class="container">
        <div class="row g-3">
    <div class="col">
        <input v-model="cercaVoli1" type="text" class="form-control" placeholder="Inserisci aereoporto di partenza" aria-label="First name">
    </div>
    <div class="col">
        <input v-model="cercaVoli2" type="text" class="form-control" placeholder="Inserisci aereoporto di arrivo" aria-label="Last name">
    </div>
        <button @click="filterAirplaneCompany(cercaVoli1,cercaVoli2)" class="btn btn-outline-dark text-uppercase rounded-pill">Mostra voli</button>
    </div>
    <section>
        <div class="row">
            <div class="col-12">
                <div v-for="(element,index) in compagnie" :key="index">
                    <h1>
                        {{element.Nome_compagnia}}
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col-12">
                <div v-for="(element,index) in airports" :key="index">
                    <h1>
                        {{element.Nome_aereoporto}}
                    </h1>
                </div>
            </div>
        </div>
    </section>

</div>

</template>

<script>



export default {
    name: "Home",
    components: {
    },

    data(){
        return {
            aereoporto: null,
            compagnia: null,
            compagnie:[],
            airports:[],
            cercaVoli1: '',
            cercaVoli2: '',
            voliNotFound:[]
        };
    },

    methods: {
        filterAirplaneCompany(cercaVoli1,cercaVoli2){
            axios.get('/api/airport/')
                .then(response => {
                    this.airports = response.data
                    console.log(this.airports)
                })
                .catch((errore)=>{
                    console.log(errore);
                })

            axios.get('/api/compagnia/')
                .then(response => {
                    this.compagnie = response.data

                    console.log(this.compagnie)

                })
                .catch((errore)=>{
                    console.log(errore);
                })


        },


        /* axios.get('/api/compagnia')
            .then(response => {
                this.compagnie = response.data
                console.log(this.compagnie)
            })
            .catch((errore)=>{
                console.log(errore);
            }) */

       /*  this.aereoporto = axios.get('/api/airport/')
            .then(response => {
                this.airports = response.data
                console.log(this.airports)
            })
            .catch((errore)=>{
                console.log(errore);
            }) */

        },



    }
    /* created(){
        this.compagnia = axios.get('/api/compagnia')
            .then(response => {
                this.compagnie = response.data
                console.log(this.compagnie)
            })
            .catch((errore)=>{
                console.log(errore);
            })

        this.aereoporto = axios.get('/api/airport/')
            .then(response => {
                this.airports = response.data
                console.log(this.airports)
            })
            .catch((errore)=>{
                console.log(errore);
            })

    }, */





</script>

<style>

</style>
