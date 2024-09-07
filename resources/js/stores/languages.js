import {defineStore} from "pinia";

export const useLanguageStore = defineStore('language', {
    state: () => ({
        locale: 'HU'
    }),
    actions: {
        setLocale(locale) {
            this.locale = locale;
        }
    }
})
