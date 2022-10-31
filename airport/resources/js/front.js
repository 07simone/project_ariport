window.axios = require('axios');
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
window.Vue = require('vue');
import VueRouter from 'vue-router';
import App from "./views/App";
import Airplanes from './pages/Airplanes'
Vue.use(VueRouter);
const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Airplanes
        }
    ],
});
const app = new Vue({
    el: '#root',
    render: h=> h(App),
    router:router
});
