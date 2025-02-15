<script setup>
defineProps({
    content: Object,
    position: String,
})
</script>

<template>
    <div class="img-grid-container">
        <div class="img-grid">
            <div :class="position === 'right' ? 'big-img right' : 'big-img left'">
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
    display: flex;
    justify-content: center;
    width: 100%;
    margin-top: 20px;
}

.img-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

.big-img img {
    max-width: 420px;
}

.big-img.right {
    grid-column: 1 / 2;
    grid-row: 1 / 3;
}

.big-img.left {
    grid-column: 2 / 2;
    grid-row: 1 / 3;
}

.small-img img {
    max-width: 400px;
}

.small-img {
    width: 100%;
    height: 300px;
    display: flex;
    justify-content: center;
}

/* Scaling for smaller screens */
@media (max-width: 1700px) {
    .img-grid {
        column-gap: 150px;
    }
}

@media (max-width: 1200px) {
    .img-grid {
        column-gap: 50px;
    }
}

@media (max-width: 950px) {
    .img-grid {
        column-gap: 10px;
    }
}


@media (max-width: 900px) and (min-width: 321px) {
    .img-grid {
        grid-template-columns: 1fr;
        row-gap: 20px;
        column-gap: 0;
    }

    .big-img.right, .big-img.left {
        grid-column: 1 / 2;
        grid-row: 1 / 2;
    }

    .big-img img {
        max-width: 100%;
        height: auto;
    }

    .small-img img {
        max-width: 100%;
        height: auto;
    }

    .small-img {
        height: auto;
    }
}

@media (max-width: 320px) {
    .img-grid-container {
        padding: 0 5px;
    }

    .img-grid {
        grid-template-columns: 1fr;
        gap: 10px;
    }

    .big-img img, .small-img img {
        max-width: 100%;
        height: auto;
    }
}

</style>
