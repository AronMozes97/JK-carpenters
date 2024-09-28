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
            <h1>{{ $t('mainProfile.label') }}</h1>
            <div class="main-profile-wrapper">

                    <!-- Main content, with v-for loop -->
                    <CarouselElement
                        v-for="(item, index) in content"
                        :key="index"
                        :data="item"
                    />
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
                    name: 'custom_furniture',
                    img: 'https://picsum.photos/id/1/375/400'
                },
                {
                    id: 1,
                    name: 'interior_joinery',
                    img: 'https://picsum.photos/id/2/375/400'
                },
                {
                    id: 2,
                    name: 'quality_guaranteed',
                    img: 'https://picsum.photos/id/3/375/400'
                }
            ]
        };
    },
    methods: {
        handleClick(index) {
            let gallery = $('.main-profile-gallery');
            if (index === 0) {
                gallery.scrollLeft(-350 - (20 * 4));
                /*this.content.unshift(this.content.pop());*/
            } else if (index === 2) {
                gallery.scrollLeft(800 + (20 * 4));
            }
        },
        getContentForRightItem(index) {
            console.log(index);
            return this.content;
        }
    },
    computed: {
        leftItem() {
            return this.content[this.content.length - 1];
        },
        rightItem() {
            return this.content[0];
        }
    },
}
</script>
