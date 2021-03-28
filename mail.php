<?php
$to = "jasem.hassin@gmail.com";
$subject = "test";
$txt = "Hello world!";
$headers = "From: jasem.hassin@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?>