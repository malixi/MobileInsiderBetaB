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
        <li><a href="mobiles.php">Products</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <form class="navbar-form navbar-right">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>

      <ul class="nav navbar-nav navbar-right">
       
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Login </a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<br>
<br>

<div class="container">

  <form class="form-horizontal" action="CusToDB.php" method="post">
  <div class="col-md-6 col-sm-6 col-xs-12">

    <div class="form-group">
       <label for="inputname">Hi, Let's get started</label>
       <input type="text" class="form-control"  placeholder="Enter First Name" name="firstname">
    </div>
    <div class="form-group">
       <input type="text" class="form-control"  placeholder="Enter Last Name" name="lastname">
    </div>

    <div class="form-group">
       <label for="inputEmail">Email address</label>
       <input type="email" class="form-control"  placeholder="Enter email" name="email">
       <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
     <div class="form-group">
        <label for="inputPassword">Password</label>
      <input type="password" class="form-control"  name="pw" placeholder="New Password" required>
    </div>

    <div class="form-group">
     <input type="password" class="form-control"  name="pw1" placeholder="Confirm Password" required>
   </div>


  <div class="form-group">
    
  <label for="bday">Your Birthday</label>
  <input type="date" name="bday" required>

  </div>

  <div class="form-group">

  <input type="radio" name="gender" value="M"> Male <br>
  <input type="radio" name="gender" value="F"> Female <br>

  </div>
  
  
  <h4> Your Contact Infomation and Address: </h4>
  
  <div class="form-group">
       <label for="inputname">Complete Address:</label>
       <input type="text" class="form-control"  placeholder="House Number, Street Name, Barangay, City/Municipality and Province" name="address">
    </div>

  <div class="form-group">
      <label for="sel1">Select your City:</label>
      <select class="form-control" name="city">
<option value="Manila City">Manila</option>
<option value="Caloocan City">Caloocan</option>
<option value="Las Pinas City">Las Pinas</option>
<option value="Makati City">Makati</option>
<option value="Malabon City">Malabon</option>
<option value="Mandaluyong City">Mandaluyong</option>
<option value="Marikina City">Marikina</option>
<option value="Muntinlupa City">Muntinlupa</option>
<option value="Navotas City">Navotas</option>
<option value="Paranaque City">Paranaque</option>
<option value="Pasay City">Pasay</option>
<option value="Pasig City">Pasig</option>
<option value="Quezon City">Quezon</option>
<option value="San Juan City">San Juan</option>
<option value="Taguig City">Taguig</option>
<option value="Valenzuela City">Valenzuela</option>
      </select>
   </div>
  <div class="form-group">
       <label for="inputname">Mobile Number</label>
       <input type="tel" class="form-control"  placeholder="+639" name="tel">
    </div>

   <input type="hidden" name="type" value="customer">


    <div class="form-group">
     <div>
      <button class="btn btn-primary" name="submit" type="submit">
       Sign Up!
      </button>
      <button type="reset" class="btn btn-default">Clear</button>
     </div>
    </div>

   </form>

 </div>
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
