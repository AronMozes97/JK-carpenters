import '@/bootstrap';

import {createApp} from "vue";
import vuetify from '@/plugins/vuetify';

import {createPinia} from "pinia";
import i18n from "@/plugins/i18n";

import App from "@/components/App.vue";

import router from "@/router/router.js";

const app = createApp(App);

app.use(vuetify);

app.use(createPinia());

app.use(i18n);

app.use(router);

app.mount('#app')
