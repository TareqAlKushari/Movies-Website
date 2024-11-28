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

    $id = isset($_GET['do']) && is_numeric($_GET['do']) ? intval($_GET['do']) : 0;

    // Select all data depend on this ID

    $stmt = $con->prepare("SELECT * FROM movies WHERE ID = ? LIMIT 1");

    // Execute Query

    $stmt->execute(array($id));

    // Fetch The Data

    $movie = $stmt->fetch();
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
                <li><a href="index.php?#=latest">Latest Movies</a></li>
                <li><a href="index.php?#=popular">Popular Movies</a></li>
                <li><a href="index.php?#=contact">Contact Us</a></li>
            </ul>
        </nav>
    </header>
    <main class="movie">
        <section class="latest-movie">
            <?php echo "<h3>" . $movie['Name'] . "</h3>"; ?>
            <?php echo "<article class='content-movie'>"; ?>
                <?php echo "<div class='movie-card'>"; ?>
                    <?php echo "<img src='admin/uploads/images/" . $movie['Image'] . "' alt='Movie 1'>"; ?>
                    <?php echo "<p>" . $movie['Description'] . "</p>"; ?>
                <?php echo "</div>"; ?>
                <?php echo "<video controls>"; ?>
                    <?php echo "<source src='admin/uploads/video/" . $movie['Video'] . "' type='video/mp4'>"; ?>
                    Your browser does not support the video tag.
                <?php echo "</video>"; ?>
            <?php echo "</article>"; ?>
        </section>
    </main>
    <footer>
        <p>© 2024 Movie World. All Rights Reserved.</p>
    </footer>
    <script src="Layout/JavaScript/scripts.js"></script>
</body>
</html>
