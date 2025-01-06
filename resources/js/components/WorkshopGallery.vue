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
        <h1>Gyártás</h1>
        <p>A bútort először a műhelyben összeszereljük, hogy biztosak lehessünk benne, hogy sem minket, sem az ügyfelet
            nem éri kellemetlen meglepetés a szerelés során.</p>

        <div class="gallery-grid">
            <img :src="manufactureImages[0]" alt="Image 1" @click="openImage(manufactureImages[0])"/>
            <img :src="manufactureImages[1]" alt="Image 2" @click="openImage(manufactureImages[1])"/>
            <img :src="manufactureImages[2]" alt="Image 3" @click="openImage(manufactureImages[2])"/>
            <img :src="manufactureImages[3]" alt="Image 4" @click="openImage(manufactureImages[3])"/>
            <img :src="manufactureImages[4]" alt="Image 5" @click="openImage(manufactureImages[4])"/>
        </div>

        <div v-if="selectedImage" class="fullscreen-overlay" @click.self="closeImage">
            <img :src="selectedImage" alt="Fullscreen Image">
            <button class="close-button" @click="closeImage">X</button>
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
    padding-top: 10px;
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

.close-button {
    position: absolute;
    top: 5%;
    right: 20%;
    background: none;
    border: none;
    color: white;
    font-size: 1.5rem;
    cursor: pointer;
}
</style>
