<script setup>
</script>
<template>
    <div class="contacts">
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d667.6152868711371!2d17.741751605269535!3d47.98547454254093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476b7586721adbd3%3A0x65e62887f385185d!2zUE9ESUVMTsONQ0tFIFBPxL1OT0hPU1BPRMOBUlNLRSBEUlXFvVNUVk8!5e0!3m2!1ssk!2ssk!4v1728149335749!5m2!1ssk!2ssk"
                width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="info" style="border: 1px solid black">
            {{ $t('/contacts.label')}}
        </div>
    </div>

</template>
