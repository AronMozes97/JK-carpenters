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
        <img :src="data['img']" alt="Placeholder" width="375" height="400">
        <div class="h3">{{ $t('mainProfile.' + data['name'] + '.label') }}</div>
        <p>
            {{ $t('mainProfile.' + data['name'] + '.text') }}
        </p>
    </div>
</template>

