<?php

session_start();

DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'storeb');

$dbconn = @mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME)
OR die('could not connect to MariaDB'.mysqli_connect_error());

if(!$_SESSION['Fname']){
 header("Location: login.html", 404);
          exit;}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link href="css/design.css" rel="stylesheet"/>
  <link href="css/slider.css" rel="stylesheet"/>
  <link href="css/profile.css" rel="stylesheet"/>


</head>
<body>



<nav class="navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Mobile Insider</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        <li><a href="mobile1.php">Products</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <form class="navbar-form navbar-right">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Log Out </a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> My Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<br>
<br>

<div class="container">

  <h2> Reset your Password, <?php
echo "".$_SESSION['Fname']." ".$_SESSION['Lname']."";
?> </h2>

  <br>
  <br>

   <form class="col-md-5"  action="changepassword1.php" method="post">
     <div class="form-group">
         <label for="exampleInputEmail1">Enter your email address</label>
         <input type="text" class="form-control input-lg" placeholder="example: user@gmail.com" name="email">
     </div>
     <div class="form-group">
         <label for="exampleInputEmail1"> Enter your current password </label>
         <input type="password" class="form-control input-lg" placeholder="Password" name="currentpassword">
     </div>
     <div class="form-group">
         <label for="exampleInputEmail1"> Enter The new password </label>
         <input type="password" class="form-control input-lg" placeholder="Password" name="newpassword">
     </div>
     <div class="form-group">
         <input type="password" class="form-control input-lg" placeholder="Confirm Password" name="newpassword2">
     </div>

     <input type="hidden" name="type" value="customer">


     <br>

     <div class="form-group">
      <div>
       <button class="btn btn-danger" name="submit" type="submit">
        Reset!
       </button>
       <button type="reset" class="btn btn-default">Clear</button> <br>
       <span><a href="#">Need help?</a></span>
      </div>
     </div>
  </form>

</div>


 <br>
 <br>

<footer class="container-fluid text-center">
  <p>Online Store Copyright</p>
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>

</body>
</html>
