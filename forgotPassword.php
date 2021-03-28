<!-- this page asks user to enter email address for forgot password feature  -->
<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
	<style type="text/css">
   .main{
     
     
     margin:auto;
		  margin-top: 10%;
 		  width: 30%;
  		  border: 3px solid black;
  		  padding: 10px;

   }
	</style>
</head>
<body>
<div class="main">
<h1>Enter Your Email Address</h1>
<form action="<?php echo htmlspecialchars('/db.php');?>" method="post"> 
<input type="email" id="verify" name="verify" value="">
<input type="submit" value="submit">


</form>

</div>
</body>
</html>

<?php 

include 'db.php';

?>