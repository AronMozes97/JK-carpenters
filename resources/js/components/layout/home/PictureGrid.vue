<script setup>
defineProps({
    content: Object,
})
</script>

<template>
    <div class="img-grid-container">
        <div class="img-grid">
            <div class="big-img">
                <img :src="content[0]" width="auto" height="100%" style="height: 620px" alt=""/>
            </div>
            <div class="small-img">
                <img :src="content[1]" width="auto" height="100%" style="height: 300px" alt=""/>
            </div>
            <div class="small-img">
                <img :src="content[2]" width="auto" height="100%" style="height: 300px" alt=""/>
            </div>
        </div>
    </div>
</template>

<style scoped>
.img-grid-container {
    --top: 0;
    position: absolute;
    z-index: 30;
    top: var(--top);
    display: flex;
    justify-content: center;
    width: 100%;
    margin-top: 50px;
}

.img-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

.big-img {
    grid-column: 1 / 2;
    grid-row: 1 / 3;
}

.small-img {
    width: 100%;
    height: 300px;
    display: flex;
    justify-content: center;
}

/* Scaling for smaller screens */
@media (max-width: 900px) {
    .img-grid-container {
        scale: 0.9
    }

    .img-grid-container:nth-of-type(3) {
       top: 1000px;
    }
}

@media (max-width: 800px) {
    .img-grid-container {
        scale: 0.8
    }

    .img-grid-container:nth-of-type(3) {
        top: 950px;
    }
}

@media (max-width: 700px) {
    .img-grid-container {
        scale: 0.7
    }

    .img-grid-container:nth-of-type(3) {
        top: 900px;
    }
}

@media (max-width: 620px) {
    .img-grid-container {
        scale: 0.6
    }

    .img-grid-container:nth-of-type(3) {
        top: 850px;
    }
}

@media (max-width: 530px) {
    .img-grid-container {
        scale: .95
    }
    .img-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 20px;
    }

    .big-img {
        grid-column: 1 / 2;
        grid-row: 1 / 2;
        display: flex;
        justify-content: center;
    }

    .small-img {
        grid-column: 1 / 2;
        grid-row: 2 / 3;
        display: flex;
        justify-content: center;
    }

    .small-img + .small-img {
        grid-row: 3 / 4;
    }

    .img-grid-container:nth-of-type(2) {
        top: 550px;
    }

    .img-grid-container:nth-of-type(3) {
        display: none;
    }
}

@media (max-width: 485px) {
    .img-grid-container:nth-of-type(2) {
        top: 600px;
    }
}

@media (max-width: 460px) {
    .img-grid-container:nth-of-type(2) {
        top: 650px;
    }
}
@media (max-width: 450px) {
    .img-grid-container:nth-of-type(2) {
        top: 550px;
    }

    .img-grid-container {
        scale: .85
    }
}

@media (max-width: 450px) {
    .img-grid-container:nth-of-type(2) {
        top: 600px;
    }
}

@media (max-width: 380px) {
    .img-grid-container:nth-of-type(2) {
        top: 650px;
    }
}

@media (max-width: 370px) {
    .img-grid-container {
        scale: .75
    }
}

@media (max-width: 340px) {
    .img-grid-container:nth-of-type(2) {
        top: 675px;
    }
}
</style>
