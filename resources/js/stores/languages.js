import {defineStore} from "pinia";

export const useLanguageStore = defineStore('language', {
    state: () => ({
        locale: 'SK'
    }),
    actions: {
        setLocale(locale) {
            this.locale = locale;
        }
    }
})

export const getCurrentLanguage = (i18n, index) => {
    let sort = [];

    switch (i18n) {
        case 'EN':
            sort = ['EN', 'SK', 'HU'];
            break;
        case 'SK':
            sort = ['SK', 'HU', 'EN'];
            break;
        default:
            sort = ['HU', 'SK', 'EN'];
            break;
    }

    return sort[index];
};
