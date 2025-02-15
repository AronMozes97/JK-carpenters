<script setup>

</script>
<template>
    <div class="contacts pc">
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d667.6152868711371!2d17.741751605269535!3d47.98547454254093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476b7586721adbd3%3A0x65e62887f385185d!2zUE9ESUVMTsONQ0tFIFBPxL1OT0hPU1BPRMOBUlNLRSBEUlXFvVNUVk8!5e0!3m2!1ssk!2ssk!4v1728149335749!5m2!1ssk!2ssk"
                width="570" height="590" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="info">
            <h1>{{ $t('businessInfo.contact') }}</h1>
            <br>
            <p class="label"><b>{{ $t('businessInfo.label.name') }}</b></p>
            <p>{{ $t('businessInfo.text.name') }}</p>
            <p class="label"><b>{{ $t('businessInfo.label.seat') }}</b></p>
            <p>{{ $t('businessInfo.text.seat') }}</p>
            <p class="label"><b>{{ $t('businessInfo.label.identificationNumber') }}</b></p>
            <p>{{ $t('businessInfo.text.identificationNumber') }}</p>
            <p class="label"><b>{{ $t('businessInfo.label.taxNumber') }}</b></p>
            <p>{{ $t('businessInfo.text.taxNumber') }}</p>
            <p class="label"><b>{{ $t('businessInfo.label.companyRegistrationNumber') }}</b></p>
            <p>{{ $t('businessInfo.text.companyRegistrationNumber') }}</p>
            <p class="label"><b>{{ $t('businessInfo.label.office') }}</b></p>
            <p>{{ $t('businessInfo.text.office') }}</p>
        </div>
    </div>

    <div class="contacts mobile">
        <div class="info mobile">
            <h1>{{ $t('businessInfo.contact') }}</h1>
            <br>
            <p class="label"><b>{{ $t('businessInfo.label.name') }}</b></p>
            <p>{{ $t('businessInfo.text.name') }}</p>
            <p class="label"><b>{{ $t('businessInfo.label.seat') }}</b></p>
            <p>{{ $t('businessInfo.text.seat') }}</p>
            <p class="label"><b>{{ $t('businessInfo.label.identificationNumber') }}</b></p>
            <p>{{ $t('businessInfo.text.identificationNumber') }}</p>
            <p class="label"><b>{{ $t('businessInfo.label.taxNumber') }}</b></p>
            <p>{{ $t('businessInfo.text.taxNumber') }}</p>
            <p class="label"><b>{{ $t('businessInfo.label.companyRegistrationNumber') }}</b></p>
            <p>{{ $t('businessInfo.text.companyRegistrationNumber') }}</p>
            <p class="label"><b>{{ $t('businessInfo.label.office') }}</b></p>
            <p>{{ $t('businessInfo.text.office') }}</p>
        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d719.7722367087862!2d17.7416781!3d47.98551!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476b75946f5d4385%3A0x5063689c08795d16!2sJK%20Carpenters%20s.r.o.!5e1!3m2!1ssk!2ssk!4v1739644003183!5m2!1ssk!2ssk"
                width="570" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>

</template>
<style scoped>
.contacts {
    position: relative;
    height: 90dvh;
    background-color: #f8f5f2;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    padding-top: 10px;
}

.contacts.mobile {
    display: none;
    flex-direction: column;
}

.map {
    height: 570px;
    width: 450px;
}

.map iframe {
    width: 100%;
    height: 100%;
    border: 0;
}

.info {
    color: #c7beae;
}

.info.mobile {
    padding-top: 10px;
}

.info p.label {
    margin-bottom: 0;
}

@media (max-width: 900px) {
    .map {
        height: 500px;
        width: 400px;
    }
}

@media (max-width: 850px) {
    .map {
        height: 450px;
        width: 350px;
    }
}

@media (max-width: 815px) {
    .contacts.mobile {
        display: flex;
    }

    .contacts {
        display: none;
    }
}
</style>
