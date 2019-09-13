<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles.css">
    <title>Book Sale</title>
</head>
<body>
<div id="container">
        <header>
            <h1>There are books for sale, for logged in users.</h1>
            <h2>You may now log in to buy books.</h2>
        </header>
        <nav>
            <a href="./home.php">Home</a> 
            <a href="./resume.php">Resume</a>
            <a href="./hobbies.php">Hobbies</a>
            <a href="./contact.php">Contact</a>
            <a href="./quiz.php">Quiz</a>
            <a href="./sell-books.php">Book Sale</a>
            <a href="./register.php">Register</a>

        </nav>
        <aside id="registerInfoAside">
        <?php
                session_start();
                if(empty($_SESSION["user"]))
                    echo "Login to the right:";
                else echo '<script type="text/javascript">',
                'window.location.href="sell-books.php"',
                '</script>';
            ?>
            
        </aside>
        <section id="registerInfoSection">
            <p>Log in below:</p>
            <form action="sell-booksLoggedIn.php" method="post" onSubmit="InfovalidateForm()">
                <label for="userPhone">Phone Number:</label>
                <input type="text" name="phone" id="userPhone" placeholder="(555)555-5555" required>
                <p id="phoneError" class="error"></p>
                <label for="userPass">Password:</label>
                <input type="text" name="pass" id="userPass" placeholder="catsdogs123" required>
                <p id="passError" class="error"></p>
                <input type="submit" value="Submit">
            </form>
        </section>
        <footer>
            <p>My Site 2019</p>
        </footer>
    </div>
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="registerInfoChanges.js"></script>
</body>
</html>
