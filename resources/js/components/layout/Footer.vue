<script setup>
</script>

<template>
    <footer id="footer">
        <div class="name">JK CARPENTERS</div>
        <div class="upper-section">
            <div class="left">
                <div>
                    <p>{{ $t('businessInfo.label.name') }}</p>
                    <p>
                        Dunajský Klátov 625,
                        <br>
                        Dunajský Klátov 930 21
                    </p>
                </div>
                <div>
                    <p>{{ $t('businessInfo.label.identificationNumber') }}</p>
                    <p>
                        IČO: 50 249 011
                        <br>
                        IČ DPH: 2120244995
                    </p>
                </div>
            </div>
            <div class="line">
                <div/>
            </div>
            <div class="center">
                <div>
                    <p>Jurányi Roland</p>
                    <p class="tell">+421 905 989 008</p>
                </div>
                <div>
                    <p>Kántor István</p>
                    <p class="tell">+421 905 704 980</p>
                </div>
            </div>
            <div class="line">
                <div/>
            </div>
            <div class="right">
                <div>
                    <p>{{ $t('businessInfo.label.office') }}: </p>
                    <p>
                        PPD Trhové Mýto,
                        <br>
                        Dolnobarská 407 | 930 13
                        <br>
                        Trhová Hradská
                    </p>
                </div>
                <div>
                    <p>{{ $t('contactUs') }}</p>
                    <div class="social-media-footer">
                        <i class="bi bi-instagram" onclick="window.open('https://www.instagram.com/jk_carpenters/')"></i>
                        <i class="bi bi-facebook"
                           onclick="window.open('https://www.facebook.com/profile.php?id=100064316940990')"></i>
                    </div>
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
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.left div:nth-child(1) p:nth-child(1),
.right div:nth-child(1) p:nth-child(1) {
    font-size: 14px;
    font-weight: 700;
}

.left div:nth-child(1) p:nth-child(2),
.right div:nth-child(1) p:nth-child(2) {
    font-weight: 400;
    font-size: 16px;
}

.left div:nth-child(2) p:nth-child(1),
.center div p:nth-child(1),
.right div:nth-child(2) {
    font-weight: 800;
    font-size: 18px;
}

.left div {
    width: fit-content;
    min-width: 200px;
}

.right div i {
    font-size: 35px;
    margin: 0 10px;
}

.center div {
    width: fit-content;
    min-width: 200px;
    text-align: center;
}

.right div {
    width: fit-content;
    min-width: 200px;
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

@media (max-width: 700px) {
    .upper-section {
        display: grid;
        grid-template-rows: auto auto; /* Two rows: one for the top, one for the bottom */
        grid-template-columns: 1fr 1fr; /* Two equal columns */
        grid-template-areas:
        "center center"
        "left right";
        gap: 10px; /* Optional: space between items */
        width: 100%;
        align-items: start; /* Vertically align all grid items */
        justify-items: center; /* Horizontally align all grid items */
    }

    .left {
        grid-area: left;
    }

    .left div:nth-child(1) p:nth-child(1) {
        padding: 0;
        margin: 0;
    }

    .left > div > p {
        text-align: start !important;
    }

    .center {
        grid-area: center;
    }

    .right {
        grid-area: right;
    }

    .center div p,
    .right div p {
        width: 100% !important;
    }

    .left, .center, .right {
        width: 100% !important;
    }

    .left > div > p, .center > div > p, .right > div > p {
        text-align: center !important;
    }

    .right .social-media-footer {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: row;
    }

    .line {
        display: none !important;
    }
}

@media (max-width: 440px) {
    .upper-section {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 1fr;
        grid-template-areas:
        "center"
        "left"
        "right";
        width: 100%;
    }
}
</style>
