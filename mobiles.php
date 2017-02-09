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
      <a class="navbar-brand" href="index.php">Mobile Insider</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="index.php">Home</a></li>
        <li class="active"><a href="mobiles.php">Products</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <form class="navbar-form navbar-right">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>

      <ul class="nav navbar-nav navbar-right">
      <li><a href="signUp.php">Register</a></li>
        <li><a href="login.html"><span class="glyphicon glyphicon-user"></span> Log In </a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<br>
<br>

<div class="container" id="mobileBody">

 <div class="col-md-3" style="border-right:1px solid #000;">

 <h2> Select Type </h2>
  
  <ul class="list-group">
  <li class="list-group-item">First item</li>
  <div class="radio">
  <label><input type="radio" name="optradio">Option 2</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio">Option 2</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio">Option 2</label>
</div>

  <li class="list-group-item">Second item</li>
  <div class="radio">
  <label><input type="radio" name="optradio">Option 2</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio">Option 2</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio">Option 2</label>
</div>

<li class="list-group-item">3rd item</li>
  <div class="radio">
  <label><input type="radio" name="optradio">Option 2</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio">Option 2</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio">Option 2</label>
</div>
  
 </div>
 
 <br>


 <div class="col-md-9">

<div class="container1" id="boxes">


        <div class="block1"><img src="img\Huawei.png"></div><!--
     --><div class="block1"><img src="img\apple1.png"></div><!--
     --><div class="block1"><img src="img\asus.png"></div><!--
     --><div class="block1"><img src="img\samsung.png"></div>
        <div class="block1"><img src="img\sony1.png"></div><!--
     --><div class="block1"><img src="img\lg1.png"></div>


</div>

 <h1>List of Mobile Phones</h1>
 
 

      <div class="col-sm-6 col-md-4">
        <div class="thumbnail" >
          <h4 class="text-center"><span class="label label-info">Samsung</span></h4>
          <img src="http://placehold.it/650x450&text=Galaxy S5" class="img-responsive">
          <div class="caption">
            <div class="row">
              <div class="col-md-6 col-xs-6">
                <h3>Galaxy S5</h3>
              </div>
              <div class="col-md-6 col-xs-6 price">
                <h3>
                <label>$649.99</label></h3>
              </div>
            </div>
            <p>32GB, 2GB Ram, 1080HD, 5.1 inches, Android</p>
            <div class="row">
              <div class="col-md-6">
                <a class="btn btn-primary btn-product"><span class="glyphicon glyphicon-thumbs-up"></span> Like</a> 
              </div>
              <div class="col-md-6">
                <a href="#" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></div>
            </div>

           </div>
           </div>
           </div>
   
           </div>
           

 <br>

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
