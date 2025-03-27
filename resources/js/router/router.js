import {createRouter, createWebHistory} from "vue-router";

import Home from '@/components/HomeView.vue'
import Contacts from "@/components/Contacts.vue";
import WorkshopGallery from "@/components/WorkshopGallery.vue";
import Gallery from "@/components/Gallery.vue";

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
    {
        path: '/workshop',
        name: 'workshop-gallery',
        component: WorkshopGallery
    },
    {
        path: '/reference',
        name: 'gallery',
        component: Gallery

    },
    /*{
        path: '/:pathMatch(.*)',
        component: NotFound
    }*/
]

const router = createRouter({
    history:    createWebHistory(),
    routes:     routes,
    scrollBehavior(to, from, savedPosition) {
        return new Promise((resolve) => {
            setTimeout(() => {
                if (savedPosition) {
                    window.scrollTo({
                        top: savedPosition.top,
                        left: savedPosition.left,
                        behavior: 'smooth',
                    });
                } else {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth',
                    });
                }
                resolve();
            }, 10);
        });
    },


});

export default router;
