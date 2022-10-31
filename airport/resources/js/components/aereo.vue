<template>
    <div class="col-12">
        <div class="row">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                            <td>{{aereo.Nome_aereoporto}}</td>
                    </tr>
                    </tbody>
                </table>
        </div>
    </div>
</template>

<script>
export default {
    name: "aereo",
    props:['aereo']
}
</script>

<style>

</style>
