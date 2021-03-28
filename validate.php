<?php
session_start();

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

 $fname = test_input($_POST['fname']);
 $lname = test_input($_POST['lname']);


 if($fname=='Hassin'&&$lname=='Albadry'){
	$_SESSION["firstName"] = $fname;
	$_SESSION["lastName"] = $lname;
	header("Location: http://loginform/loggedIn.php"); 

 }
 else{
   echo "your username or password is not correct, you will be redirected to login page.";
   header( "refresh:5;url= http://loginform/login.php" );


 }


?>