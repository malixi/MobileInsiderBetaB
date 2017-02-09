<?php

	session_start();
	require_once('connect.php');

	$cemail=$_POST['email'];
    $cpass=$_POST['pw'];

    $enpassword = md5($cpass);

    $ctype=$_POST['type'];
    


	if ($ctype == "customer") {
		$stmt = $dbconn->prepare('SELECT * FROM user WHERE email = ? AND password = ? AND user_type = ?');
		$stmt->bind_param('sss', $cemail, $enpassword, $ctype);
		$stmt->execute();
		$result = $stmt->get_result();

		if($rows = $result->fetch_assoc()){
		$_SESSION['Fname']=$rows['first_name'];
    	$_SESSION['Lname']=$rows['last_name'];
    	$_SESSION['Cemail']=$rows['email'];
    	$_SESSION['Cbday']=$rows['bday'];
    	$_SESSION['Cgen']=$rows['gender'];
    	$_SESSION['Cnum']=$rows['mobileNumber'];
    	$_SESSION['Cadd']=$rows['address'];
    	$_SESSION['Ccity']=$rows['city'];
    	
    	
			echo"<script>location.href='home.php';</script>";
			  

		}else{
			echo"<script>window.alert('Email Address/Password Incorrect');</script>";
			
		}
	}
	
	
?>
