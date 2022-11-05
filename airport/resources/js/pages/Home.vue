<template>
    <div class="container">
        <div class="row g-3">
    <div class="col">
        <input type="text" class="form-control" placeholder="Inserisci aereoporto di partenza" aria-label="First name">
    </div>
    <div class="col">
        <input type="text" class="form-control" placeholder="Inserisci aereoporto di arrivo" aria-label="Last name">
    </div>

        <button  class="btn btn-outline-dark text-uppercase rounded-pill">Mostra voli</button>
    </div>


</div>

</template>

<script>

export default {
    name: "Home",
    components: {
    },

    data(){
        return {
        };
    },

    created(){
        /* axios.get('/api/airport')
            .then(response => {
                this.airports = response.data
                console.log(this.airports)
            })
            .catch((errore)=>{
                console.log(errore);
            });

        axios.get('/api/compagnia')
            .then(response => {
            this.compagnie = response.data
            console.log(this.compagnie)
        })
            .catch((errore)=>{
                console.log(errore);
            }) */

    },

    methods: {
        searchAirplane(compagnia){
            this.searchCompagnia = compagnia
            console.log(this.searchAirplene)
        }

    }

}

</script>

<style>

</style>
