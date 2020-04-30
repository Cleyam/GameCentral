require('./bootstrap');
require('@fortawesome/fontawesome-free/js/all.js');
window.Vue = require('vue');

Vue.component('content-bloc', require('./components/ContentBloc.vue').default);
Vue.component('logout-button', require('./components/LogoutButton.vue').default);
Vue.component('search-bar', require('./components/SearchBar.vue').default);
Vue.component('admin-navbar', require('./components/AdminNavbar.vue').default);
// Game components
Vue.component('admin-table-games', require('./components/AdminTableGames.vue').default);
Vue.component('admin-update-game', require('./components/AdminUpdateGame.vue').default);
Vue.component('admin-update-game-li', require('./components/AdminUpdateGameLi.vue').default);
// Employee components
Vue.component('admin-table-employees', require('./components/AdminTableEmployees.vue').default);
Vue.component('admin-update-employee', require('./components/AdminUpdateEmployee.vue').default);
Vue.component('admin-add-employee', require('./components/AdminAddEmployee.vue').default);
// Customer components 
Vue.component('admin-table-customers', require('./components/AdminTableCustomers.vue').default);
Vue.component('admin-update-customer', require('./components/AdminUpdateCustomer.vue').default);
Vue.component('admin-add-customer', require('./components/AdminAddCustomer.vue').default);

const app = new Vue({
    el: '#app',
    data() {
        return {

        };
    },
});
