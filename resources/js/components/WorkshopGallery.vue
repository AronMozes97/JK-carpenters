<script setup>
import {ref} from 'vue';

import img1 from '@public/img/manufacture/muhely1.jpg';
import img2 from '@public/img/manufacture/muhely2.jpg';
import img3 from '@public/img/manufacture/muhely3.jpg';
import img4 from '@public/img/manufacture/muhely4.jpg';
import img5 from '@public/img/manufacture/muhely5.jpg';

const manufactureImages = [
    img1, img2, img3, img4, img5,
];

const selectedImage = ref(null);

const openImage = (imageSrc) => {
    selectedImage.value = imageSrc;

    console.log(selectedImage.value);
};

const closeImage = () => {
    selectedImage.value = null;
};
</script>

<template>
    <div class="gallery">
        <h1>{{ $t('/workshop.label') }}</h1>
        <p>{{ $t('/workshop.text') }}</p>

        <div class="gallery-grid">
            <img v-for="image in manufactureImages" :src="image" alt="jk-carpenters manufacture" @click="openImage(image)"/>
        </div>

        <div v-if="selectedImage" class="fullscreen-overlay" @click.self="closeImage">
            <img :src="selectedImage" alt="Fullscreen Image">
        </div>
    </div>
</template>

<style scoped>
.gallery {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    color: var(--color-gray-text);
    margin-top: 20px;
}

.gallery p:first-of-type {
    padding: 10px;
}

.gallery-grid {
    display: grid;
    grid-template-areas:
        "img1 img1 img2"
        "img1 img1 img3"
        "img4 img5 img5";
    gap: 15px;
    width: 95%;
    max-width: 1200px;
    margin: 20px auto;
}

.gallery-grid img:nth-child(1) {
    grid-area: img1;
}

.gallery-grid img:nth-child(2) {
    grid-area: img2;
}

.gallery-grid img:nth-child(3) {
    grid-area: img3;
}

.gallery-grid img:nth-child(4) {
    grid-area: img4;
}

.gallery-grid img:nth-child(5) {
    grid-area: img5;
}

.gallery-grid img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
}

.gallery-grid img:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
}

.fullscreen-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background: rgba(0, 0, 0, 0.8);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

.fullscreen-overlay img {
    max-width: 90%;
    max-height: 90%;
    object-fit: contain;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
}

@media (max-width: 700px) {
    .gallery-grid{
        width: 98%;
    }
}

@media (max-width: 500px) {
    .gallery-grid{
        gap: 5px;
    }
}
</style>
