<script setup>
import {getCurrentLanguage} from '../../stores/languages';
import verticalLine from '../smallElements/VerticalLine.vue'
</script>


<template>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <RouterLink :to="{name: 'home'}" class="navbar-brand">
                JK-carpenters
            </RouterLink>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex justify-content-end w-100 pe-5">
                    <ul class="navbar-nav me-0 mb-2 mb-lg-0">
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
    height: 60px;
    background-color: transparent !important;
    z-index: 1000;
    padding: 0 20px;
}

.navbar-nav li a{
    color: var(--color-white);
}

.dropdown-menu {
    --bs-dropdown-min-width: auto;
    background-color: transparent;
    border: none;
}

.dropdown-menu .dropdown-item {
    cursor: pointer;
}

.dropdown-menu .dropdown-item a{
    color: var(--color-white);
}

.dropdown-menu .dropdown-item:active {
    color: var(--color-dark-gray);
}

.dropdown-menu .dropdown-item:hover {
    background-color: transparent;
    color: var(--color-dark-gray);
}

.nav-link:focus, .nav-link:hover {
    color: var(--color-dark-gray);
}

.navbar-brand {
    padding-left: 1%;
    font-weight: 700;
    font-size: 1.35rem;
    color: var(--color-white);
}
</style>
