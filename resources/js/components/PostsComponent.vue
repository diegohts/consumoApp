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
                                <input-container-component titulo="Titulo do post" id="inputNome" id-help="nomeHelp" texto-ajuda="Opcional. Informe o nome do post.">
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
                            <table-component 
                            :dados="posts"
                            :titulos="['ID do Post','titulo','ID do usuario']"
                            >
                            </table-component>
                        </template>

                        <template v-slot:rodape>
                            <button type="button" class="btn btn-primary bn-sm float-right" data-toggle="modal" data-target="#ModalPost">Adicionar</button>
                        </template>     
                    </card-component>    
                </div>

            </div>
        </div>
        
        <modal-component id="ModalPost" titulo="Adicionar Post">
            <template v-slot:alerta>
                <alert-component tipo="success" titulo= "Cadastro realizado com sucesso!" v-if="transacaoStatus == 'adicionado'"></alert-component>
                <alert-component tipo="danger" titulo= "Erro ao tentar cadastrar!" :detalhes='transacaoDetalhes' v-if="transacaoStatus == 'erro'"></alert-component>
            </template>
            
            <template v-slot:conteudo>
                <div class="form-group">
                    <input-container-component titulo="Titulo do post" id="inputNovoNome" id-help="novoNomeHelp" texto-ajuda="Opcional. Informe o nome do post.">
                        <input type="text" class="form-control" id="inputNovoNome" aria-describedby="novoNomeHelp" placeholder="Informe o nome do post" v-model="nomePost">  
                    </input-container-component>
                </div>    

                <div class="form-group">
                    <input-container-component titulo="Corpo do post" id="inputNovoCorpo" id-help="NovoCorpoHelp" texto-ajuda="Opcional. Informe o corpo do post.">
                        <input type="text" class="form-control" id="inputNovoCorpo" aria-describedby="NovoCorpoHelp" placeholder="Informe o corpo do post" v-model="nomeBody">  
                    </input-container-component>
                </div> 
            </template>  

            <template v-slot:rodape>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary" @click="salvar">Salvar</button>
            </template>    

        </modal-component>
    </div>
</template>

<script>
  export default 
    {
        data(){
            return {
                urlBase: "https://jsonplaceholder.typicode.com/posts",
                nomePost: '',
                nomeBody: '',
                transacaoStatus: '',
                transacaoDetalhes: [],
                posts: []
            }
        },
        methods: {
            carregarLista() {
                axios.get(this.urlBase)
                    .then(response => {
                        this.posts = response.data,
                        console.log(this.posts)
                    })
                    .catch(errors =>{
                        console.log(errors)
                    })
            },
            salvar() {
                console.log(this.nomePost, this.nomeBody)
                
                let formData = new FormData();
                // Atribui valores para o formData
                formData.append('title', this.nomePost)
                formData.append('body', this.nomeBody)

                let config = {
                    headers: {
                        'Content-Type': 'multipart/form-data',
                        'Accept': 'application/json'
                    }
                }

                axios.post(this.urlBase, formData, config)
                    .then(response => {
                        this.transacaoStatus = 'adicionado'
                        console.log(response)
                    })
                    .catch(erros => {
                        this.transacaoStatus = 'erro'
                        this.transacaoDetalhes = errors.response
                        // errors.response.data.message
                    })
            }
        }, 
        mounted() {
            this.carregarLista()
        }
    }
</script>