<?php
session_start(); 
#after user click on log in button user get verifed and log in to his account
if(isset($_GET['submit']))
{
	include 'login.php';
	$uname=mysqli_real_escape_string($con,$_GET['uname']);//because user not able add  sql query in log in box
	$pwd=mysqli_real_escape_string($con,$_GET['pwd']);
//error handling
	//check inputs is empty
	if(empty($uname)||empty($pwd)){
			header("Location:../index.php?login=empty");
		exit();
	}
	else{
		$sql="SELECT * FROM users WHERE uname='$uname';";
		$result=mysqli_query($con,$sql);
		$resultch=mysqli_num_rows($result);
		if($resultch < 1){
			header("Location:../index.php?login=error");
			exit();
		}
		else{
			if ($row = mysqli_fetch_assoc($result)) {
				
				//dehashing of password user type
				$hashedPwdCheck = password_verify($pwd , $row['pwd']);
				if($hashedPwdCheck == false)
				{
					
					header("Location:../index.php?login=errorindehashedpwd");
					exit();
				}elseif($hashedPwdCheck == true){
					//log in the user in website here creating session verible for user
					$_SESSION['u_fname']=$row['fname'];
					$_SESSION['u_name']=$row['uname'];
					$_SESSION['u_clg']=$row['clgname'];
					$_SESSION['u_mobile']=$row['mobile'];
					$_SESSION['u_email']=$row['user_email'];
					$_SESSION['u_city']=$row['city'];
					$_SESSION['c_name']="mumbai";
					header("Location:../index.php?login=success");
					exit();
				}
			}
		}
	}


}

 ?>