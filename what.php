<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bobo Personal Website</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="what.css" rel="stylesheet">
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

    <div class="jumbotron" id="myContainer">
        <h1>What I Do</h1>
    </div>
    
    <div class="icons">
            <div class="container">
                <div class="row">
                    <div class="smallContainer">
                        <img src="image/1.png" class="bodyImage">
                        <h3><a class="title" href="https://github.com/Boboboo/Web-Programming">Web Programming</a></h3>
                        <p>Strong approach of internet programming. Learned how to create a complex global site through the creation of individual working modules.</p>
                    </div>

                    <div class="smallContainer">
                        <img src="image/2.png" class="bodyImage">
                        <h3><a class="title" href="https://github.com/Boboboo/Database-Management">Database Management Systems</a></h3>
                        <p>Introduction to the design and querying of relational databases.  </p>
                    </div>

                    <div class="smallContainer">
                        <img src="image/3.png" class="bodyImage">
                        <h3><a class="title" href="https://github.com/Boboboo/Data-Mining">Data Mining</a></h3>
                        <p>Discover useful patterns in data for actionable intelligent decisions, in a reasonable amount of time. </p>
                    </div>

                    <div class="smallContainer">
                        <img src="image/4.png" class="bodyImage">
                        <h3><a class="title" href="https://github.com/Boboboo/Data-Structure-Algorithm">Data Structures and Algorithms</a></h3>
                        <p>Basic programming constructs, data structures and algorithms </p>
                    </div>

                    <div class="smallContainer">
                        <img src="image/6.png" class="bodyImage">
                        <h3>Fundamentals of Cybersecurity</h3>
                        <p>Learned mathematical models for computer security. </p>
                    </div>

                    <div class="smallContainer">
                        <img src="image/5.png" class="bodyImage">
                        <h3>Object-Oriented Analysis and Design</h3>
                        <p>Theory of object-oriented design, classes, interfaces, inheritance hierarchy, and correctness. </p>
                    </div>
                </div>
        </div>
    </div>
    
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