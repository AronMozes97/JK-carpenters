<script setup>
</script>

<template>
    <header>
        <nav>
            <RouterLink :to="{name: 'home'}" class="nav-link">Home</RouterLink>
        </nav>
    </header>

    <RouterView/>
</template>
