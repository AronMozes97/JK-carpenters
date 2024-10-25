<script setup>
import Navbar from "@/components/layout/Navbar.vue";
import Footer from "@/components/layout/Footer.vue";
import 'bootstrap-icons/font/bootstrap-icons.css';

</script>

<template>
    <header>
        <Navbar/>
    </header>

    <RouterView/>

    <Footer/>

</template>
