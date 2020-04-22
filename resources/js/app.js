require('./bootstrap');
require('@fortawesome/fontawesome-free/js/all.js');
window.Vue = require('vue');

Vue.component('content-bloc', require('./components/ContentBloc.vue').default);
Vue.component('logout-button', require('./components/LogoutButton.vue').default);
Vue.component('search-bar', require('./components/SearchBar.vue').default);
Vue.component('admin-navbar', require('./components/AdminNavbar.vue').default);

const app = new Vue({
    el: '#app',
    data() {
        return {

        };
    },
});
