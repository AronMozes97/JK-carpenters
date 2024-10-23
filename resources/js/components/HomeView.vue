<script setup>

</script>

<template>
    <div class="container-fluid d-flex align-content-start flex-column">
        <div id="homeHeaderCarousel" class="carousel slide" data-bs-ride="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img
                        src="https://s3-alpha-sig.figma.com/img/8aff/d00d/9c0bce9c5a4de5fde017a4a45e679b9d?Expires=1730073600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=c-JtlMvKe15eyijzZxp8AmThMy25zci0k-fGJbpLk45JZJaGwvH7Ullm69BJiwbjet427Wfnq2uc5sFq~iuF9viVK2t9cMxtvCPOxINf8ouHS7Wr25jtuVs4IGehYO~q5ZWXwXj1knu~M7Mq0f7qbO-6L2Owyj7SqjU4D-kFtQqBUJTmJf4qirMuYMxSiY4UAUlqY8B6mTjR9cnXofLLMN4Rwj~Bh1xYtSVQs-CB0QQ6HsDbxSfvaRYajvPDKmLcn6yakWflo1wq8B0hg5ElRs0lg6-mF5e5byLWjCm6ftsN4d4d8kH4ccqg60TvvmzZ9fdEAYA6bJgQacHEsqIjBw__"
                        class="d-block w-100" alt="...">
                    <h4 class="header-text">
                        <p v-html="$t('/home.homeHeaderText')"></p>
                    </h4>
                </div>
                <div class="carousel-item">
                    <img
                        src="https://s3-alpha-sig.figma.com/img/8aff/d00d/9c0bce9c5a4de5fde017a4a45e679b9d?Expires=1730073600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=c-JtlMvKe15eyijzZxp8AmThMy25zci0k-fGJbpLk45JZJaGwvH7Ullm69BJiwbjet427Wfnq2uc5sFq~iuF9viVK2t9cMxtvCPOxINf8ouHS7Wr25jtuVs4IGehYO~q5ZWXwXj1knu~M7Mq0f7qbO-6L2Owyj7SqjU4D-kFtQqBUJTmJf4qirMuYMxSiY4UAUlqY8B6mTjR9cnXofLLMN4Rwj~Bh1xYtSVQs-CB0QQ6HsDbxSfvaRYajvPDKmLcn6yakWflo1wq8B0hg5ElRs0lg6-mF5e5byLWjCm6ftsN4d4d8kH4ccqg60TvvmzZ9fdEAYA6bJgQacHEsqIjBw__"
                        class="d-block w-100" alt="...">
                    <h4 class="header-text">
                        <p v-html="$t('/home.homeHeaderText')"></p>
                    </h4>
                </div>
                <div class="carousel-item">
                    <img
                        src="https://s3-alpha-sig.figma.com/img/8aff/d00d/9c0bce9c5a4de5fde017a4a45e679b9d?Expires=1730073600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=c-JtlMvKe15eyijzZxp8AmThMy25zci0k-fGJbpLk45JZJaGwvH7Ullm69BJiwbjet427Wfnq2uc5sFq~iuF9viVK2t9cMxtvCPOxINf8ouHS7Wr25jtuVs4IGehYO~q5ZWXwXj1knu~M7Mq0f7qbO-6L2Owyj7SqjU4D-kFtQqBUJTmJf4qirMuYMxSiY4UAUlqY8B6mTjR9cnXofLLMN4Rwj~Bh1xYtSVQs-CB0QQ6HsDbxSfvaRYajvPDKmLcn6yakWflo1wq8B0hg5ElRs0lg6-mF5e5byLWjCm6ftsN4d4d8kH4ccqg60TvvmzZ9fdEAYA6bJgQacHEsqIjBw__"
                        class="d-block w-100" alt="...">
                    <h4 class="header-text">
                        <p v-html="$t('/home.homeHeaderText')"></p>
                    </h4>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#homeHeaderCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#homeHeaderCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="home-profile">
            <h1>{{ $t('/home.mainProfile.label') }}</h1>
            <div class="main-profile-wrapper">

            </div>
        </div>

        <div class="home-our-works">
            <img src = "@public/svg/homePageRectangle.svg" alt="My Happy SVG" class="bg"/>
            <div class="all-elements">
                <div class="text-area">
                    <div class="content-box">
                        <h1 class="title">Legjobb munkáink</h1>
                        <p class="subtitle">Lorum ipse ivado lik hovki tuk ma.</p>
                        <p class="description">
                            Rövid cégtörténet Lorum ipse tizál a cukros bőrös ellen... Mára a bugólas dicsőt (1) pilla márma kárványa hajás klás a metleves igazás alapján évente a bető trólium után hektáronként egyelmi kozást, a csúszt szerendenővel tüd patd tróliuma után hektáronként ezer kozást szonahat urlásként.
                        </p>
                    </div>
                    <div class="content-box">
                        <h1 class="title">Legjobb munkáink</h1>
                        <p class="subtitle">Lorum ipse ivado lik hovki tuk ma.</p>
                        <p class="description">
                            Rövid cégtörténet Lorum ipse tizál a cukros bőrös ellen... Mára a bugólas dicsőt (1) pilla márma kárványa hajás klás a metleves igazás alapján évente a bető trólium után hektáronként egyelmi kozást, a csúszt szerendenővel tüd patd tróliuma után hektáronként ezer kozást szonahat urlásként.
                        </p>
                    </div>
                </div>
                <div class="img-grid" :style="{'--top': '400px'}">
                    <div class="bg-primary big-img"></div>
                    <div class="bg-secondary small-img"></div>
                    <div class="bg-danger small-img"></div>
                </div>
                <div class="img-grid" :style="{'--top':'1100px'}">
                    <div class="bg-danger big-img"></div>
                    <div class="bg-success small-img"></div>
                    <div class="bg-warning small-img"></div>
                </div>
            </div>
        </div>

        <h1 style="margin-left: 15%">
            <a href="#">
            Kattintson
            <br>
            további képekért...
            </a>
        </h1>

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
    },
    computed: {
    },
}
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

.header-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 15;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 60%;
    color: var(--color-white);
}

.header-text p {
    font-weight: 650;
    font-size: 1.75rem;
}

.home-profile {
    display: flex;
    justify-content: start;
    align-items: center;
    flex-direction: column;
    height: auto;
    width: 100%;
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
    width: 90%;
    height: 100%;
    background-color: var(--color-braun);
    z-index: 10;
    padding-bottom: 1900px;
    margin-bottom: 50px;
}

.home-our-works .bg{
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

.home-our-works .text-area{
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
    background-color: #e6d8c1; /* Beige-like background */
    padding: 20px;
    width: 300px; /* Adjust width as needed */
    font-family: Arial, sans-serif; /* You can change this to match the style you want */
}

.title {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 10px;
    color: #fff; /* White text */
}

.subtitle {
    font-size: 16px;
    font-weight: normal;
    margin-bottom: 20px;
    color: #eee; /* Lighter white text */
}

.description {
    font-size: 14px;
    font-weight: normal;
    line-height: 1.5;
    color: #fff; /* White text */
}


.img-grid {
    --top: 0px;
    position: absolute;
    width: 80%;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    z-index: 30;
    top: var(--top);
    left: 5%;
}


.big-img {
    grid-column: 1 / 2;
    grid-row: 1 / 3;
}

.small-img {
    width: 100%;
    height: 300px;
}
</style>
