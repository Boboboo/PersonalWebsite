<!-- <?php
if (isset($_REQUEST['email'])){
  $email = $_REQUEST['email'] ; 
  $name = $_REQUEST['name'] ;
  $message = $_REQUEST['message'] ;
  
  mail( "boofcourse@gmail.com", "Subject: Message from $name in zbobo.herokuapp.com",
  $message, "From: $email" );
  echo "<div class='alert alert-success'>Your massage has been sent to bobo, she will get back to you ASAP.</div>"; 
}
?> -->

<?php
$missingUsername = '<p><strong>Please enter a username.</strong></p>';
$missingEmail = '<p><strong>Please enter your email address.</strong></p>';
$invalidEmail = '<p><strong>Please enter a valid email address.</strong></p>';

if(empty($_POST["name"])){
  $errors .= $missingUsername;
}else{
  $username = filter_var($_POST["name"], FILTER_SANITIZE_STRING);   
}

if(empty($_POST["email"])){
  $errors .= $missingEmail;   
}else{
  $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);        
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){                     
      $errors .= $invalidEmail;   
  }
}

mail( "boofcourse@gmail.com", "Subject: Message from $name in zbobo.herokuapp.com",$message, "From: $email" );
echo "<div class='alert alert-success'>Your massage has been sent to bobo, she will get back to you ASAP.</div>"; 
?>