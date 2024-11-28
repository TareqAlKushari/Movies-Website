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

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        echo "<h1 class='text-center'>Inserting movie</h1>";
        echo "<div class='container'>";

        // Upload Variables

        $images = $_FILES['image'];

        $imageName 	= $_FILES['image']['name'];
        $imageSize 	= $_FILES['image']['size'];
        $imageTmp 	= $_FILES['image']['tmp_name'];
        $imageType 	= $_FILES['image']['type'];

        $videos = $_FILES['video'];

        $videoName 	= $_FILES['video']['name'];
        $videoSize 	= $_FILES['video']['size'];
        $videoTmp 	= $_FILES['video']['tmp_name'];
        $videoType 	= $_FILES['video']['type'];

        // List Of Allowed File Typed To Upload

        $imageAllowedExtension = array("jpeg", "jpg", "png", "gif");

        // Get Image Extension

        $imageExtension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION ));

        $videoExtension = strtolower(pathinfo($videoName, PATHINFO_EXTENSION ));

        // Get Variables From The Form

        $name 			= $_POST['name'];
        $rat 			= (float)$_POST['rat'];
        $desc 			= $_POST['description'];
        

        // Check if There's No Error Proceed the Update Operation 
        if (!empty($imageName) && !empty($videoName)) {

            $image = rand(0, 10000000) . '_' . $imageName;

            move_uploaded_file($imageTmp, "uploads\images\\" . $image);

            $video = rand(0, 10000000) . '_' . $videoName;

            move_uploaded_file($videoTmp, "uploads\\video\\" . $video);

            // Insert Userinfo In Database

            $stmt = $con->prepare("INSERT INTO 
                                    movies(Name, Image, Video, Rat, Description)
                                    VALUES(:zname, :zimage, :zvideo, :zrat, :zdesc)");
            $stmt->execute(array(
                'zname' 		=> $name,
                'zimage'		=> $image,
                'zvideo'		=> $video,
                'zrat' 		    => $rat,
                'zdesc' 		=> $desc  
            ));

        } 
        
    }
    echo "</div>"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie World</title>
    <link rel="stylesheet" href="layout/CSS/styles.css">
</head>
<body>
    <h1 class="text-center">Add movie</h1>
    <div class="container works-add">
        <form class="add" action="" method="POST" enctype="multipart/form-data">
            <!-- Start Name Field -->
            <div class="form-group">
                <label class="control-label">Name</label>
                <input 
                    type="text" 
                    name="name" 
                    class="form-control" 
                    required="required" 
                    placeholder="" />
            </div>
            <!-- End Name Field -->
            <!-- Start Image Field -->
            <div class="form-group">
                <label class="control-label">Image</label>
                <input 
                    type="file" 
                    name="image" 
                    class="form-control" />
            </div>
            <!-- End Image Field -->
            <!-- Start Video Field -->
            <div class="form-group">
                <label class="control-label">Video</label>
                <input 
                    type="file" 
                    name="video" 
                    class="form-control" />
            </div>
            <!-- End Video Field -->
            <!-- Start Add Rat Field -->
            <div class="form-group">
                <label class="control-label">Rat</label>
                <input 
                    type="text" 
                    name="rat" 
                    class="form-control" />
            </div>
            <!-- End Add Date Field -->
            <!-- Start Description Field -->
            <div class="form-group">
                <label class="control-label">Description</label>
                <input 
                    type="text" 
                    name="description" 
                    class="form-control"
                    placeholder="" />
            </div>
            <!-- End Description Field -->
            <!-- Start Submit Field -->
            <div class="form-group">
                <div class="">
                    <input type="submit" value="Add" class="btn btn-primary btn-sm">
                </div>
            </div>
            <!-- End Submit Field -->
        </form>
    </div>
    <script src="layout/JavaScript/scripts.js"></script>
</body>
</html>