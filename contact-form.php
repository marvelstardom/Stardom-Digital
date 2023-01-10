<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];

	$email_from = "stardomdigitaltech@gmail.com";

	$email_subject = "New Form submission";

	$email_body = "You have received a new message from the user $name.\n".
                          "Here is the message:\n $message".

  $to = "stardomdigitaltech@gmail.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

 ?>

 <!-- 'X-Mailer: PHP/' . phpversion();
    if(mail($to,$email_subject,$email_body,$headers)) echo json_encode(['success'=>true]); 
    else echo json_encode(['success'=>false]);
    exit; -->