let userInput = document.querySelector('[name="userID"]');
let userPass = document.querySelector('[name="userPW"]');
let form = document.querySelector(".form");
form.addEventListener('submit', function(e) {
    let userValid = false;
    let passValid = false;

    if (userInput.value !== "" && userInput.value.length == 14) {
        userValid = true;
    }

    if (userPass.value !== "" && userPass.value.length >= 8) {
        passValid = true;

    }

    if (userValid === false || passValid === false) {
        e.preventDefault();
        userPass.value = "";
    }
});