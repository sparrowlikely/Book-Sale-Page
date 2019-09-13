<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="./styles.css">
    <title>Book Sale</title>
</head>
<body>
    <div id="container">
        <header>
            <h1>This is the Sell-Books Page</h1>
            <h2>Buy from my catalog of books.</h2>
        </header>
        <nav class="nav nav-pills">
            <a href="./home.php">Home</a> 
            <a href="./resume.php">Resume</a>
            <a href="./hobbies.php">Hobbies</a>
            <a href="./contact.php">Contact</a>
            <a href="./quiz.php">Quiz</a>
            <a href="./sell-books.php">Book Sale</a>
            <a href="./register.php">Register</a>

        </nav>
        <aside>
            <?php
                session_start();
                echo "<p id='logininfo'>You are logged in as " . $_SESSION["user"]. "</p>";

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
                $sql = "CREATE TABLE books (
                Bookid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                Title VARCHAR(30) NOT NULL,
                Author VARCHAR(30) NOT NULL,
                Edition VARCHAR(10) NOT NULL,
                Year INT(4) NOT NULL,
                Price FLOAT(6,2) NOT NULL,
                Quantity INT(4) NOT NULL
                
                )";
                if ($conn->query($sql) === TRUE) {
                    echo "Table books created successfully";
                } else {
                    echo "Error creating table: " . $conn->error;
                }
                
                // SQL TO INSERT BOOKS
                // $sql = "INSERT INTO books (Title, Author, Edition, Year, Price, Quantity, Picture) Values ('The Biology Coloring Book', 'Robert D. Griffin', '1st', '1986', '16', '10');";
                // $sql2 ="SELECT * FROM books WHERE Edition = '1st'";

                // $result = $conn->query($sql);
                // $row = $result->fetch_assoc();
                // echo "author: " . $row["Author"];
                // if ($conn->query($sql) === true) {
                //     echo "Inserted successfully";
                // } else {
                //     echo "Error inserting: " . $conn->error;
                // }

                $conn->close();
            ?>
            <p>Books are for sale</p>
            
        </aside>
        <section id="section">
            <h2 id=bookstoreTitle>This is my personal, prestigious bookstore. Limited stock of 10 books.</h2>
            <button id='addCart' onclick='fillCart()'>Add Selected books to Cart</button>
            <button id='showCart' onclick='displayCart()'>Display your Cart</button>
            <div id='cartContainer'></div>
            <div id='bookContainer'>
                <div class= 'book' id="book1">
                    <div>
                        <input onclick='opacity("select1")' type="radio" name="s1" id="select1" >
                        <label for="select1">Select this book</label>
                    </div>
                        
                </div>
                <div class= 'book' id="book2">
                    <div>
                        <input onclick='opacity("select2")' type="radio" name="s2" id="select2" >
                        <label for="select2">Select this book</label>
                    </div>
                </div>
                <div class= 'book' id="book3">
                    <div>
                        <input onclick='opacity("select3")' type="radio" name="s3" id="select3" >
                        <label for="select3">Select this book</label>
                        
                    </div>
                </div>
                <div class= 'book' id="book4">
                    <div>
                        <input onclick='opacity("select4")' type="radio" name="s4" id="select4" >
                        <label for="select4">Select this book</label>
                        
                    </div>
                </div>
                <div class= 'book' id="book5">
                    <div>
                        <input onclick='opacity("select5")' type="radio" name="s5" id="select5" >
                        <label for="select5">Select this book</label>
                        
                    </div>
                </div>
                <div class= 'book' id="book6">
                    <div>
                        <input onclick='opacity("select6")' type="radio" name="s6" id="select6" >
                        <label for="select6">Select this book</label>
                        
                    </div>
                </div>
                <div class= 'book' id="book7">
                    <div>
                        <input onclick='opacity("select7")' type="radio" name="s7" id="select7" >
                        <label for="select7">Select this book</label>
                        
                    </div>
                </div>
                <div class= 'book' id="book8">
                    <div>
                        <input onclick='opacity("select8")' type="radio" name="s8" id="select8" >
                        <label for="select8">Select this book</label>
                        
                    </div>
                </div>
                <div class= 'book' id="book9">
                    <div>
                        <input onclick='opacity("select9")' type="radio" name="s9" id="select9" >
                        <label for="select9">Select this book</label>
                        
                    </div>
                </div>
                <div class= 'book' id="book10">
                    <div>
                        <input onclick='opacity("select10")' type="radio" name="s10" id="select10" >
                        <label for="select10">Select this book</label>
                        
                    </div>
                </div>

                <!-- <span id="book1"></span>
                <span id="book2"></span>
                <span id="book3"></span>
                <span id="book4"></span>
                <span id="book5"></span>
                <span id="book6"></span>
                <span id="book7"></span>
                <span id="book8"></span>
                <span id="book9"></span>
                <span id="book10"><span> -->
                
            </div>

            <br>

            <div>
                <p id="XMLdemo"></p>
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
    <script src="sellbooksChanges.js"></script>
</body>
</html>