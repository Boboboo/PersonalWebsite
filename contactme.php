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
    <style>
        .contactme{
            text-align: center;
            width:900px;
            margin:40px auto;
        }

        .jumbotron{
            background-color:rgba(235, 159, 18, 0.49);
            text-align: center;
            letter-spacing: 1.5px;
            padding-top:80px;
            padding-bottom:50px;
            margin-top:0px;
            color:white;
            background-size: cover;
        }

        .modal-content{
            background-color:rgba(219, 166, 92, 0.5);
        }
        .modal-title{
            color:#cf8750; 
        }
      
    </style>
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

      <div class="jumbotron" id="myContainer">
        <h2>Feel Free to Contact Me.</br></h2>
        <div class="contactme container">
            <img src="image/crown.png" class="mepic">   
            <h3>If you are interested in any content I mentioned, or have something else need built, fixed, or written up?</br></h3>  
            <h3>Send me a message and I'll get back to you within a day.</br></br></h3>    
        </div>
        <button type="button" class="btn btn-lg blue messageme" data-target="#myModal" data-toggle="modal">Message Me</button>
    </div>

  
    <!--Contact form-->
    <form method="post" id="signupform">
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Message Me</h4>
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
          <p>Copyright &copy; BoBo</p>
          </div>
      </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="javascript.js"></script>
  </body>
</html>