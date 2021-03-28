<!DOCTYPE html>
<!-- this is the signup page -->
<html>
<head>
	<title>Sign up page</title>
</head>
<body>
<h1>Sign up</h1>

<form action="<?php echo htmlspecialchars('/addUserToDb.php');?>" method="post"> 
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>

  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value=""><br>

  <label for="password">password:</label><br>
  <input type="text" id="password" name="password" value=""><br>

  <label for="email">email:</label><br>
  <input type="text" id="email" name="email" value=""><br><br><br>

  <input type="submit" value="Sign Up">
</form> 

</body>
</html>