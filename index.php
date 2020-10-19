
<?php
 if(isset($_POST['submit']))
 {
     $name  = $_Post['name'] ; 
  $subject   = $_Post['subject'] ; 
  $mailFrom = $_Post['mail'] ; 
  $message = $_Post['message'] ; 
  $mailTo = "clashnow0@gmail.com" ;
  $headers = "From: ".$mailFrom ; 
  $txt = "You have received an email from ".$name.".\n\n".$message ; 
  mail($mailTo , $subject , $txt  , $headers  ) ; 
  header ("Location  : index.php?mailsend") ;
 }
