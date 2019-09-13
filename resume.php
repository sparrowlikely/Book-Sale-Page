<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles.css">
    <title>Resume</title>
</head>
<body>
    <div id="container">
        <header>
            <h1>This is the Contact Page</h1>
            <h2>Send comments below or sign up for the newsletter</h2>
        </header>
        <nav>
            <a href="./home.php">Home</a> 
            <a href="./resume.php">Resume</a>
            <a href="./hobbies.php">Hobbies</a>
            <a href="./contact.php">Contact</a>
            <a href="./quiz.php">Quiz</a>
            <a href="./sell-booksLogin.php">Book Sale</a>
            <a href="./register.php">Register</a>

        </nav>
        <aside>
            <?php
                session_start();
                echo "<p id='logininfo'>You are logged in as " . $_SESSION["user"]. "</p>";
            ?>
            <p>Click below for <strong>resume information.</strong></p>
            <div id="resumeMenu">
                <a href="#" onclick="showContact()">Contact Information</a>
                <a href="#" onclick="showWork()">Work Experience</a>
                <a href="#" onclick="showEducation()">Education</a>
                <a href="#" onclick="showSkills()">Skills</a>
            </div>
        </aside>
        <section id="section">
            <p>You can change the font size of this resume and the background color of this website below.</p>
            Enter a font size number: <input type="text" id="fontSizeChange"> 
            <button id="fontChange" onclick="changeFont()">Submit font change</button>
            <div><button onclick="changeBGColor()" id="colorChange">Change color to gold.</button></div>
            <!-- <p>Exercitation aliquip magna commodo officia amet ex ipsum ad nulla. <img src="img2.jpg" alt="a beach" id="beachHouse" height="auto" width="200"> Dolore qui officia consectetur officia excepteur incididunt veniam ea est incididunt in quis deserunt ullamco. Id do fugiat amet nisi voluptate nisi adipisicing. Cupidatat ipsum minim ipsum adipisicing.</p> -->
            <p id="resumePar">Resume info below.</p>
            <div class="hideNow resumeInfo" id="contactPage" >
                <p>Contact Stuff here</p>
            </div>
            <div class="hideNow resumeInfo" id="workPage" >
                <p>Work stuff here</p>
            </div>
            <div class="hideNow resumeInfo" id="educationPage" >
                <p>Education stuff here</p>
            </div>
            <div class="hideNow resumeInfo" id="skillsPage" >
                <p>Skills stuff here</p>
            </div>
        </section>
        <footer>
            <p>My Site 2019</p>
        </footer>
    </div>

    <script src="resumeChanges.js"></script>
</body>
</html>