<?php
  $fname = $_Post['fname'];
  $lname = $_Post["lname"];
  $visitor_email = $_Post['email'];
  $message = $_POST['message'];
  $subject = $_POST['subject'];
  $email_from = "email address";
  $email_subject = "Subject: $subject.\n";
  $email_body = "User Name: $name.\n User Email: $visitor_email.\n User Message: $message.\n";
  $to = "contact@saynsmedia.com";
  mail($to,$email_subject,$email_body);
  header("Location: contact page")
?>
