<script setup>
import {getCurrentLanguage} from '@/stores/languages.js';
</script>
<script>

document.addEventListener('DOMContentLoaded', function () {
    document.addEventListener('click', function (event) {
        const offcanvasElement = document.getElementById('offcanvasNavbar');
        if (offcanvasElement) {
            const offcanvasInstance = bootstrap.Offcanvas.getInstance(offcanvasElement);
            if (offcanvasInstance && event.target.closest('.nav-link:not(.dropdown-toggle)')) {
                offcanvasInstance.hide();
            }
        }
    });
})
</script>

<template>
    <nav class="navbar">
        <div class="container-fluid">
            <RouterLink :to="{name: 'home'}" class="navbar-brand">
                JK CARPENTERS
            </RouterLink>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                 aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">JK carpenters </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <RouterLink :to="{name: 'home'}" class="nav-link">
                                {{ $t('navbar.about') }}
                            </RouterLink>
                        </li>
                        <li class="nav-item">
                            <RouterLink :to="{name: 'gallery'}" class="nav-link">
                                {{ $t('navbar.references') }}
                            </RouterLink>
                        </li><li class="nav-item">
                            <RouterLink :to="{name: 'workshop-gallery'}" class="nav-link">
                                {{ $t('navbar.manufacture') }}
                            </RouterLink>
                        </li>
                        <li class="nav-item">
                            <RouterLink :to="{name: 'contacts'}" class="nav-link">
                                {{ $t('navbar.contacts') }}
                            </RouterLink>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                {{ getCurrentLanguage($i18n.locale, 0) }}
                            </a>
                            <ul class="dropdown-menu language-change">
                                <li>
                                    <a class="dropdown-item"
                                       @click="$i18n.locale = getCurrentLanguage($i18n.locale, 1)">
                                        {{ getCurrentLanguage($i18n.locale, 1) }}
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item"
                                       @click="$i18n.locale = getCurrentLanguage($i18n.locale, 2)">
                                        {{ getCurrentLanguage($i18n.locale, 2) }}
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</template>

<style scoped>
.navbar{
    --bs-navbar-toggler-border-color: transparent;
    background-color: #c7beae !important;
}

.navbar-brand{
    color: #fff !important;
}

.navbar-toggler-icon {
    filter: brightness(0) invert(1); /* Makes the icon white */
}

.navbar-toggler:focus {
    text-decoration: none;
    outline: 0;
    box-shadow: none;
}

#offcanvasNavbar{
    background-color: #c7beae !important;
    color: #fff !important;
}

.nav-item a{
    color: #fff !important;
}

.dropdown-menu {
    background-color: #c7beae !important;
    border: none;
}

.dropdown-item:hover{
    background-color: #f8f5f2 !important;
    color: #c7beae !important;
}

.navbar-toggler {
    display: block !important; /* Ensures visibility above 1600px */
    z-index: 1044; /* Avoids being hidden behind other elements */
}
</style>

