<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/icon.png">

    <title>A Cuppa Joe &ndash; Contact</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/contact.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.html"> <span class=nobr>A Cuppa <img src="../images/logo1.png"> Joe</span></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="../html/coffee.html">Our Products</a></li>
            <li><a href="../html/about.html">About</a></li>
               <li><a href="../html/coffee.html">News</a></li>
              <li><a href="../html/photos.html">Gallery</a></li>
            <li class="active"><a href="#">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container">
       
      <div class="starter-template">
        <h1>Contacting us is a breeze</h1>
        <p class="lead">Feel free to contact using this form tool inorder to maintain our 100% customer satisfaction.</p>
      </div>
        <div class="bd-example" data-example-id="">
    <!--***************FORMS STUFF STARTS HERE*****************--->
<form action="submit.php" method="post">
    <fieldset class="form-group">
    <label for="exampleInputPassword1">Name:</label>
    <input type="text" name=UserName class="form-control" id="UserName" placeholder="Enter Name" />
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleInputEmail1">Email address:</label>
    <input type="email" name="UserEmail" class="form-control" id="UserEmail" placeholder="Enter Email" />
    <small class="text-muted">We'll never share your email with anyone else.</small>
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleSelect1">How often do you come here a week?</label>
    <select class="form-control" name="UserFrequency" id="UserFrequency">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </fieldset>

  <fieldset class="form-group">
    <label for="exampleTextarea">Message</label>
    <textarea class="form-control" name=UserMessage id="UserMessage" rows="3" placeholder="Type your message here"></textarea>
  </fieldset>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
       
</div>
      <p id="message"></p>
    </div><!-- /.container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
