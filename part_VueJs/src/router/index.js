import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'

Vue.use(VueRouter)

const routes = [
    {
        path: '/',
        name: 'Home',
        component: Home
    },
    {
        path: 'Connexion',
        name: 'Connexion',
        component: () => import('../views/Connexion')
    },
    {
        path: 'Inscription',
        name: 'Inscription',
        component: () => import('../views/Inscription')
    }
]

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

export default router
