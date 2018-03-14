<?php
include "includes/connect.php";
session_start();
if(isset($_POST['submit'])){
    $photoname=$_POST['photoname'];
    $filetmp=$_FILES["image"]["tmp_name"];
    $filename=$_FILES["image"]["photoname"];
    move_uploaded_file($filetmp,"images/".$filename);
    $qry="INSERT INTO `photos` (`photoname`,`photo`) VALUES ('$photoname','$filename');";
    mysqli_query($conn,$qry) or die("connection failed:". mysqli_error($conn));  	
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Photo</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
</head>

<body>

            <h1>Welcome <?php echo $_SESSION['email'];?> Add photo </h1>
			<hr>
			<div class="satya">
        <form class="form" method='post' action="" enctype="multipart/form-data">
                <input type="text" class="defaultTextBox" placeholder="Enter Photo Name" name="photoname"><p></p>       
                <input type="file"  name="image" ><p></p>        
                <input type="submit" class="button" name="submit" value="Add Photo" ><p></p>
			  <a class="chinna" href="photofeed.php"> Display Images </a><p></p><a class="chinna" href="logout.php"> Logout </a>
			 
        </form>
    </div>
</body>
</html>