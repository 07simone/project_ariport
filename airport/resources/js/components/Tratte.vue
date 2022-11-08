<template>

    <div class="container">
        <div class="card m-1">
            <div class="card-body">
                <p class="card-text">{{tratte.orario_partenza}}</p>
                <p class="card-text">{{tratte.orario_arrivo}}</p>
                <h5 class="card-title">{{tratte.Aereoporto_partenza}}</h5>
                <p class="card-text">{{tratte.Aereoporto_arrivo}}</p>
                <h5 class="card-title">{{tratte.Compagnia}}</h5>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "tratte",
    props:['tratte']
}
</script>

<style>

</style>
