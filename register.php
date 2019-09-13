
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles.css">
    <title>Register Here</title>
</head>
<body>
<div id="container">
        <header>
            <h1>This is the Register Page</h1>
            <h2>Register as a user to my website.</h2>
        </header>
        <nav>
            <a href="./home.php">Home</a> 
            <a href="./resume.php">Resume</a>
            <a href="./hobbies.php">Hobbies</a>
            <a href="./contact.php">Contact</a>
            <a href="./quiz.php">Quiz</a>
            <a href="./sell-booksLogin.php">Book Sale</a>
            <a href="./register.php">Register</a>
            <!-- <a href="./registerInfo.php">RegisterInf</a> -->

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
            <form action="registerInfo.php" method="post" onSubmit="validateForm()">
                <label for="userFName">Enter your first name:</label>
                <input type="text" name="fName" id="userFName" placeholder="John" required>
                <label for="userLName">Enter your last name:</label>
                <input type="text" name="lName" id="userLName" placeholder="Doe" required>
                <p id="nameError" class="error"></p>
                <label for="userPhone">Enter your phone number:</label>
                <input type="text" name="phone" id="userPhone" placeholder="why not" required>
                <p id="phoneError" class="error"></p>
                <label for="userAge">Enter your age:</label>
                <input type="number" name="age" id="userAge" placeholder="18" required>
                <p id="ageError" class="error"></p>

                <label for="userEmail">Enter your Email:</label>
                <input type="text" name="email" id="userEmail" placeholder="Used to comment" required>
                <p id="emailError" class="error"></p>

                <label for="userPass">Enter a password:</label>
                <input type="text" name="pass" id="userPass" placeholder="catsdogs123" required>
                <p id="passError" class="error"></p>
                <label for="userPasscheck">Re-enter your password:</label>
                <input type="text" name="passcheck" id="userPasscheck" placeholder="catsdogs123" required>
                <p id="passcheckError" class="error"></p>
                <input type="submit" value="Submit">

                
                
            </form>
        </section>
        <footer>
            <p>My Site 2019</p>
        </footer>
    </div>

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
        // echo "Connected successfully";

        // sql to create table
        // $sql = "CREATE TABLE users (
        // id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        // firstname VARCHAR(30) NOT NULL,
        // lastname VARCHAR(30) NOT NULL,
        // phonenumber VARCHAR(25) NOT NULL,
        // age INT(4) NOT NULL,
        // email VARCHAR(50) NOT NULL,
        // password VARCHAR(50) NOT NULL,
        // reg_date TIMESTAMP
        // )";

        // echo $_POST['fName'];
        // if ($conn->query($sql) === TRUE) {
        //     echo "Table users created successfully";
        // } else {
        //     echo "Error creating table: " . $conn->error;
        // }
        // Create database
        // $sql = "CREATE DATABASE myDB";
        // if ($conn->query($sql) === TRUE) {
        //     echo "Database created successfully";
        // } else {
        //     echo "Error creating database: " . $conn->error;
        // }

        $sql2 ="SELECT * FROM users WHERE phonenumber = '(444)555-6666'";

                $result = $conn->query($sql2);
                $row = $result->fetch_assoc();
                echo "phone: " . $row["firstname"];

                // if ($conn->query($sql) === true) {
                //     echo "Inserted successfully";
                // } else {
                //     echo "Error inserting: " . $conn->error;
                // }


        $conn->close();
    
    ?>
    

    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="registerChanges.js"></script>
</body>
</html>