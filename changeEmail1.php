<?php
    session_start ();
    $user = @$_SESSION['CID'];



		$conn_db = mysql_connect("localhost","root","") or die();
		$sel_db = mysql_select_db("storeb",$conn_db) or die();

		if(isset($_POST['submit']))
		{
		//$old_pass=$_POST['oldpassword'];
		//$new_pass=$_POST['newpassword'];
		//$re_pass=$_POST['newpassword2'];

    //$old_pass =md5 (@$_POST['currentpassword']);
    //$new_pass =md5 (@$_POST['newpassword']);
    //$re_pass =md5 (@$_POST['newpassword2']);

    //$new_pass=$_POST['oldemail'];
		//$re_pass=$_POST['email'];
    //$re_pass=$_POST['email1'];

    $old_email=$_POST['oldemail'];
    $new_email=$_POST['email'];
    $re_email=$_POST['email1'];


		//$chg_pwd=mysql_query("select * from user where user_id='$user'");
		//$chg_pwd1=mysql_fetch_array($chg_pwd);

    $chg_em=mysql_query("select * from user where user_id='$user'");
		$chg_em1=mysql_fetch_array($chg_em);
		$data_em=$chg_em1['email'];
		if($data_em==$old_email){
		if($new_email==$re_email){
			$update_em=mysql_query("update user set email='$new_email' where user_id='$user'");
			echo "<script>alert('Email Updated Sucessfully'); window.location='changepasswordSuccess.php'</script>";
		}
		else{
			echo "<script>alert('Your new and Retype Password is not match'); window.location='changeEmail.php'</script>";
		}
		}
		else
		{
		echo "<script>alert('Your old password is wrong'); window.location='changeEmail.php'</script>";
		}}
	?>
