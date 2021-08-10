<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {{ nome }} - {{ acao }}
                <div class="card">
                    <div class="card-header">ConsumoApp - Albums</div>

                    <div class="card-body">
                        Exemplo no albums
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['nome', 'acao'] 
    }
</script>
