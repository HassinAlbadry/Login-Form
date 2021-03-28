<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>

<style type="text/css">
	.main{

		  margin:auto;
		  margin-top: 10%;
 		  width: 30%;
  		  border: 3px solid black;
  		  padding: 10px;

	}

	body{

		background-color: white;
	}

	input,label{
  margin-left: 30%;
}

h1{

	margin-left: 30%
}

</style>
</head>
<body>

<div class='main'>


<h1>Login</h1>   <!-- login form sent to login Auth page to find user in database -->

<form action="<?php echo htmlspecialchars('/loginAuth.php') ?>" method="post"> 
  <label for="email">Email:</label><br>
  <input type="email"  id="email" name="email" value=""><br><br>

  <label for="password">Password:</label><br>
  <input type="text" id="password" name="password" value=""><br><br>

  <input type="submit" value="Login">
  <p> If you are not registered please register <a href="/signup.php">here</a> </p>
  <p> Forgot password? click <a href="/forgotPassword.php">here</a> </p>


</form> 


</div>

</body>
</html>