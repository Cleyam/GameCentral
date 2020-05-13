require('./bootstrap');
require('@fortawesome/fontawesome-free/js/all.js');
window.Vue = require('vue');

Vue.component('content-bloc', require('./components/ContentBloc.vue').default);
Vue.component('logout-button', require('./components/LogoutButton.vue').default);
Vue.component('search-bar', require('./components/SearchBar.vue').default);
Vue.component('search-bar-result-games', require('./components/SearchBarResultGames.vue').default);
Vue.component('search-bar-result-customers', require('./components/SearchBarResultCustomers.vue').default);
Vue.component('detail-customer', require('./components/DetailCustomer.vue').default);
Vue.component('detail-customer-locations', require('./components/DetailCustomerLocations.vue').default);
Vue.component('detail-game', require('./components/DetailGame.vue').default);
Vue.component('rental-form', require('./components/RentalForm.vue').default);


Vue.component('admin-navbar', require('./components/admin/AdminNavbar.vue').default);
// Game components
Vue.component('admin-table-games', require('./components/admin/AdminTableGames.vue').default);
Vue.component('admin-update-game', require('./components/admin/AdminUpdateGame.vue').default);
Vue.component('admin-update-game-checklist', require('./components/admin/AdminUpdateGameChecklist.vue').default);
Vue.component('admin-add-game', require('./components/admin/AdminAddGame.vue').default);
// Employee components
Vue.component('admin-table-employees', require('./components/admin/AdminTableEmployees.vue').default);
Vue.component('admin-update-employee', require('./components/admin/AdminUpdateEmployee.vue').default);
Vue.component('admin-add-employee', require('./components/admin/AdminAddEmployee.vue').default);
// Customer components 
Vue.component('admin-table-customers', require('./components/admin/AdminTableCustomers.vue').default);
Vue.component('admin-update-customer', require('./components/admin/AdminUpdateCustomer.vue').default);
Vue.component('admin-add-customer', require('./components/admin/AdminAddCustomer.vue').default);


Vue.component('search-bar-result-games',
    require('./components/SearchBarResultGames.vue').default);
const app = new Vue({
    el: '#app',
    data() {
        return {

        };
    },
});
