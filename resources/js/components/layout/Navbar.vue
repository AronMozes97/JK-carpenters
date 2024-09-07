<script setup>
</script>
<template>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
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
                                {{ $t('about') }}
                            </RouterLink>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                {{ $t('workshop') }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">{{ $t('manufacture') }}</a></li>
                                <li><a class="dropdown-item" href="#">{{ $t('assembly')}}</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                {{ $t('vlm') }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">{{ $t('references') }}</a></li>
                                <li><a class="dropdown-item" href="#">{{ $t('gallery')}}</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <RouterLink :to="{name: 'home'}" class="nav-link">
                                {{ $t('contacts') }}
                            </RouterLink>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                {{ $t('HU') }}
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item d-flex w-auto" @click="$i18n.local = `SK`">{{ $t('SK') }}</a>
                                </li>
                                <li><a class="dropdown-item d-flex w-auto" href="#">{{ $t('EN')}}</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</template>

