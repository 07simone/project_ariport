<template>

    <div class="container">
        <div class="row">
            <compagnie v-for="(compagnia,index) in compagnie" :key="index" :compagnia = "compagnia"/>
        </div>
    </div>
</template>

<script>
import compagnie from '../Components/Compagnie'
export default {
    name: "Compagnie",
    components: {
        compagnie
    },

    data(){
        return {
            compagnie: []
        };
    },

    async created(){
    axios.get('/api/compagnia')
            .then(response => {
                this.compagnie = response.data
                console.log(this.compagnie)
            })
            .catch((errore)=>{
                console.log(errore);
            })
    },

}
</script>

<style>

</style>
