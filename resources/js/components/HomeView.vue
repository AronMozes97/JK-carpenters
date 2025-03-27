<script setup>
import PictureGrid from '@/components/layout/home/PictureGrid.vue'
import ContactForm from "@/components/layout/home/ContactForm.vue";
import InstagramFeed from "@/components/layout/home/InstagramFeed.vue";
</script>

<template>
    <div class="container-fluid d-flex align-content-start flex-column">
        <div class="header-holder">
            <div class="header-text">
                <div class="text-start">
                    <h1>{{ $t('/home.homeHeaderText.1') }}</h1>
                    <h1>{{ $t('/home.homeHeaderText.2') }}</h1>
                    <p>
                        {{ $t('/home.homeHeaderText.3') }}
                        <br>
                        {{ $t('/home.homeHeaderText.4') }}
                    </p>
                </div>
            </div>
            <div class="header-img">
                <img
                    src="@public/img/home/homeWelcome.jpg"
                    class="d-block w-100" alt="JK CARPENTERS">
            </div>
        </div>

        <div class="home-our-works" id="ourWorks">
            <div class="all-elements">
                <div class="text-area">
                    <div class="content-box">
                        <h1 class="title">{{ $t('/home.aboutUs.section1.title') }}</h1>
                        <p class="description">
                            {{ $t('/home.aboutUs.section1.description1') }}
                        </p>
                        <p class="description">
                            {{ $t('/home.aboutUs.section1.description2') }}
                        </p>
                        <p class="description">
                            {{ $t('/home.aboutUs.section1.description3') }}
                        </p>
                    </div>
                    <div class="content-box">
                        <!--just to fill this line so the 2nd column start at the same height-->
                        <h1 class="title">{{ $t('/home.aboutUs.section2.title') }}</h1>
                        <p class="description">
                            {{ $t('/home.aboutUs.section2.description1') }}
                        </p>
                        <p class="description">
                            {{ $t('/home.aboutUs.section2.description2') }}
                        </p>
                    </div>
                </div>
                <div class="picture-area">
                    <PictureGrid
                        v-for="item in content"
                        :content="item.images"
                        :position="item.position"/>
                </div>
            </div>

        </div>

        <h1 style="margin-left: 15%; font-size: 25px">
            <RouterLink :to="{name: 'gallery'}">
                {{ $t('/home.morePictures.1') }}
                <br>
                {{ $t('/home.morePictures.2') }}
            </RouterLink>
        </h1>

        <ContactForm/>

        <InstagramFeed/>

    </div>

</template>
<script>
import imgLong from '@public/img/home/CARP.png'
import imgLong2 from '@public/img/home/D8.jpg'
import imgSmall11 from '@public/img/home/F13.jpg'
import imgSmall12 from '@public/img/home/Carp_fekt4.png'
import imgSmall21 from '@public/img/home/Carp_fekt.png'
import imgSmall22 from '@public/img/home/E2.jpg'

export default {
    data() {
        return {
            content: [
                {
                    id: 0,
                    images: {
                        0: imgLong,
                        1: imgSmall11,
                        2: imgSmall12,
                    },
                    position: 'right'

                },
                {
                    id: 0,
                    images: {
                        0: imgLong2,
                        1: imgSmall21,
                        2: imgSmall22,
                    },
                    position: 'left'
                }
            ]
        };
    },
    methods: {},
    computed: {},
}

</script>
<style scoped>
a {
    text-decoration: none;
    color: var(--color-gray-text);
}

a:hover {
    color: #c7beae;
}

.container-fluid {
    padding: 0;
}

.header-holder {
    position: relative;
    height: 100dvh;
    overflow: hidden;
}

.header-img {
    position: relative;
    top: -40%;
}

.header-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 15;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    width: 100%;
    height: 100vh;
    color: var(--color-white);
    background-color: rgba(133, 102, 58, 25%);
}

.header-text h1 {
    font-weight: 850;
    font-size: 6rem;
}

.header-text p {
    font-weight: 650;
    font-size: 1.75rem;
}

.carousel button {
    z-index: 15;
}

/*content*/
.home-our-works {
    width: 100%;
    height: fit-content;
    background-color: #c5beb4;
    z-index: 10;
    padding-bottom: 50px;
    margin-bottom: 50px;
}

.home-our-works .text-area {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.home-our-works .content-box {
    padding: 20px;
    width: 80%;
}

.home-our-works .content-box:nth-child(2) {
    padding-top: 0;
}

.title {
    font-size: 24px;
    font-weight: bolder;
    margin-bottom: 10px;
    color: #fff; /* White text */
}

.subtitle {
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 20px;
    color: #fff;
}

.description {
    font-size: 16px;
    font-weight: normal;
    line-height: 1.5;
    color: #fff;
}

.picture-area {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
}

@media (max-width: 1700px) {
    .header-img {
        top: -35%;
    }

    .picture-area{
        flex-direction: column;
    }
}

@media (max-width: 1635px) {
    .header-img {
        top: -30%;
    }
}

@media (max-width: 1575px) {
    .header-img {
        top: -25%;
    }
}

@media (max-width: 1500px) {
    .header-img {
        top: -20%;
    }
}

@media (max-width: 1450px) {
    .header-img {
        top: -15%;
    }
}

@media (max-width: 1390px) {
    .header-img {
        top: -10%;
    }
}

@media (max-width: 1328px) {
    .header-img {
        top: -5%;
    }
}

@media (max-width: 1270px) {
    .header-img {
        top: 0;
    }
}

@media (max-width: 1210px) {
    .header-holder {
        height: fit-content;
    }

    .header-text {
        height: 100% !important;
    }

    .content-box {
        width: 40%;
    }
}

@media (max-width: 992px) {
    .header-text h1 {
        font-size: 4rem;
    }
}

@media (max-width: 850px) {
    .header-text h1 {
        text-align: center;
        font-size: 2.5rem;
    }

    .header-text p {
        text-align: center;
        font-size: 1.5rem;
    }
}

@media (max-width: 700px) {
    .content-box {
        width: 50%;
    }
}

@media (max-width: 650px) {
    .header-text h1 {
        font-size: 2.5rem;
    }

    .header-text p {
        font-size: 1.2rem;
    }
}

@media (max-width: 450px) {
    .header-text {
        padding-top: 10% !important;
    }

    .header-text h1 {
        font-size: 2rem;
    }

    .header-text p {
        font-size: 1rem;

    }

    .content-box {
        padding: 20px 10px;
    }
}

@media (max-width: 400px) {
    .header-text h1 {
        font-size: 1.5rem;
    }

    .header-text p {
        font-size: .8rem;
    }
}

@media (max-width: 330px) {
    .content-box {
        padding: 20px 5px;
    }
}
</style>
