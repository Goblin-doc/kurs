<?php
   require ='db.php';
   $data= $_POST;
   if(isset($data['do_signup'])){
    $errors[]=array();

    if (trim($data['username'] =='')) {
      $errors[] = 'Enter the username';
    }
     if (trim($data['name'] =='')) {
      $errors[] = 'Enter the name';
    }
     if (trim($data['username'] =='')) {
      $errors[] = 'Enter the username';
    }
    if (trim($data['phone'] != 11  )) {
      $errors[] = 'Enter the correct phone(11 num)';
    }
     if (trim($data['password'] =='' )) {
      $errors[] = 'Enter the password';
    }
    if (trim($data['repassword'] != $data['password'] )) {
      $errors[] = 'Enter the same password';
    }
    if(empty($errors)){

    }
    else {
      echo '<div style=color:red;>'.array_shift($errors).'</div><hr>';
    }
   }
    ?>