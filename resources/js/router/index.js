import {createRouter, createWebHistory} from "vue-router";


import Home from '../components/HomeView.vue'
import Contacts from "../components/Contacts.vue";

const routes = [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/contacts',
        name: 'contacts',
        component: Contacts
    },
/*    {
        path: '/:pathMatch(.*)',
        component: NotFound
    }*/
]

const router = createRouter({
    history:    createWebHistory(),
    routes:     routes
});

export default router;
