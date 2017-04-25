<?php

if(!isset($_POST['submit']))
          {
            //This page should not be accessed directly. Need to submit the form.
            echo "error; you need to submit the form!";
          }
 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

//validate first
if(empty($name) || empty($email))
          {
            echo "Name and email are manditory!";
            exit;
          }
$email_from='reckeraerial@gmail.com';
$email_subject="New Form Submission";
$email_body="You have recieved a new message from the user $name. \n".
    "email address: $visitor_email\n".
    "here is the message: \n $message".
  
$to= "reckeraerial@gmail.com";
$headers= "From: $email_from \r\n";

          
          //send the email
    
    mail($to,$email_subject,$email,$email_body,$headers);
          //sent
?>
