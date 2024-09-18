<script setup>

import CarouselElement from "./homeCarousel/CarouselElement.vue";

</script>

<template>
    <div class="container-fluid d-flex justify-content-center align-items-center flex-column">
        <div class="home-header">
            <div class="header-image">
                <h4 class="header-text">
                    <p v-html="$t('homeHeaderText')"></p>
                </h4>
            </div>
        </div>
        <div class="home-profile">
            <h1>Main profile</h1>
            <div class="carousel-container">
                <transition-group name="carousel" tag="div" class="carousel-container">
                    <CarouselElement v-for="(item, index) in content" :key="index" :data="item"
                                     :class="{ 'small-element': index !== 1, 'big-element': index === 1 }"
                    @click="handleClick(index)"/>
                </transition-group>
            </div>
        </div>
    </div>
</template>
<script>

export default {
    data() {
        return {
            activeIndex: 1,
            intervalId: null,
            content: [
                {
                    id: 0,
                    label: 'custom_furniture',
                    text: 'custom_furniture_text',
                    img: '/img/1.png'
                },
                {
                    id: 1,
                    label: 'interior_joinery',
                    text: 'interior_joinery_text',
                    img: '/img/2.png'
                },
                {
                    id: 2,
                    label: 'quality_guaranteed',
                    text: 'quality_guaranteed_text',
                    img: '/img/3.png'
                }
            ]
        };
    },
    methods: {
        handleClick(index) {
            console.table(index)
            // Rotate the array based on the clicked index
            if (index === 0) {
                this.content.unshift(this.content.pop()); // Move the right one to the left
            } else if (index === 2) {
                this.content.push(this.content.shift()); // Move the left one to the right
            }
        }
    }
}
</script>
