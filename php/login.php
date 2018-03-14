<?php
   session_start();
   include "includes/connect.php";
if(isset($_POST['submit'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];      
      $qry = 
      "SELECT email from users WHERE email='$email' and password='$password'";
      
      $result = mysqli_query($conn, $qry) or die ("Error inserting: ".$qry);
      
      if(mysqli_num_rows($result)>0) {
        $_SESSION['email'] = $email;
        
		   
      	header('location:addphoto.php');
      } else {
         echo "<p>INVALID CREDENTIALS</p>";
      }
     mysqli_close($conn);
 }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SignIn</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="main.css">
    </head>
    <body>
            <h1>Sign In</h1>
			<hr>
        <form classs="form" method="post" action="" >
            <div class="satya">
            
            <input class="defaultTextBox" type="email"  name="email" placeholder="Enter Email"><p></p>
            
            
            
            <input class="defaultTextBox" type="password" name="password"  placeholder="Enter Password"><p></p>
            
         
            <input id="123" class="button" type="submit" name="submit" value="SignIn">
            
        </form>
		</div>
        <!-- <pre><?php var_dump($_POST);?>  </pre> -->
    </body>
</html>