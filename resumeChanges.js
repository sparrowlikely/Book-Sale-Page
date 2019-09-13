let contact = document.getElementById('contactPage');
let work = document.getElementById('workPage');
let education = document.getElementById('educationPage');
let skills = document.getElementById('skillsPage');

// hiding the none clicked pages without messing with it's current classes
function showContact() {
    contact.classList.remove("hideNow");
    work.className +=" hideNow";
    education.className +=" hideNow";
    skills.className +=" hideNow";
}

function showWork() {
    contact.className +=" hideNow";
    work.classList.remove("hideNow");
    education.className +=" hideNow";
    skills.className +=" hideNow";
}

function showEducation() {
    contact.className +=" hideNow";
    work.className+=" hideNow";
    education.classList.remove("hideNow");
    skills.className +=" hideNow";
}

function showSkills() {
    contact.className +=" hideNow";
    work.className +=" hideNow";
    education.className +=" hideNow";
    skills.classList.remove("hideNow");
}

function changeBGColor() {
    document.body.style.backgroundColor = "gold";
}

function changeFont() {
    let newSize = document.getElementById('fontSizeChange').value;
    document.getElementById('section').style.fontSize = newSize+'px';
}
