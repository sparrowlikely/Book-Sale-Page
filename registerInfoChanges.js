const form = document.getElementsByTagName('form')[0];
const phoneNumber = document.getElementById('userPhone');
const pass = document.getElementById('userPass');

const phoneError = document.querySelector('#phoneError');
const passError = document.querySelector('#passError');

// console.log(form);


function InfovalidateForm() {
    console.log('helloRegisterInfo');

    let passed = true;
    // resetting error messages when form tries to submit
    phoneError.innerHTML = "";
    passError.innerHTML = "";

    // PHONE NUMBER VALIDATION
    const patt3 = /^\(\d{3}\)\d{3}-\d{4}$/;
    if(!(patt3.test(phoneNumber.value))) {
        phoneError.innerHTML = "Incorrect format. The correct format is (555)555-5555";
        event.preventDefault();
        passed = false;
    }

    // PASSOWRD VALIDATION  
    if(pass.value.length < 8){
        passError.innerHTML = 'Too short of a password! Use at least 8 characters';
        event.preventDefault();
        passed = false;
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