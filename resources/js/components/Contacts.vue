<script setup>

</script>
<template>
    <div class="contacts pc">
        <div class="map">
            <iframe
                width="600"
                height="450"
                style="border:0;"
                loading="lazy"
                allowfullscreen
                :src="mapSrc">
            </iframe>
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
                width="600"
                height="450"
                style="border:0;"
                loading="lazy"
                allowfullscreen
                :src="mapSrc">
            </iframe>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            mapSrc: "https://www.google.com/maps/embed/v1/place?key=AIzaSyBYvoVnxPh0C78Od1NfHXOieyFV7UD1t6c&q=JK Carpenters s.r.o.,Dolnobarská cesta 407, 93010 Trhová Hradská"
        };
    }
};
</script>
<style scoped>
.contacts {
    position: relative;
    height: fit-content;
    background-color: #f8f5f2;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    padding-top: 20px;
    padding-bottom: 20px;
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
    padding: 10px;
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
