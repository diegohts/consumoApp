<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="lists">
                    <div class="top">
                        <br>
                        <p style="text-align:center"><strong>Clientes</strong></p>
                    </div>

                    <div class="content">
                        <table class="table table-hover my_table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Tel:</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="user in users" :key="user.id">
                                    <th scope="row"><p class="myUsers">{{user.id}}</p></th>
                                        <td><p class="myUsers">{{user.name}}</p></td>
                                        <td><p class="myUsers">{{user.email}}</p></td>
                                        <td><p class="myUsers">{{user.phone}}</p></td>
                                </tr>
                            </tbody>
                        </table>    
                    </div>
                </div>    
            </div>
            <!-- <div class="container-users">
                {{users}}
            </div>     -->
        </div>        
    </div>
</template>

<script>
    const axios = require('axios');
    export default {
        data() {
            return {
                users: []
            }
        },
        mounted()
        {
            this.getUsers();
        },
        methods: {
            async getUsers(){
                const response = await axios.get('https://jsonplaceholder.typicode.com/users');
                if(response.status == 200){
                    this.users = response.data;
                } else {
                    console.error("Ocorreu um erro na API.");
                }
            }
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

.myUsers {
    font-size: 15px;
}
</style>