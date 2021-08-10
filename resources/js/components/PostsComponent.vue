<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">ConsumoApp - Busca de Posts</div>

                    <div class="card-body">
                        <div class="form-row">
                            <div class="col mb-3">
                                <input-container></input-container>
                                <label for="inputId">ID</label>
                                        <input type="number" class="form-control" id="inputId" aria-describedby="idHelp" placeholder="Informe o ID do registro" required>
                                        <small id="idHelp" class="form-text text-muted">Opcional. Informe o ID do registro.</small>    
                            </div>

                            <div class="col mb-3">
                                    <label for="inputNome">Nome</label>
                                    <input type="nome" class="form-control" id="inputNome" aria-describedby="nomeHelp" placeholder="Informe o nome do registro">   
                            </div>
                        </div>
                    </div>

                    <div class= "card-footer">
                        <button type="submit" class="btn btn-primary bn-sm float-right">Pesquisar</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
import InputContainer from './InputContainer.vue'
    export default {
  components: { InputContainer },

    }
</script>
