<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <!-- Inicio do Card de Busca -->
                <div class="card">
                    <div class="card-header">ConsumoApp - Busca de Posts</div>

                    <div class="card-body">
                        <div class="form-row">
                            <div class="col mb-3">
                                <input-container-component titulo="ID" id="inputId" id-help="idHelp" texto-ajuda="Opcional. Informe o nome do registro.">
                                    <input type="number" class="form-control" id="inputId" aria-describedby="idHelp" placeholder="Informe o ID do registro" required>
                                </input-container-component>   
                            </div>

                            <div class="col mb-3">
                                    <label for="inputNome">Nome</label>
                                        <input type="nome" class="form-control" id="inputNome" aria-describedby="nomeHelp" placeholder="Informe o nome do registro">  
                                        <small id="idHelp" class="form-text text-muted">Opcional. Informe o ID do registro.</small>  
                            </div>
                        </div>
                    </div>

                    <div class= "card-footer">
                        <button type="submit" class="btn btn-primary bn-sm float-right">Pesquisar</button>
                    </div>

                </div>
                <!-- Fim do card de busca -->

                <!-- Inicio de card de listagem de posts-->
                <div class="card mb-3">
                    <div class="card-header">ConsumoApp - Relação de Posts</div>

                    <div class="card-body">
                        <table-component></table-component>
                    </div>

                    <div class= "card-footer">
                        <button type="button" class="btn btn-primary bn-sm float-right">Adicionar</button>
                    </div>

                </div>

                <!-- Fim de card de listagem de posts-->
            </div>
        </div>
    </div>
</template>

<script>

  export default 
    {

    }
</script>
