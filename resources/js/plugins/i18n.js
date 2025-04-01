import { createI18n } from "vue-i18n";
import HU from "@/local/hu.json";
import SK from "@/local/sk.json";
import EN from "@/local/en.json";
import { setActivePinia, createPinia } from "pinia"; // Import helpers from Pinia
import { useLanguageStore } from "@/stores/languages";

const pinia = createPinia();
setActivePinia(pinia); // Explicitly activate Pinia

const languageStore = useLanguageStore();

const i18n = createI18n({
    legacy: false,
    locale: languageStore.locale, // Use language store state
    messages: {
        HU: HU,
        SK: SK,
        EN: EN,
    },
});

export default i18n;
