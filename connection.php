<?php 
session_start();

if(isset($_POST['uname']) && isset($_POST['password'])){

	function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

   $uname= test_input($_POST['uname']);
   $pswrd= test_input($_POST['password']);

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "users";

// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
	if ($conn->connect_error) {
  		die("Connection failed: " . $conn->connect_error);
		}

	$sql = "SELECT  firstname, lastname FROM users WHERE username='$uname' AND password='$pswrd'";
    $result = $conn->query($sql);


if ($result->num_rows > 0) {

    $_SESSION["uname"] = $uname;
	$_SESSION["pswrd"] = $pswrd;
	header("Location: http://loginform/loggedIn.php");   

} else {
  echo "your username or password is not correct, you will be redirected to login page.";
   header( "refresh:5;url= http://loginform/login.php" );
}
$conn->close();



}
?>

