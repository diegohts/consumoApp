
<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form method="POST" action="" @submit.prevent="login($event)">
                            <input type="hidden" name="_token" :value="csrf_token">
                            <div class="form-group row">
                                <label for="user" class="col-md-4 col-form-label text-md-right">E-mail</label>

                                <div class="col-md-6">
                                    <input id="user" type="user" class="form-control" name="user" value="" required autocomplete="user" autofocus v-model="user">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Senha</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password" v-model="password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>


                                    <a class="btn btn-link" href="#">
                                        Esqueci a senha
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        props: ['csrf_token'], //data (semelhante)
        data() {
            return {
                user: '',
                password: ''
            }
        },
        methods: {
            login(e) {

                let url = 'http://localhost:8000/login'
                let configuracao = {
                    method: 'post',
                    body: new URLSearchParams({
                        'user': this.user,
                        'password': this.password
                    })
                }

                fetch(url, configuracao)
                    .then(response => response.json())
                    .then(data => {
                        if(data.token) {
                            document.cookie = 'token='+data.token+';SameSite=Lax'
                        }
                        //dar sequência no envio do form de autenticação por sessão
                        e.target.submit()
                    })
            }
        }
    }
</script>