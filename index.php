<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bobo's Website</title>
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
                    <li><a href="#">WHAT I DO</a></li>
                    <li><a href="#">CONTACT ME</a></li>
                </ul>
              </div>
          </div>
      </nav>
    
    <!--Jumbotron with Contact me Button-->
    <div class="jumbotron" id="myContainer">
          <h1>Hi, I am BOBO Z</h1>
          <h3>Web Developer, Cat Enthusiast, and Traveling Professor</h3>
          <button type="button" class="btn btn-lg blue dropmeline" data-target="#myModal" data-toggle="modal">Drop Me A Line</button>
    </div>

    <!--Contact form-->
    <form method="post" id="signupform">
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Drop Me A Line</h4>
                </div>

                <div class="modal-body">
                <div id="signupmessage"> </div>          
                  <div class="form-group">
                      <label for="name" class="sr-only">Name</label>
                      <input class="form-control" type="text" name="name" id="name" placeholder="Name" maxlength="30">
                  </div>
                  <div class="form-group">
                      <label for="email" class="sr-only">Email</label>
                      <input class="form-control" type="email" name="email" id="email" placeholder="Email Address" maxlength="50">
                  </div>
                  <div class="form-group">
                      <label for="message" class="sr-only">Message</label>
                      <textarea class="form-control" type="text" name="message" id="message" placeholder="Message" cols="25" rows="8"></textarea> 
                  </div>
                </div>

                <div class="modal-footer">
                  <input class="btn blue" name="signup" type="submit" value="Send">
                  <button type="button" class="btn btn-default " data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>
    
    <!-- Footer-->
      <div class="footer">
          <div class="container">
              <p>Bo Copyright &copy; 2017-<?php $today = date("Y"); echo $today?>.</p>
          </div>
      </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="javascript.js"></script>
  </body>
</html>