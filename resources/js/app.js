/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Componentes para telas
Vue.component('home-component', require('./components/HomeComponent.vue').default);
Vue.component('posts-component', require('./components/PostsComponent.vue').default);
Vue.component('albums-component', require('./components/AlbumsComponent.vue').default);
Vue.component('lists-component', require('./components/ListsComponent.vue').default);
Vue.component('login-component', require('./components/LoginComponent.vue').default);

//Componentes para formularios
Vue.component('input-container-component', require('./components/formularios/InputContainer.vue').default);
Vue.component('table-component', require('./components/formularios/TableComponent.vue').default);
Vue.component('card-component', require('./components/formularios/CardComponent.vue').default);
Vue.component('modal-component', require('./components/formularios/ModalComponent.vue').default);
Vue.component('alert-component', require('./components/formularios/AlertComponent.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
