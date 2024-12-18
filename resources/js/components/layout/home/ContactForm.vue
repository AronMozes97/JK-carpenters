<script setup>
import {useI18n} from 'vue-i18n';

const {t} = useI18n();


window.onload = function () {
    const inputs = [
        {field: 'nameInput', message: t('/home.contactForm.nameInput.message')},
        {field: 'telInput', message: t('/home.contactForm.telInput.message')},
        {field: 'emailInput', message: t('/home.contactForm.emailInput.message')},
        {field: 'messageInput', message: t('/home.contactForm.messageInput.message')},
    ];

    inputs.forEach(({field, message}) => {
        const inputElement = document.getElementById(field);

        inputElement.addEventListener('invalid', (event) => {
            event.target.setCustomValidity(message);
        });

        inputElement.addEventListener('input', (event) => {
            event.target.setCustomValidity('');
        });
    });

    document.getElementById('send').addEventListener('click', (event) => {
        event.preventDefault(); // Prevent default button action

        let isValid = true;
        inputs.reverse().forEach(({field}) => {
            const inputElement = document.getElementById(field);

            if (!inputElement.checkValidity()) {
                inputElement.reportValidity();
                isValid = false;
            }
        });

        if (isValid) {
            const apiUrl = route('send.contact.mail');
            $.ajax({
                url: apiUrl,
                method: "GET",
                data: {
                    name: $('#nameInput').val(),
                    businessName: $('#businessNameInput').val(),
                    tel: $('#telInput').val(),
                    email: $('#emailInput').val(),
                    message: $('#messageInput').val(),
                },
                success: function (response) {
                    console.log(response);
                }
            });
        }
    });
}
</script>

<template>
    <div class="holder">
        <div class="contact-us" id="contactUs">
            <div class="innerPart">
                <div class="text-holder">
                    <h1>
                        Kérjen
                        <br>
                        ajánlatot még ma!
                    </h1>
                    <p>Cégünk Termékeiet és szolgáltatásait magas színvonalon képviseljük
                        a külpiacokon is. Személyes egyeztetésért vegye fel velünk
                        a kapcsolatot.
                    </p>
                </div>
                <div class="from-holder">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="nameInput" placeholder="Name" required value="Mozes Aron">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="businessNameInput" placeholder="Business name" value="JK Carpenters">
                        </div>
                        <div class="mb-3">
                            <input type="tel" class="form-control" id="telInput" placeholder="Phone" required value="0918264780">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="emailInput" placeholder="E-mail" required value="aron.mozes97@gmail.com">
                        </div>
                        <div class="mb-3">
                        <textarea class="form-control" id="messageInput" rows="5"
                                  placeholder="Message" required>asdasdas</textarea>
                        </div>
                        <button class="btn" id="send">
                            Send
                            <i class="bi bi-envelope-fill"></i>
                        </button>
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>
.holder {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f8f5f2;
    padding: 80px 0;
}

.contact-us {
    width: 80%;
    height: 600px;
    display: flex;
    justify-content: center;
    align-items: center;
    align-self: center;
}

.innerPart {
    background-color: #e3dbce;
    width: 80%;
    height: 100%;
    margin: 150px 0 150px 0;
    display: flex;
    align-items: center;
    position: relative;
    z-index: 1;
}

.from-holder {
    position: absolute;
    width: 50%;
    height: 95%;
    background-color: var(--color-white);
    left: 5%;
    z-index: 3;
    padding: 30px;
    display: flex;
    flex-direction: column;
    border-radius: 3%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.19);
}

.from-holder > div > input {
    height: 56px;
}

.text-holder {
    position: absolute;
    left: 0;
    background-color: #c7beae;
    z-index: 2;
    padding-left: 57%;
    width: 100%;
    height: 70%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: start;
}

.text-holder * {
    color: #F9F5EF;
}

.text-holder h1 {
    padding-right: 20px;
}

.text-holder p {
    font-weight: 550;
    padding-right: 75px;
}

.form-control {
    background-color: var(--color-gray);
    border: none;
    border-radius: 10px;
}

.form-control:focus {
    background-color: var(--color-white);
    border: solid 1px var(--color-dark-braun);
    box-shadow: none;
}

.btn {
    background-color: #c7beae;
    width: 150px;
    color: var(--color-white);
}

@media (max-width: 1342px) {
    .innerPart {
        width: 100%;
    }
}

@media (max-width: 600px) {
    .contact-us {
        width: 100%;
    }
}

@media (max-width: 420px) {
    .btn {
        width: 100px;
    }

    .from-holder {
        left: 1%;
        width: 56%;
    }

    .text-holder h1 {
        padding: 0 0 0 5%;
    }

    .text-holder p {
        padding: 0 0 0 5%;
    }
}

</style>
