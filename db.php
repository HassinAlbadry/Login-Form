<?php // this page sends a pin code to the user email for the forgot password feature.
    session_start();

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

	if(isset($_POST['verify'])){

	$email=test_input($_POST['verify']);
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

	$sql = "SELECT  email FROM users WHERE email='$email' ";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  	$random= rand(1000,9000);
    $_SESSION['random']=$random;
    $_SESSION['email']=$email;
    $to = $email;
 	$subject = "Your Authentication Code";
 	$txt = $random;
 	$headers = "From: jasem.hassin@gmail.com" . "\r\n";
 	mail($to,$subject,$txt,$headers); 

	header("Location: http://loginform/verificationCode.php"); 
   
 

} else {
  echo "Your email is not registered. Your will be redirected to sign up page.";
  header( "refresh:5;url= http://loginform/signup.php" );
}
$conn->close();

}

?>


