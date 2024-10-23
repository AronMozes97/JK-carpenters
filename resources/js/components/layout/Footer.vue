<script setup>

</script>

<template>
    <footer>
        <div>
            <div class="footer-left">
                <img :src="'/img/logo.jpg'">
                <div class="left text-start">
                    <p><b>{{ $t('footer.businessInfo.label.name') }}:</b></p>
                    <p><b>{{ $t('footer.businessInfo.label.seat') }}:</b></p>
                    <p><b>{{ $t('footer.businessInfo.label.identificationNumber') }}:</b></p>
                    <p><b>{{ $t('footer.businessInfo.label.taxNumber') }}:</b></p>
                    <p><b>{{ $t('footer.businessInfo.label.companyRegistrationNumber') }}:</b></p>
                    <p><b>{{ $t('footer.businessInfo.label.office') }}:</b></p>
                </div>
                <div class="right">
                    <p>{{ $t('footer.businessInfo.text.name') }}</p>
                    <p>{{ $t('footer.businessInfo.text.seat') }}</p>
                    <p>{{ $t('footer.businessInfo.text.identificationNumber') }}</p>
                    <p>{{ $t('footer.businessInfo.text.taxNumber') }}</p>
                    <p>{{ $t('footer.businessInfo.text.companyRegistrationNumber') }}</p>
                    <p>{{ $t('footer.businessInfo.text.office') }}</p>
                </div>
            </div>
        </div>
        <div class="text-center copyright">
            Copyright © JK Carpenters s.r.o
        </div>
    </footer>
</template>

<style scoped>
footer {
    height: fit-content;
    box-shadow: 0 5px 20px rgba(28, 28, 28, 0.3);
    background-color: var(--color-light-gray);
    display: flex;
    flex-direction: column;
    width: 100%;
}

footer .copyright{
    color: var(--color-dark-gray);
    background-color: var(--color-gray);
}

.footer-left{
    display: flex;
    align-items: center;
}

.footer-left img{
    margin-left: 20px;
    max-width: 150px;
    width: calc(100% / 3);
    height: auto;
}

.footer-left .left p{
    font-size: 11px;
    padding-right: 5px;
}

.footer-left .right{
    font-size: 11px;
}

.footer-left .left p:last-child,.footer-left .right p:last-child{
    margin-bottom: 6px !important;
}

.footer-center{
    display: flex;
    justify-content: end;
    align-items: start;
}

.footer-right{
    display: flex;
    justify-content: center;
    align-items: start;
}
</style>
