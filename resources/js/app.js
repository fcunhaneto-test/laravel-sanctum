require('./bootstrap');

window.Vue = require('vue').default;

import VueRouter from "vue-router"
import router from "./routes"
Vue.use(VueRouter)

import Index from './Index'

const app = new Vue({
    el: '#app',
    router,
    components: {Index}
});
