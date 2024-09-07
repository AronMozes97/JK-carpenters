import {createRouter, createWebHistory} from "vue-router";


import Home from '../components/HomeView.vue'

const routes = [
    {
        path: '/',
        name: 'home',
        component: Home
    },
/*    {
        path: '/about',
        component: About
    },
    {
        path: '/:pathMatch(.*)',
        component: NotFound
    }*/
]

const router = createRouter({
    history:    createWebHistory(),
    routes:     routes
});

export default router;
