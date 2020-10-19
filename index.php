
<?php
 if(isset($_POST['submit']))
 {
     $User_name = $_POST['name'];
     $phone = $_POST['phone'];
     $user_email = $_POST['email'];
     $user_message = $_POST['message'];
     
     
     $email_from = 'noreply@avinashkr.com';
     $email_subject = "New Form Submission";
     $email_body = "Name: $User_name.\n".
                    "Phone No: $phone.\n".
                    "Email Id: $user_email.\n".
                    "User Message: $user_message.\n";
     
     $to_email = "clashnow0@gmail.com";
     $headers = "From: $email_from \r\n";
     $headers .= "Reply-To: $user_email\r\n";
     
     
     
     
     $response = file_get_contents($url);
     $response = json_decode($response);
     
     if ($response->success)
     {
         mail($to_email,$email_subject,$email_body,$headers);
         echo "Message sent Successfully";
     }
     else
     {
         echo "<span> Please Try Again</span>";
     }
 }
?>
    
</div>
  
</div>  
 
