<template>
    <div class="container">
        <div class="row g-3">
            <div class="col">
                <input v-model="voloAndata" type="text" class="form-control" placeholder="Inserisci aereoporto di partenza" aria-label="First name">
            </div>
            <div class="col">
                <input v-model="voloRitorno" type="text" class="form-control" placeholder="Inserisci aereoporto di arrivo" aria-label="Last name">
            </div>
                <a href="#" @click="getTratteSearch()" class="btn btn-outline-dark text-uppercase rounded-pill">Mostra voli</a>
        </div>
        <div class="row">
            <div class="col-12" v-if="!trattes == '' ">
                <Tratte v-for="(tratte,index) in trattes" :key="index" :tratte ="tratte" />
            </div>


        </div>
   <!--  <section>
        <div class="row">
            <div class="col-12">
                <div v-for="(element,index) in airports" :key="index">
                    <h1>
                        {{element.Nome_aereoporto}}
                    </h1>
                </div>
            </div>
        </div>
    </section> -->

</div>

</template>

<script>


import Tratte from '../components/tratte'
export default {
    name: "Home",
    components: {
        Tratte
    },

    data(){
        return {

            voloAndata: '',
            voloRitorno: '',
            trattes:[]
        };
    },

    methods: {
        getTratteSearch(){
            axios.get('/api/tratte/search/'+ this.voloAndata +'/' + this.voloRitorno)
                .then(response => {
                    this.trattes = response.data;
                    console.log(this.trattes);
                })
                .catch(error => {
                    console.log(error);
                });
        },
        }

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
