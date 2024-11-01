<script setup>
defineProps({
    content: Object,
})
</script>

<template>
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
</template>

<style scoped>
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
    display: flex;
    justify-content: center;
}
</style>
