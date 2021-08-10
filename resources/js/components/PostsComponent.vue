<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <card-component titulo="Busca de Posts">
                    <template v-slot:conteudo>
                        <div class="form-row">
                            <div class="col mb-3">
                                <input-container-component titulo="ID" id="inputId" id-help="idHelp" texto-ajuda="Opcional. Informe o nome do post.">
                                    <input type="number" class="form-control" id="inputId" aria-describedby="idHelp" placeholder="Informe o ID do post" required>
                                </input-container-component>   
                            </div>

                            <div class="col mb-3">
                                <input-container-component titulo="Nome do post" id="inputNome" id-help="nomeHelp" texto-ajuda="Opcional. Informe o nome do post.">
                                    <input type="text" class="form-control" id="inputNome" aria-describedby="nomeHelp" placeholder="Informe o nome do post">  
                                </input-container-component>
                            </div>
                        </div>
                    </template>   

                    <template v-slot:rodape>
                        <button type="submit" class="btn btn-primary bn-sm float-right">Pesquisar</button>
                    </template>
                </card-component>

                <div class="card mb-3">
                    <card-component titulo="ConsumoApp - Relação de Posts">
                        <template v-slot:conteudo>
                            <table-component></table-component>
                        </template>

                        <template v-slot:rodape>
                            <button type="button" class="btn btn-primary bn-sm float-right">Adicionar</button>
                        </template>     
                    </card-component>    
                </div>
                
            </div>
        </div>
    </div>
</template>

<script>
import CardComponent from './formularios/CardComponent.vue'
  export default 
    {
  components: { CardComponent },

    }
</script>