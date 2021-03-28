<?php  session_start(); ?>
<!-- this page will check if pin code is set and compares sent pin code to user input so they can update password -->
<?php if(isset($_SESSION['random'])) : ?> 

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 
  <label for="code">Please enter the code we sent to your email:</label><br>
  <input type="text" id="code" name="code" value=""><br>
  <input type="submit" name="verify" value="verify" />

</form> 

<?php endif; ?>


<?php if(isset($_POST['code']) && $_SESSION['random']==$_POST['code']):?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 
  <label for="password">Please update your password:</label><br>
  <input type="text" id="password" name="password" value=""><br>
  <input type="submit" name="passcode" value="reset password" />

</form> 



<?php endif; ?>




<?php

if(isset($_POST['password'])) {

	function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
 
 $pswrd=test_input($_POST['password']);
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "users";
 $email=$_SESSION['email'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE users SET password='$pswrd' WHERE email='$email'";

if ($conn->query($sql) === TRUE) {
  echo "Password updated successfully redirecting to login page...";

     header( "refresh:3;url= http://loginform/login.php" );

 

} else {
  echo "Error updating password: " . $conn->error;
}

$conn->close();

 }

?>




