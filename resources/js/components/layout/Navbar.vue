<script setup>
import {getCurrentLanguage} from '@/stores/languages.js';
import verticalLine from '../smallElements/VerticalLine.vue'
</script>


<template>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <RouterLink :to="{name: 'home'}" class="navbar-brand">
                JK-carpenters
            </RouterLink>
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex justify-content-end w-100 pe-5">
                    <ul class="navbar-nav me-0 mb-2 mb-lg-0 align-items-center">
                        <li class="nav-item">
                            <RouterLink :to="{name: 'home'}" class="nav-link">
                                {{ $t('navbar.about') }}
                            </RouterLink>
                        </li>
                        <vertical-line/>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                {{ $t('navbar.workshop') }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">{{ $t('navbar.manufacture') }}</a></li>
                                <li><a class="dropdown-item" href="#">{{ $t('navbar.assembly') }}</a></li>
                            </ul>
                        </li>
                        <vertical-line/>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                {{ $t('navbar.vlm') }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">{{ $t('navbar.references') }}</a></li>
                                <li><a class="dropdown-item" href="#">{{ $t('navbar.gallery') }}</a></li>
                            </ul>
                        </li>
                        <vertical-line/>
                        <li class="nav-item">
                            <RouterLink :to="{name: 'contacts'}" class="nav-link">
                                {{ $t('navbar.contacts') }}
                            </RouterLink>
                        </li>
                        <vertical-line/>
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
.navbar {
    --bs-navbar-padding-y: 1rem;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100px;
    background-color: transparent !important;
    z-index: 1000;
    padding: 0 20px;
}

.navbar-nav {
    height: 60px !important;
}

.navbar-toggler{
    border: solid 1px var(--color-white);
}

.navbar-toggler-icon {
    filter: brightness(0) invert(1); /* Makes the icon white */
}


.nav-item a {
    color: var(--color-white);
    font-size: 1.3rem;
    margin: 0 15px;
    font-weight: 500;
}

.dropdown-menu {
    --bs-dropdown-min-width: auto;
    background-color: rgba(255,255,255, .05);
    border: none;
}

.dropdown-menu .dropdown-item {
    cursor: pointer;
}

.dropdown-menu .dropdown-item a {
    color: var(--coolor-navbar-text);
}

.dropdown-menu .dropdown-item:active {
    color: var(--coolor-navbar-text);
}

.dropdown-menu .dropdown-item:hover {
    background-color: transparent;
    color: var(--coolor-navbar-text);
}

.nav-link:focus, .nav-link:hover {
    color: var(--coolor-navbar-text);
}

.navbar-nav .nav-link.active, .navbar-nav .nav-link.show{
    color: var(--coolor-navbar-text);
}

.navbar-brand {
    padding-left: 1%;
    font-weight: 700;
    font-size: 1.75rem;
    color: var(--color-white);
}
</style>
