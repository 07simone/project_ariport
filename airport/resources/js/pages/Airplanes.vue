<template>
    <div class="container">
        <div class="row">
                <aereo v-for="(aereo,index) in airports" :key="index" :aereo="aereo"/>
        </div>
    </div>
</template>

<script>
import aereo from "../components/Aereo";
    export default {
        name: "Main",
        components:{
            aereo
        },

        data() {
            return {
                airports: []
            }
        },
        created() {
            axios.get('/api/airport')
                .then(response => {
                    this.airports = response.data
                    console.log(this.airports)
                })
                .catch((errore)=>{
                console.log(errore);
            })

        }
    }
</script>
