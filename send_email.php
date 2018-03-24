<?php

  //PHP code for sending an email from the form
  if (isset($_POST['name']) &&isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])) {

    $form_name = $_POST['name'];
    $form_email = $_POST['email'];
    $form_number = $_POST['phone'];
    $form_message = $_POST['message'];

    if (!empty($form_name) && !empty($form_email) && !empty($form_number)  && !empty($form_message)) {

      $to = 'rendani1267@gmail.com';
      $subject = $form_name;
      $body = "My Name is ".$form_name ." and my numbers are ".$form_number .'. MESSAGE: '.$form_message;
      $headers = 'From: '.$form_email;

      if (@mail($to, $subject, $body, $headers)) {
          
        header("Location: http://www.bcl.anthemcs.co.za");
          exit;
      }else {
        echo "not sent";
      }

    }else {
      echo "All fields are required.";
    }
  }

 ?>