<script setup>
import Navbar from "@/components/layout/Navbar.vue";
import Footer from "@/components/layout/Footer.vue";

function asd(){
    console.log("asd");
}
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
