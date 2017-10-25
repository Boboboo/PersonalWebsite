<?php
if (isset($_REQUEST['email'])){
  $email = $_REQUEST['email'] ; 
  $name = $_REQUEST['name'] ;
  $message = $_REQUEST['message'] ;
  mail( "boofcourse@gmail.com", "Subject: Message from $name in zbobo.herokuapp.com",
  $message, "From: $email" );
  echo "<div class='alert alert-success'>Your massage has been sent to bobo, she will get back to you ASAP.</div>"; 
}
?>