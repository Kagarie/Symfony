import Vue from 'vue'
import VueRouter from 'vue-router'

import Home from '../views/Home.vue'
import Catalogue from "@/components/catalogue"
import Panier from "@/components/Panier";


Vue.use(VueRouter)

const routes = [
    {
        path: '/',
        name: 'Home',
        component: Home
    },
    {
        path: "/catalogue",
        name: 'catalogue',
        component: Catalogue,
    }, {
        path: '/panier',
        name: 'panier',
        component: Panier,
    },

]

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

export default router
