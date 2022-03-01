<?php

  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
  
  
    $email_form = 'ogambapatrickjunior@gmail.com';
    $email_subject = "New Form Submission";
    $email_body = "User Name: $name.\n".
        "User Email: $visitor_email.\n".
        "User City: $city.\n".
        "User Phone Number: $phone.\n".
  
        "Here is the from the message from the Gaming Website that you created: $message.\n";
  
  
  
    $to = "ogambapatrickjunior@gmail.com";
    $headers = "From: $email_form \r\n";
    $headers = "Reply-To: $visitor_email \r\n";
      
    mail($to,$email_subject,$email_body,$headers);

    echo "<script>alert('Your Message has been sent')</script>";
    echo "<script> window.location = 'index.php'</script>";
  
  }

    
?>