let numCorrect = 0;
let correctForq1 = 'q1a2';
let correctForq2 = 'q2a1';
let correctForq3 = 'q3a2';
let correctForq4 = 'q4a3';
let correctForq5 = 'q5a3';

$(document).ready(function(){
    $('#question1').siblings().hide();
})

function checkCorrect( questionNum ) {
    // passing in the question number as a variable and evaling that to a variable setup here to see if the correct answer for that question was checked
    if(document.getElementById(eval('correctFor'+questionNum)).checked){
        console.log('correct')
        numCorrect +=1;
        console.log(numCorrect)

    }

    // disabling the submit button once the user has clicked it once, no second chances on quizes
    document.getElementById(questionNum+'Button').onclick= function(){
        this.disabled = true;
    }

    // finishing if this is question 5
    if(questionNum === 'q5') {
        $('#quizSection').append(`<p>Your score is: ${numCorrect}</p>`)

        $('#quizSection').append('<p style="color: white; background-color: red">Q1: 116, Q2: 1968, Q3: Babylon, Q4: Bikini, Q5: Juan Sebastian Elcano</p>')
        
        Array.from(document.getElementsByTagName('button')).forEach( el => {
            el.onclick= function(){
                this.disabled = true;
        
            }})
    }

}


function showNext( thisQuestion ) {
    $('#'+thisQuestion).next().show();
}

function showNext(submitId, thisQuestion ) {
    $('#'+thisQuestion).next().show();
    document.getElementById(submitId).onclick= function(){
        this.disabled = true;
    }

    // finishing if this is question 5
    if(submitId === 'q5Button') {

        $('#quizSection').append(`<p>Your score is: ${numCorrect}</p>`)

        $('#quizSection').append('<p style="color: white; background-color: red">Q1: 116, Q2: 1968, Q3: Babylon, Q4: Bikini, Q5: Juan Sebastian Elcano</p>')

        Array.from(document.getElementsByTagName('button')).forEach( el => {
            el.onclick= function(){
                this.disabled = true;
        
            }})
    }

}

function showAll(){
    $('#quizSection').children().show();
    $('#quizSection').append('<p style="color: white; background-color: red">Q1: 116, Q2: 1968, Q3: Babylon, Q4: Bikini, Q5: Juan Sebastian Elcano</p>')


    // turning off all buttons if answers are requested by user
    Array.from(document.getElementsByTagName('button')).forEach( el => {
        el.onclick= function(){
            this.disabled = true;
    
        }})
        $('#quizSection').append(`<p>Your score is: ${numCorrect}</p>`)
}
