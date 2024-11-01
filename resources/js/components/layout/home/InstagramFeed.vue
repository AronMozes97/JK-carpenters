<script setup>
</script>
<script>
export default {
    data() {
        return {
            post: [],
        };
    },
    mounted() {
        this.fetchInstagramFeed();
    },
    methods : {
        async fetchInstagramFeed(){
            try {
                const apiUrl = document.querySelector('meta[name="instagram-feed-url"]').getAttribute('content');
                const response = await fetch(apiUrl);
                const data = await response.json();
                console.log(data);
            } catch (error) {
                console.error('Error fetching Instagram feed:', error);
            }
        }
    }
}
</script>

<template>
<div>
    <div v-for="post in posts" :key="post.id">
        <img :src="post.link" :alt="post.guid">
    </div>
</div>
</template>

<style scoped>

</style>
