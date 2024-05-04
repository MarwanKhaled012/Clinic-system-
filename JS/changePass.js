let currentPass = document.querySelector('[name="cPassword"]');
let newPass = document.querySelector('[name="nPassword"]');
let form = document.querySelector(".form");
form.addEventListener('submit', function(e) {
    let currentValid = false;
    let newValid = false;

    if (currentPass.value !== "" && currentPass.value.length >= 8) {
        currentValid = true;
    }
    if (newPass.value !== "" && newPass.value.length >= 8) {
        newValid = true;
    }
    if (currentValid === false || newValid === false) {
        e.preventDefault();
        currentPass.value = "";
        newPass.value = "";
    }
});