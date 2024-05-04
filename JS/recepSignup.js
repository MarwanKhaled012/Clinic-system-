let userID = document.querySelector('[name="pID"]');
let username = document.querySelector('[name="pName"]');
let form = document.querySelector(".form11");
form.addEventListener('submit', function(e) {
    let idValid = false;
    let nameValid = false;

    if (userID.value !== "" && userID.value.length == 14) {
        idValid = true;
    }

    if (username.value !== "") {
        nameValid = true;

    }

    if (idValid === false || nameValid === false) {
        e.preventDefault();
        username.value = "";
    }
});