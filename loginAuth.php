<?php 

//this page validate form data and compare it to db if user exist will direct to loggeddin page if not will go back to login page.
session_start();   

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if(isset($_POST['email']) && isset($_POST['password'])){
   $email= test_input( $_POST['email']);
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

	$sql = "SELECT  firstname, lastname FROM users WHERE email='$email' AND password='$pswrd'";
    $result = $conn->query($sql);
     

if ($result->num_rows > 0) {
   
  while($row = $result->fetch_assoc()) {
        $_SESSION["username"]= $row["firstname"]. " " . $row["lastname"];
    }
    
    $_SESSION["email"] = $email;
	$_SESSION["pswrd"] = $pswrd;
	header("Location: http://loginform/loggedIn.php");   

} else {
  echo "your username or password is not correct, you will be redirected to login page.";
   header( "refresh:5;url= http://loginform/login.php" );
}
$conn->close();



}
?>

