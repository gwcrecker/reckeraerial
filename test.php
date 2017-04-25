<?php
if<!isset($_POST['submit']
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
          
