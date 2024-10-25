<script setup>

</script>

<template>
    <div class="contact-us" id="contactUs">
        <div class="innerPart">
            <div class="text-holder">
                <h1>
                    Kérjen
                    <br>
                    ajánlatot még ma!
                </h1>
                <p>Cégünk Termékeiet és  szolgáltatásait magas színvonalon képviseljük
                    a külpiacokon is. Személyes egyeztetésért vegye fel velünk
                    a kapcsolatot.
                </p>
            </div>
            <div class="from-holder">
                <div class="mb-3">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Business name">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Phone">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="E-mail">
                </div>
                <div class="mb-3">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Message"></textarea>
                </div>
                <button class="btn">
                    Send
                    <i class="bi bi-envelope-fill"></i>
                </button>
            </div>
        </div>
    </div>
</template>

<style scoped>
.contact-us {
    width: 80%;
    height: 100vh;
    background-color: var(--color-braun);
    display: flex;
    justify-content: center;
    align-items: center;
    align-self: center;
}

.innerPart {
    background-color: var(--color-dark-braun);
    width: 100%;
    height: 75%;
    margin: 150px 0 150px 0;
    display: flex;
    align-items: center;
    position: relative;
    z-index: 1;
}

.from-holder{
    position: absolute;
    width: 50%;
    height: 100%;
    background-color: var(--color-white);
    left: 5%;
    z-index: 3;
    padding: 30px;
    display: flex;
    flex-direction: column;
}

.text-holder{
    position: absolute;
    left: 0;
    background-color: #D9D9D9;
    z-index: 2;
    padding-left: 57%;
    width: 100%;
}

.text-holder * {
    color: var(--color-gray-text);
}

.text-holder p{
    font-weight: 550;
}

.form-control{
    background-color: var(--color-gray);
    border: none;
    border-radius: 10px;
}

.form-control:focus{
    background-color: var(--color-white);
    border: solid 1px var(--color-dark-braun);
    box-shadow: none;
}

.btn{
    background-color: var(--color-dark-braun);
    width: 150px;
    color: var(--color-white);
}

</style>
