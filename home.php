<!DOCTYPE html>
<html lang="en">
<head>
    <!--these meta tags are automatically added by the VS Code text editor I used-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles.css">
    <title>Home</title>
</head>
<body>
    <div id="container">
        <header>
            <h1>Omar Cecenas</h1>
            <h2>Welcome to my personal website</h2>
            <h2>This is the <em>Homepage</em></h1>
            <h3>~Enjoy your stay~</h3>
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
        <!-- Here are the two main parts of the page: the side and main sections where content will be displayed-->
        <aside>
            <?php
                session_start();
                echo "<p id='logininfo'>You are logged in as " . $_SESSION["user"]. "</p>";
            ?>
            <dl>
                <dt>This website:</dt>
                <dd>A potential future personal page</dd>
                <dt>What will go below:</dt>
                <dd>A description of my professional interests</dd>
            </dl>
            <p>For now I can definitely add web development to my professional interests. Other general software engineering is also an interest.</p>
        </aside>
        <section>
            <p id="timeDisplay"></p>
            <img src="img1.jpg" alt="a beach" height="auto" width="300">
            <p>Above is a beach<span id="iThink"> I think</span>. A representation of the ultimate goal. Relaxation and freedom to explore. Would software engineering of any kind allow for such a lifestyle? Maybe. We'll see. This section will probably be replace with a portfolio section in future versions if I keep this as a personal website. </p>
            <p>Good destinations below:</p>
            <table border="1">
                <th>Amsertdam</th>
                <th>Tokyo</th>
                <th>Seoul</th>
                <tr>
                    <td class ="titem">Amsterdam is the Netherlands’ capital, known for its artistic heritage, elaborate canal system and narrow houses with gabled facades, legacies of the city’s 17th-century Golden Age. Its Museum District houses the Van Gogh Museum, works by Rembrandt and Vermeer at the Rijksmuseum, and modern art at the Stedelijk. Cycling is key to the city’s character, and there are numerous bike paths.</td>
                    <td class ="titem">Tokyo, Japan’s busy capital, mixes the ultramodern and the traditional, from neon-lit skyscrapers to historic temples. The opulent Meiji Shinto Shrine is known for its towering gate and surrounding woods. The Imperial Palace sits amid large public gardens. The city's many museums offer exhibits ranging from classical art (in the Tokyo National Museum) to a reconstructed kabuki theater (in the Edo-Tokyo Museum).</td>
                    <td class ="titem">Seoul, the capital of South Korea, is a huge metropolis where modern skyscrapers, high-tech subways and pop culture meet Buddhist temples, palaces and street markets. Notable attractions include futuristic Dongdaemun Design Plaza, a convention hall with curving architecture and a rooftop park; Gyeongbokgung Palace, which once had more than 7,000 rooms; and Jogyesa Temple, site of ancient locust and pine trees.</td>
                </tr>
            </table>
        </section>
        <footer>
            <p>My Site 2019</p>
        </footer>
    </div>

    <script src="homeChanges.js"></script>
</body>
</html>