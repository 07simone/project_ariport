<template>

    <div class="container">
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
                            <td>{{compagnia.Nome_compagnia}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "compagnia",
    props:['compagnia']
}
</script>

<style>

</style>
