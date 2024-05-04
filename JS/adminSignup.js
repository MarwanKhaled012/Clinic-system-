let aID = document.querySelector('[name="aID"]');
let aName = document.querySelector('[name="aName"]');
let form100 = document.querySelector(".form100");
form100.addEventListener('submit', function(e) {
    let aIDValid = false;
    let aNameValid = false;

    if (aID.value !== "" && aID.value.length == 14) {
        aIDValid = true;
    }

    if (aName.value !== "") {
        aNameValid = true;

    }

    if (aIDValid === false || aNameValid === false) {
        e.preventDefault();

    }
});

let dID = document.querySelector('[name="dID"]');
let dName = document.querySelector('[name="dName"]');
let form1 = document.querySelector(".form1");
form1.addEventListener('submit', function(e) {
    let dIDValid = false;
    let dNameValid = false;

    if (dID.value !== "" && dID.value.length == 14) {
        dIDValid = true;
    }

    if (dName.value !== "") {
        dNameValid = true;

    }

    if (dIDValid === false || dNameValid === false) {
        e.preventDefault();

    }
});

let nID = document.querySelector('[name="nID"]');
let nName = document.querySelector('[name="nName"]');
let form2 = document.querySelector(".form2");
form2.addEventListener('submit', function(e) {
    let nIDValid = false;
    let nNameValid = false;

    if (nID.value !== "" && nID.value.length == 14) {
        nIDValid = true;
    }

    if (nName.value !== "") {
        nNameValid = true;

    }

    if (nIDValid === false || nNameValid === false) {
        e.preventDefault();

    }
});

let rID = document.querySelector('[name="rID"]');
let rName = document.querySelector('[name="rName"]');
let form3 = document.querySelector(".form3");
form3.addEventListener('submit', function(e) {
    let rIDValid = false;
    let rNameValid = false;

    if (rID.value !== "" && rID.value.length == 14) {
        rIDValid = true;
    }

    if (rName.value !== "") {
        rNameValid = true;

    }

    if (rIDValid === false || rNameValid === false) {
        e.preventDefault();

    }
});

let pID = document.querySelector('[name="pID"]');
let pName = document.querySelector('[name="pName"]');
let form4 = document.querySelector(".form4");
form4.addEventListener('submit', function(e) {
    let pIDValid = false;
    let pNameValid = false;

    if (pID.value !== "" && pID.value.length == 14) {
        pIDValid = true;
    }

    if (pName.value !== "") {
        pNameValid = true;

    }

    if (pIDValid === false || pNameValid === false) {
        e.preventDefault();

    }
});