<template>

    <div class="container">
        <div class="row">
            <compagnia v-for="(compagnia,index) in compagnie" :key="index" :compagnia = "compagnia"/>
        </div>
    </div>
</template>

<script>
import compagnia from '../Components/Compagnia'
export default {
    name: "Compagnie",
    components: {
        compagnia
    },

    data(){
        return {
            compagnie: []
        };
    },

    created(){
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
