<script setup>
import Navbar from "@/components/layout/Navbar.vue";
import Footer from "@/components/layout/Footer.vue";
</script>

<template>
    <header>
        <Navbar/>
    </header>

    <RouterView/>

    <v-btn @click="$i18n.local = 'EN'">asd</v-btn>

    <footer>
        <Footer/>
    </footer>
</template>
