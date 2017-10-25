<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bobo Personal Website</title>
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="styling.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Quicksand|Roboto" rel="stylesheet">
  </head>

  <body>
    <!--Navigation Bar-->  
    <nav role="navigation" class="navbar navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand">BOBO</a>
            <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navbarCollapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">HOME</a></li>
              <li><a href="aboutme.php">ABOUT  ME</a></li>
              <li><a href="what.php">WHAT I DO</a></li>
              <li><a href="contactme.php">CONTACT ME</a></li>
            </ul>
        </div>
    </div>
</nav>

    
    <!--Jumbotron with Contact me Button-->
    <div class="jumbotron" id="myContainer">
          <h1>HI, I AM BOBO.</h1>
          <h3>Web Developer, Cat Fancier, and Traveling Explorer</h3>
    </div>

    <!-- Footer-->
      <div class="footer">
          <div class="container">
              <p>Developer: BoBo &copy; 2017-<?php $today = date("Y"); echo $today?>.</p>
          </div>
      </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="javascript.js"></script>
  </body>
</html>