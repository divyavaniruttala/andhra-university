<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST=['subject'];
$message=$_POST=['message'];

$email_form='enquiry@andhrauniversity.edu.in';

$email_subject='New Form submission';

$email_body="User Name:$name./n".
             "User Email:$visitor_email./n".
             "Subject:$subject./n";
            "User Message:$message./n";
 $to='divya93465@gmail.com' ;

 $headers="Form:$email_form/r/n";

 $headers.="reply-To:$visitor_email/r/n";
 mail($to,$email_subject,$email_body,$headers);

 header("Location:contact.html");
 ?>
 
 




