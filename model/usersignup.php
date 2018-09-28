<?php

if(isset($_GET['uname']))
{
	include_once 'login.php';
	$fname = mysqli_real_escape_string($con,$_GET['fname']);
	$clgname = mysqli_real_escape_string($con,$_GET['clgname']);
	$email = mysqli_real_escape_string($con,$_GET['email']);
	$mobile = mysqli_real_escape_string($con,$_GET['mobile']);
	$city = mysqli_real_escape_string($con,$_GET['city']);
	$uname = mysqli_real_escape_string($con,$_GET['uname']);
	$pwd = mysqli_real_escape_string($con,$_GET['pwd']);
	//error handeral
	//cheack empty input
	if(empty($fname) ||empty($clgname)||empty($email)||empty($mobile)||empty($city)||empty($uname)||empty($pwd))
	{
		header("Location:../register.php?signup=empty");
		exit();
		
	}
	else{
		//cheak if input char is valid
		if(!preg_match("/^[a-zA-Z]*$/", $fname) || !preg_match("/^[a-zA-Z]*$/", $clgname)){
			header("Location:../register.php?signup=invalid");
			exit();
		}else{
			//email is valid or not
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				header("Location:../register.php?signup=invalidEmail");
				exit();
			}
			else{
				$sql="SELECT * FROM users WHERE uname='$uname';";
				$result=mysqli_query($con,$sql);
				$resultCheck=mysqli_num_rows($result);
				if($resultCheck>0)
				{
					header("Location:../register.php?signup=userNameExist");
					exit();
				}else{
					//hashing password
					$hashedpwd=password_hash($pwd,PASSWORD_DEFAULT);
					//INSERT USER INTO DATABASE
					$sql="INSERT INTO users(fname, clgname, email, mobile,city, uname, pwd) VALUES('$fname','$clgname','$email','$mobile','$city','$uname','$hashedpwd');";
					mysqli_query($con,$sql);
					header("Location:../index.php?signup=Success");
					exit();
				}

			}
		}
	}

}

?>