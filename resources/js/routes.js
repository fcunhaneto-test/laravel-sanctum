import VueRouter from "vue-router";

import Product from "./components/Product";
import Category from "./components/Category";
import Login from "./auth/Login";
import Register from "./auth/Register";
import Logout from "./auth/Logout";

const routes = [
    {
        path: '/',
        component: Product,
        name: 'home'
    },
    {
        path: '/produtos',
        component: Product,
        name: 'product'
    },
    {
        path: '/categorias',
        component: Category,
        name: 'category'
    },
    {
        path: '/registro',
        component: Register,
        name: 'register'
    },
    {
        path: '/login',
        component: Login,
        name: 'login'
    },
    {
        path: '/logout',
        component: Logout,
        name: 'logout'
    },
];

const router = new VueRouter({
    mode: "history",
    routes
})

export default router;
