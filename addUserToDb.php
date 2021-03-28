<?php 
// this page will add new users to database by signup feature.
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


$fname = test_input($_POST['fname']);
$lname = test_input($_POST['lname']);
$pswrd=test_input($_POST['password']);
$email=test_input($_POST['email']);
$uname=$fname.' '.$lname;

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

$sql = "INSERT INTO users (firstname, lastname,username,email,password )
VALUES ('$fname','$lname','$uname','$email','$pswrd')";

if ($conn->query($sql) === TRUE) {
  echo "Congrats! redirecting to login page in 5 seconds";
  header( "refresh:5;url= http://loginform/login.php" );
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>