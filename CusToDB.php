<?php

//putek gumana ka rin naiiyak na ako huhuhu rak na ituh

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "storeb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



// prepare and bind
   


   $cfirst=$_POST['firstname'];
   $clast=$_POST['lastname'];

   $cemail=$_POST['email'];
   $cpass=$_POST['pw'];
   $cpass1=$_POST['pw1'];
   
   $enpassword = md5($cpass);

   $cbday=$_POST['bday'];
   $cgen=$_POST['gender'];
   $cadd=$_POST['address'];
   $ccity=$_POST['city'];
   $ctel=$_POST['tel'];
   
   
   date_default_timezone_set('Asia/Manila');  /// creating date_created
   $newdate =date('F j, Y g:i:a  ');  
   
   $ctype=$_POST['type'];

    if($cbday >= 2000)
 {
  header("Content-Type: text/html; charset=UTF-8");
  echo "<script>alert('underage di pa puwede tsk.');history.back();</script>";
  exit;
 }

  
      if($cpass == $cpass1)
{
       
} else 
{
  header("Content-Type: text/html; charset=UTF-8");
  echo "<script>alert('Wrong password.');history.back();</script>";
  exit;
}


  
   $stmt = $conn->prepare("INSERT INTO user ( first_name, last_name, email, password, bday, gender, mobileNumber, address, city, date_created, user_type) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

   $stmt->bind_param("ssssssissss", $cfirst,  $clast,  $cemail, $enpassword, $cbday, $cgen, $ctel, $cadd, $ccity, $newdate, $ctype );

  $stmt->execute();

echo"<script>location.href='WC.html';</script>";

$stmt->close();
$conn->close();
?>

    