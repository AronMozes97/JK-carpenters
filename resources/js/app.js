import './bootstrap';

import {createApp} from "vue";
import vuetify from './plugins/vuetify';

import {createPinia} from "pinia";
import {useLanguageStore} from "./stores/languages";
import {createI18n} from "vue-i18n";

import HU from './local/hu.json'
import SK from './local/sk.json'
import EN from './local/en.json'

import App from "./components/App.vue";

import router from "./router/index.js";

const app = createApp(App).use(vuetify);

app.use(createPinia());

const languages = useLanguageStore();

const i18n = createI18n({
    locale: languages.locale,
    messages: {
        HU: HU,
        SK: SK,
        EN: EN,
    }
})

app.use(i18n);
app.use(router);
app.mount('#app')
