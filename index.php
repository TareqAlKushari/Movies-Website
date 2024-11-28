<?php 
    session_start();

    $dsn = 'mysql:host=localhost;dbname=movies_db';
	$user = 'root';
	$pass = '';
	$option = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	);

	try {
		$con = new PDO($dsn, $user, $pass, $option);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	catch(PDOException $e) {
		echo 'Failed To Connect' . $e->getMessage();
	}
    

    $stmt_1 = $con->prepare("SELECT * FROM movies ORDER BY ID DESC");

    $stmt_1->execute();

    $movies = $stmt_1->fetchAll();

    $stmt_2 = $con->prepare("SELECT * FROM movies ORDER BY Rat DESC LIMIT 5");

    $stmt_2->execute();

    $popular = $stmt_2->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie World</title>
    <link rel="stylesheet" href="Layout/CSS/styles.css">
</head>
<body>
    <header>
        <h1>Movie World</h1>
        <nav>
            <ul class="nav-item">
                <li><a href="#latest">Latest Movies</a></li>
                <li><a href="#popular">Popular Movies</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav>
    </header>
    <aside>
        <h2>Upcoming Movies</h2>
        <ul>
            <li>Thunderbolts</li>
            <li>Jurassic World Rebirth</li>
            <li>Superman</li>
        </ul>
    </aside>
    <main>
        <section id="latest">
            <h2 class="title-text">Latest Movies</h2>
            <div class="content">
                <?php
                    foreach($movies as $movie) {
                        echo "<div class='latest-card'>";
                            echo "<div class='latest-image'>";
                                echo "<img src='admin/uploads/images/" . $movie['Image'] . "' alt='' />";
                            echo "</div>";
                            echo "<div class='latest-info'>";
                                echo "<strong class='latest-title'>";
                                    echo "<span>" . $movie['Name'] . "</span>";
                                    echo "<a class='more-details' href='movie.php?do=" . $movie['ID'] . "'>Watch</a>";
                                echo "</strong>";
                            echo "</div>";
                        echo "</div>";
                    }
                ?>
            </div>
        </section>
        <section id="popular">
            <h2 class="title-text">Popular Movies</h2>
            <table>
                <tr>
                    <th>Movie</th>
                    <th>Rating</th>
                </tr>
                <?php
                    foreach($popular as $p) {
                        echo "<tr>";
                            echo "<td>" . $p['Name'] . "</td>";
                            echo "<td>" . $p['Rat'] . "</td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </section>
        <section id="contact">
            <h2 class="title-text">Contact Us</h2>
            <p>Email: contact@movieworld.com</p>
        </section>
    </main>
    <footer>
        <p>© 2024 Movie World. All Rights Reserved.</p>
    </footer>
    <script src="Layout/JavaScript/scripts.js"></script>
</body>
</html>
