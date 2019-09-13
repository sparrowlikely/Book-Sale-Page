const form = document.getElementsByTagName('form')[0];
const firstName = document.getElementById('userFName');
const lastName = document.getElementById('userLName');
const phoneNumber = document.getElementById('userPhone');
// updating comment to the current user input so it can't be constant
let comment = document.getElementById("userComment");
const email = document.getElementById('userEmail');
const nameError = document.querySelector('#nameError');
const commentError = document.querySelector('#commentError');
const phoneError = document.querySelector('#phoneError');
const emailError = document.querySelector('#emailError');

// console.log(form);

function makeJSON() {
    let myTemp;
    console.log('hi');
    let myJSON;
    // console.log($("input[name='genderChoice']:checked").val());

    // creating JSON object only if all validation passes as normal
    if(validateForm()== true){
        myTemp = {
            firstName: firstName.value,
            lastName: lastName.value,
            phoneNumber: phoneNumber.value,
            comment: comment.value,
            email: email.value,
            gender: $("input[name='genderChoice']:checked").val(),
            subscribe: $("input[name='subscribeChoice']:checked").val()
        }

        myJSON = JSON.stringify(myTemp);
        console.log(myJSON);

        $('#jsonErr').remove(); // remove the error message if it was there before and new valid info entered
        $('#jsonButton').after('<p id="jsonSuc">JSON object successfully created. </p>')
    }else{
        $("#jsonButton").append("<p id='jsonErr'>The form data is invalid, enter valid info for a json object to be created.</p>");
        $("#jsonSuc").remove();
    }

    
    return myJSON;
}
function validateForm() {
    let passed = true;
    // resetting error messages when form tries to submit
    nameError.innerHTML = "";
    phoneError.innerHTML = "";
    commentError.innerHTML = "";
    emailError.innerHTML = "";

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
    const patt3 = /\(\d{3}\)\d{3}-\d{4}/;
    if(!(patt3.test(phoneNumber.value))) {
        phoneError.innerHTML = "Incorrect format. The correct format is (555)555-5555";
        event.preventDefault();
        passed = false;
    }

    // EMAIL VALIDATION
    const patt4 = /.+@+.+\.+.+/;
    if(!(patt4.test(email.value))) {
        emailError.innerHTML = "Incorrect format. The correct format includes @ and . at least once";
        event.preventDefault();
        passed = false;
    }

    // COMMENT VALIDATION
    comment = document.getElementById("userComment");
    if(comment.value.length < 10){
        // telling user the input is wrong and preventng the form from submitting
        comment.style.marginBottom = "0"; // so the error message looks attached to the input boxed
        commentError.innerHTML = "Too short of a comment!";
        event.preventDefault();
        passed = false;

    }
    return passed;
    
}

// form.addEventListener('submit', function(event) {
//     comment = document.getElementById("userComment");
//     if(comment.value.length < 10){
//         // setting a customvalidity message makes the input invalid so i set that here
//         comment.setCustomValidity("Wrong input");
//         if(!comment.validity.valid) {
//             error.innerHTML = "Too short of a comment!";
//             event.preventDefault(); // doesn't let the form submit
//         }

//     }
//     else comment.setCustomValidity(""); // setting it to valid again so the form can submit

//     // comment.validity.valid = true;
    

// }, false);


