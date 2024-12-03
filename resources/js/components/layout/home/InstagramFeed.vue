<script setup>

import img1 from '@public/img/insta/insta1.jpg';
import img2 from '@public/img/insta/insta2.jpg';
import img3 from '@public/img/insta/insta3.jpg';
import img4 from '@public/img/insta/insta4.jpg';

const images = [
    img1,
    img2,
    img3,
    img4
];
</script>

<template>
    <div class="holder">
        <h1 class="text-dark mb-4">Instagram</h1>
        <div class="insta-images" onclick="window.open('https://www.instagram.com/jk_carpenters/', '_blank');">
            <img v-for="image in images" :src="image" width="230" height="230">
        </div>
    </div>
</template>
<script>

</script>
<style scoped>
    .holder{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin: 40px 0;
        cursor: pointer;
    }

    .insta-images{
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
    }

    .insta-images img{
        border: solid var(--color-dark-gray) 10px;
    }

    @media (max-width: 978px) {
        img{
            width: 200px;
            height: 200px;
        }

        .insta-images img{
            border: solid var(--color-dark-gray) 7px;
        }
    }


    @media (max-width: 860px) {
        img{
            width: 175px;
            height: 175px;
        }

        .insta-images img{
            border: solid var(--color-dark-gray) 5px;
        }
    }

    @media (max-width: 766px) {
        img{
            width: 160px;
            height: 160px;
        }
    }

    @media (max-width: 704px) {
        .insta-images{
            gap: 10px;
        }
    }

    @media (max-width: 675px) {
        img{
            width: 150px;
            height: 150px;
        }
    }

    @media (max-width: 634px) {
        .insta-images{
            --size: 250px;
            display: grid;
            grid-template-columns: var(--size) var(--size);
        }

        img {
            width: var(--size);
            height: var(--size);
        }
    }

    @media (max-width: 519px) {
        .insta-images {
            --size: 200px;
        }
    }

    @media (max-width: 420px) {
        .insta-images {
            --size: 175px;
        }
    }

    @media (max-width: 380px) {
        .insta-images {
            --size: 150px;
        }
    }
</style>
