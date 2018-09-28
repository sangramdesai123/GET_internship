<?php

if(isset($_GET['cname']))
{
	include_once 'login.php';
	$cname = mysqli_real_escape_string($con,$_GET['cname']);
	$email = mysqli_real_escape_string($con,$_GET['email']);
	$mobile = mysqli_real_escape_string($con,$_GET['mobile']);
	$location = mysqli_real_escape_string($con,$_GET['location']);
	$jobtype = mysqli_real_escape_string($con,$_GET['jobtype']);
	$duration = mysqli_real_escape_string($con,$_GET['duration']);
	$stipend = mysqli_real_escape_string($con,$_GET['stipend']);
	$c_name = mysqli_real_escape_string($con,$_GET['c_name']);
	$pwd = mysqli_real_escape_string($con,$_GET['pwd']);
	//error handeral
	//cheack empty input
	if(empty($cname)||empty($email)||empty($mobile)||empty($location)||empty($c_name)||empty($pwd))
	{/*
		echo $cname;
		echo $email;
		echo $mobile;
		echo $location;
		echo $jobtype;
		echo $duration;
		echo $stipend;
		echo $c_name;
		echo $pwds;*/
		
		header("Location:../comreg.php?signup=empty");
		exit();
		
	}
	else{
		//cheak if input char is valid
		if(!preg_match("/^[a-zA-Z]*$/", $cname) || !preg_match("/^[a-zA-Z]*$/", $location)){
			header("Location:../comreg.php?signup=invalid");
			exit();
		}else{
			//email is valid or not
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				header("Location:../comreg.php?signup=invalidEmail");
				exit();
			}
			else{
				$sql="SELECT * FROM company WHERE c_name='$c_name';";
				$result=mysqli_query($con,$sql);
				$resultCheck=mysqli_num_rows($result);
				if($resultCheck>0)
				{
					header("Location:../comreg.php?signup=userNameExist");
					exit();
				}else{
					//hashing password
					$hashedpwd=password_hash($pwd,PASSWORD_DEFAULT);
					//INSERT USER INTO DATABASE
					$sql="INSERT INTO company(cname,email,mobile,location,jobtype,duration,stipend,c_name, pwd) VALUES('$cname','$email','$mobile','$location','$jobtype','$duration','$stipend',
					'$c_name','$hashedpwd');";
					$result=mysqli_query($con,$sql);
					echo $result." "."hi ther y=u fucked up";
					header("Location:../index.php?signup=Success");
					exit();
				}

			}
		}
	}

}

?>