<script setup>
import Navbar from "@/components/layout/Navbar.vue";
import Footer from "@/components/layout/Footer.vue";
</script>

<template>
    <header>
        <Navbar/>
    </header>

    <RouterView/>
    <footer>
        <Footer/>
    </footer>
</template>
