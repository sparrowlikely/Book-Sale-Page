
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles.css">
    <title>Contact Me</title>
</head>
<body>
    <div id="container">
        <header>
            <h1>This is the Contact Page</h1>
            <h2>Send comments below or sign up for the newsletter</h2>
        </header>
        <nav >
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
            <p>This section might have my preferred method of contact and links to other platforms</p>
        </aside>
        <section>
            <p>Send me a comment below. This will hopefully actually send me your message automatically one day.</p>
            <form class=".form-control" onSubmit="validateForm()">
                <label for="userFName">Enter your first name:</label>
                <input type="text" name="fName" id="userFName" placeholder="John" required>
                <label for="userLName">Enter your last name:</label>
                <input type="text" name="lName" id="userLName" placeholder="Doe" required>
                <p id="nameError" class="error"></p>
                <label for="userPhone">Enter your phone number:</label>
                <input type="text" name="phone" id="userPhone" placeholder="why not" required>
                <p id="phoneError" class="error"></p>
                <label for="userComment">Enter a comment:</label>
                <input type="text" name="comment" id="userComment" placeholder="This will be sent to me" required>
                <p id="commentError" class="error"></p>

                <label for="userEmail">Enter your Email:</label>
                <input type="text" name="email" id="userEmail" placeholder="Used to comment" required>
                <p id="emailError" class="error"></p>
                <div>
                    What is your gender?
                    <input type="radio" name="genderChoice" id="male" value="male" required>
                    <label for="male">Male</label>
                    <input type="radio" name="genderChoice" id="female" value="female">
                    <label for="female">Female</label>
                    <input type="radio" name="genderChoice" id="other" value="other">
                    <label for="other">Other</label>
                </div>
                <div>
                    Subscribe to my newsletter?
                    <input type="radio" name="subscribeChoice" id="no" required>
                    <label for="no">No</label>
                    <input type="radio" name="subscribeChoice" id="yes">
                    <label for="yes">Yes</label>
                </div>
                <input type="submit" value="Submit">

                
                
            </form>
            <button id="jsonButton" onclick="makeJSON()">JSON</button>
        </section>
        <footer>
            <div class=".panel-footer"></div>
            <p>My Site 2019</p>
        </footer>
    </div>
    

    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="contactChanges.js"></script>
</body>
</html>