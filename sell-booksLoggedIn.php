<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles.css">
    <title>Logged in</title>
</head>
<body>
    
    <div id="container">
        <header>
            <h1>Welcome to my website, you are now logged in.</h1>
            <h2>Logged in users are privileged. The shop is now available</h2>
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
        <aside id="registerLoginAside">
            <p>You are logged in.</p>
        </aside>
        <section id="registerLoginSection">
            <!-- <p>You are now Logged in.</p> -->
            <?php
                $servername = "127.0.0.1";
                $username = "root";
                $password = "";
                $dbname = "myDB";
        
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
                $phoneNum = $_POST['phone'];
                $pass = $_POST['pass'];
                // check if the phonenumber is registered

                $sql ="SELECT * FROM users WHERE phonenumber = '".$phoneNum."'";
                $result = $conn->query($sql);
                $sql2 = "SELECT * FROM users WHERE password = '".$pass."'";
                $result2 = $conn->query($sql2);
                if (mysqli_num_rows($result)>=1 && mysqli_num_rows($result2)>=1) {
                    echo "You are now logged in as " . $_POST["phone"];
                    session_start();
                    $_SESSION["user"] = $phoneNum;
                    echo "<form action='sell-books.php'>
                        <button type='submit'>Continue to the book shop.</button>
                    </form>";
                } else {
                    echo "Error: the phonenumber or password are not valid";
                    echo `<button onclick='window.location.href="sell-booksLogin.php";'>Try Again</button>` ;
                }
            
            ?>
        </section>
        <footer>
            <p>My Site 2019</p>
        </footer>
    </div>
</body>
</html>