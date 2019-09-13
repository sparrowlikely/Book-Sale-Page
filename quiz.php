<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles.css">
    <title>Quiz</title>
</head>
<body>
    <div id="container">
        <header>
            <h1>This is the Quiz Page</h1>
            <h2>Good luck on the quiz!</h2>
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
        <aside id="quizAside">
            <?php
                session_start();
                echo "<p id='logininfo'>You are logged in as " . $_SESSION["user"]. "</p>";
            ?>
            <p>This is the history quiz page</p>
        </aside>
        <section id="quizSection">
            <p>History questions below.</p>
            <div id="question1">
            <p>How many years did the 'One Hundred Years War' last?</p> 
                <input type="radio" name="questionOne" id="q1a1" value="a1" required>
                <label for="male">100</label>
                <input type="radio" name="questionOne" id="q1a2" value="a2">
                <label for="female">116</label>
                <input type="radio" name="questionOne" id="q1a3" value="a3">
                <label for="other">101</label>
                <button id="q1Button" onclick="checkCorrect('q1')">Submit</button>
                <button onclick="showNext('q1Button','question1')">Next</button>
                <button onclick="showNext('q1Button','question1')">Skip</button>
                <button onclick="showAll()">Answer</button>    
            </div>
            
            <div id="question2">
            <p>In which year was JFK assassinated?</p>
                <input type="radio" name="questionTwo" id="q2a1" required>
                <label for="male">1963</label>
                <input type="radio" name="questionTwo" id="a2a2">
                <label for="female">1968</label>
                <input type="radio" name="questionTwo" id="q3a3">
                <label for="other">1962</label>
                <button id="q2Button" onclick="checkCorrect('q2')">Submit</button>
                <button onclick="showNext('q2Button','question2')">Next</button>
                <button onclick="showNext('q2Button','question2')">Skip</button>
                <button onclick="showAll()">Answer</button>    
            </div>
            

            <div id="question3">
            <p>One of the ancient world wonders, the 'Hanging Gardens', was found in which city?</p>
                <input type="radio" name="questionThree" id="q3a1" required>
                <label for="male">Athens</label>
                <input type="radio" name="questionThree" id="q3a2">
                <label for="female">Babylon</label>
                <input type="radio" name="questionThree" id="q3a3">
                <label for="other">Rome</label>
                <button id="q3Button" onclick="checkCorrect('q3')">Submit</button>
                <button onclick="showNext('q3Button','question3')">Next</button>
                <button onclick="showNext('q3Button','question3')">Skip</button>
                <button onclick="showAll()">Answer</button>    
            </div>    
            
            
            <div id="question4">
            <p>What was named after a hydrogen bomb test?</p>
                <input type="radio" name="questionFour" id="q4a1" required>
                <label for="male">Spitfire</label>
                <input type="radio" name="questionFour" id="q4a2">
                <label for="female">Hula Hoop</label>
                <input type="radio" name="questionFour" id="q4a3">
                <label for="other">Bikini</label>
                <button id="q4Button" onclick="checkCorrect('q4')">Submit</button>
                <button onclick="showNext('q4Button','question4')">Next</button>
                <button onclick="showNext('q4Button', 'question4')">Skip</button>
                <button onclick="showAll()">Answer</button>    
            </div>
            
            <div id="question5">
            <p>Which explorer was the first to circumnavigate the globe?</p>
                <input type="radio" name="questionFive" id="q5a1" required>
                <label for="male">Columbus</label>
                <input type="radio" name="questionFive" id="q5a2">
                <label for="female">Marco polo</label>
                <input type="radio" name="questionFive" id="q5a3">
                <label for="other">Juan Sebastian Elcano</label>
                <button id="q5Button" onclick="checkCorrect('q5')">Submit</button>
                <button onclick="showNext('q5Button', 'question4')">Skip</button>
                <button onclick="showAll()">Answer</button>    
            </div>
            
        </section>
        <footer>
            <p>My Site 2019</p>
        </footer>
    </div>

    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="quizChanges.js"></script>
</body>
</html>