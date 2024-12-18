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
                    src="@public/img/home/homeWelcome_v2.png"
                    class="d-block w-100" alt="...">
            </div>
        </div>

        <!--
                <div class="home-profile" id="profile">
                    <h1>{{ $t('/home.mainProfile.label') }}</h1>
                    <div class="main-profile-wrapper">
                    </div>
                </div>-->

        <div class="home-our-works" id="ourWorks">
            <img src="@public/svg/homePageRectangle.svg" alt="My Happy SVG" class="bg"/>
            <div class="all-elements">
                <div class="text-area">
                    <div class="content-box">
                        <h1 class="title">Rólunk...</h1>
                        <p class="subtitle">
                            Különleges bútorok gyártására és beszerelésére specializálódtunk, melyek egyaránt
                            funkcionálisak és dizájnosak.
                        </p>
                        <p class="description">
                            Munkánk a precizitásról szól, amelyet a korszerű technológiák alkalmazásával érünk el.  
                        </p>
                        <p class="description">
                            A kész bútorokra többéves garanciát biztosítunk a minőség garanciájaként. A legjobb
                            bútorvasalat gyártókkal dolgozunk, mint a BLUM, Häfele, ICA
                            és Kesseböhmer.
                        </p>
                    </div>
                    <div class="content-box">
                        <h1 class="title"> </h1>
                        <p class="description">
                            Kreatív és tapasztalt csapatunk van, amely nem riad vissza az Ön igényeinek
                            megvalósításától. Nyitottak vagyunk az új ötletekre, és modern technológiák segítségével
                            olyan magas minőségű bútorokat készítünk, amelyek generációkat érnek meg.
                        </p>
                        <p class="description">
                            Belsőépítészeti stúdiókkal működünk együtt, akiknek egyedi bútorokat gyártunk. Megbízható
                            partnere vagyunk építészeknek és belsőépítési kivitelezőknek.
                        </p>
                    </div>
                </div>
                <PictureGrid
                    v-for="item in content"
                    :style="{'&#45;&#45;top': item.top}"
                    :content="item.images"/>
            </div>

        </div>

        <h1 style="margin-left: 15%">
            <a href="#">
                Kattintson
                <br>
                további képekért...
            </a>
        </h1>

        <ContactForm/>

        <InstagramFeed/>

    </div>

</template>
<script>
import img1 from '@public/img/home/jk4.jpg'
import img2 from '@public/img/home/jk5.jpg'
import img3 from '@public/img/home/jk6.jpg'

export default {
    data() {
        return {
            content: [
                {
                    id: 0,
                    top: '400px',
                    images: {
                        0: img1,
                        1: img2,
                        2: img3,
                    }

                },
                {
                    id: 0,
                    top: '1100px',
                    images: {
                        0: img1,
                        1: img2,
                        2: img3,
                    }
                }
            ]
        };
    },
    methods: {},
    computed: {},
}

/*window.onload = function () {
    $('.contacts').css('height', `calc(${window.innerHeight - $('#footer').get(0).offsetHeight}px)`);
}*/
</script>
<style scoped>
a {
    text-decoration: none;
    color: var(--color-gray-text);
}

a:hover {
    color: var(--color-dark-braun);
}

.container-fluid {
    padding: 0;
}

.header-holder {
    position: relative;
    height: 100vh;
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

.home-profile {
    display: flex;
    justify-content: start;
    align-items: center;
    flex-direction: column;
    height: auto;
    width: 100%;
    margin-top: 2%;
}

.main-profile-wrapper {
    width: 100%;
    height: fit-content;
    display: flex;
    justify-content: center;
    align-items: start;
    margin-top: 25px;
    padding-bottom: 25px;
}

/*content*/
.home-our-works {
    position: relative;
    width: 100%;
    height: 100%;
    background-color: #c5beb4;
    z-index: 10;
    padding-bottom: 1900px;
    margin-bottom: 50px;
    margin-top: 100px;
}

.home-our-works .bg {
    position: absolute;
    bottom: 0;
    right: 0;
    background-image: url("@public/svg/homePageRectangle.svg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    width: 100%;
    height: auto;
    z-index: 20;
}

.home-our-works .text-area {
    position: absolute;
    display: flex;
    justify-content: center;
    align-items: start;
    z-index: 30;
    width: 90%;
    max-height: 300px;
    top: 2%;
    left: 5%;
}

.content-box {
    padding: 20px;
    width: 30%;
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

@media (max-width: 1700px) {
    .header-img {
        top: -35%;
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
    .header-holder{
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
        font-size: 3rem;
    }
    .header-text p {
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
}

@media (max-width: 400px) {
    .header-text h1 {
        font-size: 1.5rem;
    }
    .header-text p {
        font-size: .8rem;
    }
}
</style>
