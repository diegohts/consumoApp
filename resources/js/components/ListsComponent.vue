<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="lists">
                    <div class="top">
                        <br>
                        <p style="text-align:center"><strong>Clientes</strong></p>
                    </div>

                    <div class="content">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Tel:</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                </tr>
                            </tbody>
                        </table>    
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
.lists {
    width: 100%;
    padding: 20 px;
    border: 1px solid #ccc;
    border-radius: 3px;
    background-color: #fff;
}
</style>