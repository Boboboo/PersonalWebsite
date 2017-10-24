<?php
if (isset($_REQUEST['email'])){
  //if "email" is filled out, send email 
  //send email
  $email = $_REQUEST['email'] ; 
  $name = $_REQUEST['name'] ;
  $message = $_REQUEST['message'] ;
  mail( "boofcourse@gmail.com", "Subject: Message from $name in zbobo.herokuapp.com",
  $message, "From: $email" );
  echo "<div class='alert alert-success'>Your massage has been sent to bobo, she will get back to you ASAP.</div>"; 
}
// } else
// //if "email" is not filled out, display the form
//   {
//   echo "<form method='post' action='index.php'>
//   Email: <input name='email' type='text' /><br />
//   Subject: <input name='subject' type='text' /><br />
//   Message:<br />
//   <textarea name='message' rows='15' cols='40'>
//   </textarea><br />
//   <input type='submit' />
//   </form>";
//   }
?>