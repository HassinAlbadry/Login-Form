<?php 
session_start();

// this is a protected page for logged in users only
  if(isset($_SESSION["email"]) && isset($_SESSION["pswrd"])){

  	 echo 'you are logged in welcome'.' '.$_SESSION["username"];

 
  	 


  } else{

  	echo 'you logged out successfully. redirecting to login page.';
  	header( "refresh:5;url= http://loginform/login.php" );
  }
 
  

?>

<?php if(isset($_SESSION["email"]) && isset($_SESSION["pswrd"])): ?>


<HEAD>
<TITLE>Protected page for logged in users</TITLE>
</HEAD>
<BODY BGCOLOR="WHITE">
<CENTER>
<H1>A Simple Sample Web Page protected for logged in users</H1>

 


 

 

  <H4>By Hassin Albadry</H4>

<H2>Demonstrating a few HTML features</H2>

</CENTER>

HTML is really a very simple language. It consists of ordinary text, with commands that are enclosed by "<" and ">" characters, or bewteen an "&" and a ";". <P>
 

You don't really need to know much HTML to create a page, because you can copy bits of HTML from other pages that do what you want, then change the text!<P>
 

This page shows on the left as it appears in your browser, and the corresponding HTML code appears on the right. The HTML commands are linked to explanations of what they do.
 

 

<H3>Line Breaks</H3>

HTML doesn't normally use line breaks for ordinary text. A white space of any size is treated as a single space. This is because the author of the page has no way of knowing the size of the reader's screen, or what size type they will have their browser set for.<P>

 

If you want to put a line break at a particular place, you can use the "<BR>" command, or, for a paragraph break, the "<P>" command, which will insert a blank line. The heading command ("<4></4>") puts a blank line above and below the heading text.

 

<H4>Starting and Stopping Commands</H4>

Most HTML commands come in pairs: for example, "<H4>" marks the beginning of a size 4 heading, and "</H4>" marks the end of it. The closing command is always the same as the opening command, except for the addition of the "/".<P>

 

Modifiers are sometimes included along with the basic command, inside the opening command's < >. The modifier does not need to be repeated in the closing command.

 

 

<H1>This is a size "1" heading</H1>

<H2>This is a size "2" heading</H2>

<H3>This is a size "3" heading</H3>

<H4>This is a size "4" heading</H4>

<H5>This is a size "5" heading</H5>

<H6>This is a size "6" heading</H6>

<center>

<H4>Copyright © 2021, by
<A HREF="">Hassin Albadry</A>
</H4>


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 
  <input type="submit" name="logOut" value="logOut?" />

</form> 

<?php if(isset($_POST['logOut'])){
  session_unset();
  session_destroy();
}
?>

<?php endif; ?>