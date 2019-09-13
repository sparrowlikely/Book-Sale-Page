<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles.css">
    <title>Registered</title>
</head>
<body>
    <?php
        // echo $_POST["fName"];
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

        foreach ($_POST as $value){
            echo $value;
        }
        $sql ="INSERT INTO users (firstname, lastname, phonenumber, age, email, password) 
        VALUES ('".$_POST["fName"]."', '".$_POST["lName"]."', '".$_POST["phone"]."', '".$_POST["age"]."', '".$_POST["email"]."', '".$_POST["pass"]."')";
        if ($conn->query($sql) === TRUE) {
            $prompt = "You have been registered as a user.";
            echo "<script type='text/javascript'>alert('$prompt');</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    ?>

    <div id="container">
        <header>
            <h1>Welcome to my website, registered user.</h1>
            <h2>You may now log in or continue to peruse around.</h2>
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
        <aside id="registerInfoAside">
            <p>You have been registered. Login to the right: </p>
        </aside>
        <section id="registerInfoSection">
            <p>Log in below:</p>
            <form action="registerLogin.php" method="post" onSubmit="InfovalidateForm()">
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