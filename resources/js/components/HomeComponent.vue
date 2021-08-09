<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">ConsumoApp</div>

                    <div class="card-body">
                        <h5>Bem vindo ao painel de ConsumoApp.</h5>
                        <p>Site com intuito de consumir recursos públicos do site <a href="https://jsonplaceholder.typicode.com/">{JSON} Placeholder</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style lang="scss" scoped>
.card-body {
    padding: 15 px;
    background-color: #f5eaea;
}
</style>