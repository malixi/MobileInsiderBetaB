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

    $old_pass =md5 (@$_POST['currentpassword']);
    $new_pass =md5 (@$_POST['newpassword']);
    $re_pass =md5 (@$_POST['newpassword2']);

		$chg_pwd=mysql_query("select * from user where user_id='$user'");
		$chg_pwd1=mysql_fetch_array($chg_pwd);
		$data_pwd=$chg_pwd1['password'];
		if($data_pwd==$old_pass){
		if($new_pass==$re_pass){
			$update_pwd=mysql_query("update user set password='$new_pass' where user_id='$user'");
			echo "<script>alert('Update Sucessfully'); window.location='changepasswordSuccess.php'</script>";
		}
		else{
			echo "<script>alert('Your new and Retype Password is not match'); window.location='index.php'</script>";
		}
		}
		else
		{
		echo "<script>alert('Your old password is wrong'); window.location='index.php'</script>";
		}}
	?>
