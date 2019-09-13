<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles.css">
    <title>Hobbies</title>
</head>
<body>
    <div id="container">
        <header>
            <h1>This is the Hobbies Page</h1>
            <h2>Below are things I do</h2>
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
        <aside id="hobbiesAside">
            <?php
                session_start();
                echo "<p id='logininfo'>You are logged in as " . $_SESSION["user"]. "</p>";
            ?>
            <p id="hiddenHobbies">This paragraph will be hidden. My hobbies range from the these and maybe more.</p>
            <ul><h3>Book series I've read or am reading</h3>
                <li>The Kingkiller Chronicle</li>
                <li>King's Dark Tidings</li>
                <li>Curse of the Gods</li>
                <li>The Stormlight Archive</li>
                <li>Soverign of the Seven Isles</li>
            </ul>
        </aside>
        <section id="hobbiesSection">
            <p>Hobbies...hobbies. Things we spend time on. Below are some of my hobbies.</p>
            <ol>Hobbies I enjoy
                <li>Games</li>
                <li>Books</li>
            </ol>

        </section>
        <footer>
            <p>My Site 2019</p>
        </footer>
    </div>
</body>
</html>