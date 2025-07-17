<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "info@flysofts.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    //send email
    mail($admin_email, "Requested Call Back", $phone, "From:" . $email);
    
    header('Location:/success.html');
  }