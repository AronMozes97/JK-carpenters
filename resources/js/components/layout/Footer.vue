<script setup>
</script>

<template>
    <footer id="footer">
        <div class="name">JK CARPENTERS</div>
        <div class="upper-section">
            <div class="left">
                <div>
                    <p>{{ $t('businessInfo.label.name') }}</p>
                    <p>ul. kráľa Žigmunda 5869/25., <br>
                        Dunajská Streda 929 01</p>
                </div>
                <div>
                    <p>{{ $t('contactUs') }}</p>
                    <i class="bi bi-instagram" onclick="window.open('https://www.instagram.com/jk_carpenters/')"></i>
                    <i class="bi bi-facebook" onclick="window.open('https://www.facebook.com/profile.php?id=100064316940990')"></i>
                </div>
            </div>
            <div class="line">
                <div/>
            </div>
            <div class="center">
                <div>
                    <p>{{ $t('businessInfo.label.identificationNumber') }}</p>
                    <p>
                        IČO: 50 249 011
                        <br>
                        IČ DPH: 2120244995
                    </p>
                </div>
                <div>
                    <p>Kántor István</p>
                    <p class="tell">+421 20 886 49 15 </p>
                </div>
            </div>
            <div class="line">
                <div/>
            </div>
            <div class="right">
                <div>
                    <p>{{ $t('businessInfo.label.office') }}: </p>
                    <p>
                        IPPD Trhové Mýto,
                        <br>
                        Dolnobarská 407 | 930 13
                        <br>
                        Trhová Hradská
                    </p>
                </div>
                <div>
                    <p>Jurányi Roland </p>
                    <p class="tell">+421 20 886 49 15</p>
                </div>
            </div>
        </div>

        <div class="lower-section">
            <p style="margin: 0">
                <span id="currentYear">2024</span> {{ $t('rightsReserved') }}
            </p>
        </div>
    </footer>
</template>

<script>
</script>

<style scoped>
footer {
    height: fit-content;
    box-shadow: 0 5px 20px rgba(28, 28, 28, 0.3);
    background-color: #c7beae;
    color: var(--color-white);
    display: flex;
    flex-direction: column;
    width: 100%;
}

.upper-section, .lower-section {
    width: 95%;
    align-self: center;
    display: flex;
    justify-content: start;
    flex-direction: row;
}

.name {
    width: 95%;
    font-size: 24px;
    font-weight: 700;
    margin: 20px 0;
    align-self: center;
}

.line {
    height: 200px;
    display: flex;
    align-items: center;
}

.line div {
    border-left: 1px solid #ffffff;
    height: 80%;
}

.left, .center, .right {
    width: 33%;
}

.left div:nth-child(1) p:nth-child(1), .center div:nth-child(1) p:nth-child(1), .right div:nth-child(1) p:nth-child(1) {
    font-size: 14px;
    font-weight: 700;
}

.left div:nth-child(1) p:nth-child(2), .center div:nth-child(1) p:nth-child(2), .right div:nth-child(1) p:nth-child(2) {
    font-weight: 400;
    font-size: 16px;
}

.left div:nth-child(2) p:nth-child(1), .center div:nth-child(2), .right div:nth-child(2) {
    font-weight: 800;
    font-size: 18px;
}

.left div i {
    font-size: 40px;
    margin: 0 10px;
}

.center {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.center div {
    width: 60%;
    text-align: left;
}

.right {
    display: flex;
    flex-direction: column;
    align-items: end;
    justify-content: center;
}

.right div {
    width: 70%;
    text-align: left;
}

.lower-section {
    display: flex;
    justify-content: center;
    align-items: center;
    align-self: start;
}

.bi {
    cursor: pointer;
}

@media (max-width: 960px) {
    .center {
        width: 40% !important;
    }
}

@media (max-width: 878px) {
    .right{
        margin-left: -20px;
    }
}

@media (max-width: 818px) {
    .tell{
        font-size: 15px;
    }
}

@media (max-width: 682px) {
    .tell{
        font-size: 13px;
    }
}

@media (max-width: 666px) {
    .upper-section {
        display: grid;
        grid-template-rows: auto auto; /* Two rows: one for the top, one for the bottom */
        grid-template-columns: 1fr 1fr; /* Two equal columns */
        gap: 10px; /* Optional: space between items */
        width: 100%;
        align-items: start; /* Vertically align all grid items */
        justify-items: center; /* Horizontally align all grid items */
    }

    .left {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        grid-column: 1 / 3; /* Span across both columns */
        grid-row: 1 / 2; /* Place in the first row */
    }

    .center {
        width: 100% !important;
        grid-column: 1 / 2; /* Place in the first column */
        grid-row: 2 / 3; /* Place in the second row */
        align-items: center;
    }

    .right {
        width: 100% !important;
        grid-column: 2 / 3; /* Place in the second column */
        grid-row: 2 / 3; /* Place in the second row */
        border-left: 1px solid #ffffff;
        align-items: center;
    }

    .center div p,
    .right div p {
        width: 100% !important;
    }


    .line{
        display: none !important;
    }

    .left div p:nth-child(1){
        text-align: center;
    };
}

</style>
