import 'es6-promise/auto'
import axios from 'axios'
import './bootstrap'
import Vue from 'vue'
import VueAuth from '@websanova/vue-auth'
import VueAxios from 'vue-axios'
import VueRouter from 'vue-router'
import Index from './Index'
import auth from './auth'
import router from './router'

// Set Vue globally
window.Vue = Vue

// Set Vue router
Vue.router = router
Vue.use(VueRouter)

// Set Vue authentication
Vue.use(VueAxios, axios)
axios.defaults.baseURL = `${process.env.MIX_APP_URL}/api`
Vue.use(VueAuth, auth)

// Load Index
Vue.component('index', Index)
Vue.component('logout-button', require('./components/LogoutButton.vue').default);

const app = new Vue({
    el: '#app',
    router
});



require('@fortawesome/fontawesome-free/js/all.js');
// require('./bootstrap');

// require('@fortawesome/fontawesome-free/js/all.js');
// window.Vue = require('vue');

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('search-button', require('./components/SearchButton.vue').default);
// const app = new Vue({
//     el: '#app'
// });
