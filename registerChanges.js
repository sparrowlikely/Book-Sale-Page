const form = document.getElementsByTagName('form')[0];
const firstName = document.getElementById('userFName');
const lastName = document.getElementById('userLName');
const phoneNumber = document.getElementById('userPhone');
// updating comment to the current user input so it can't be constant
let age = document.getElementById("userAge");
const email = document.getElementById('userEmail');
const pass = document.getElementById('userPass');
const passcheck = document.getElementById('userPasscheck');

const nameError = document.querySelector('#nameError');
const ageError = document.querySelector('#ageError');
const phoneError = document.querySelector('#phoneError');
const emailError = document.querySelector('#emailError');
const passError = document.querySelector('#passError');
const passcheckError = document.querySelector('#passcheckError');

// console.log(form);


function validateForm() {
    console.log('helloRegister');

    let passed = true;
    // resetting error messages when form tries to submit
    nameError.innerHTML = "";
    phoneError.innerHTML = "";
    ageError.innerHTML = "";
    emailError.innerHTML = "";
    passError.innerHTML = "";
    passcheckError.innerHTML = "";

    // FIRST AND LAST NAME VALIDATION

    
    console.log(firstName.value);
    const patt1 = /[^a-zA-Z]+/; // pattern for everything but letters
    if(((firstName.value.search(patt1)) > -1) || ((lastName.value.search(patt1)) > -1)) {
        nameError.innerHTML = "First and Last name must be alphabetical only.";
        event.preventDefault();
        passed = false;
    }

    const patt2 = /^[A-Z].*/;
    if(!(patt2.test(firstName.value) && patt2.test(lastName.value))) {
        nameError.innerHTML = "The first letter of either name must be capital.";
        event.preventDefault();
        passed = false;
    }

    if(firstName.value === lastName.value) {
        nameError.innerHTML = "The first and last name's cannot be the same.";
        event.preventDefault();
        passed = false;
    }

    // PHONE NUMBER VALIDATION
    const patt3 = /^\(\d{3}\)\d{3}-\d{4}$/;
    if(!(patt3.test(phoneNumber.value))) {
        phoneError.innerHTML = "Incorrect format. The correct format is (555)555-5555";
        event.preventDefault();
        passed = false;
    }

    // EMAIL VALIDATION
    const patt4 = /.+@+.+\.edu/;
    if(!(patt4.test(email.value))) {
        emailError.innerHTML = "Incorrect format. The correct format includes @ and .edu";
        event.preventDefault();
        passed = false;
    }

    // PASSOWRD VALIDATION  
    if(pass.value.length < 8){
        passErorr.innerHTML = 'Too short of a password! Use at least 8 characters';
        event.preventDefault();
        passed = false;
    }

    if(pass.value !== passcheck.value) {
        passcheckError.innerHTML = 'The passwords must be the same.'
        event.preventDefault();
        passed= false;
    }
    // Comment VALIDATION
    // comment = document.getElementById("userComment");
    // if(comment.value.length < 10){
    //     // telling user the input is wrong and preventng the form from submitting
    //     comment.style.marginBottom = "0"; // so the error message looks attached to the input boxed
    //     commentError.innerHTML = "Too short of a comment!";
    //     event.preventDefault();
    //     passed = false;

    // }
    
    return passed;
    
    
}