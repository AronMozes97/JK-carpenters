<script setup>
import {defineProps, defineEmits} from 'vue';

const props = defineProps({
    data: {
        type: Object,
        required: true,
    },
});


</script>

<template>
        <div class="element">
            <img :src="data['img']" alt="Placeholder" width="350" height="200">
            <h1 class="h1">{{ $t(data['label']) }}</h1>
            {{ $t(data['text']) }}
        </div>
</template>

