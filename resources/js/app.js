import './bootstrap';

import { createApp } from "vue";
/*import Example from "@/components/example.vue";*/
import App from "./components/App.vue";

import router from "@/router/index.js";

createApp(/*Example*/App).use(router).mount('#app')
