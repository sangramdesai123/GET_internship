<?php 
include_once 'partial/header.php';
include_once 'model/login.php';
if(isset($_SESSION["u_name"])){
	echo "string";
	if (isset($_SESSION['c_name'])) {
		# code...
		$day="30/9/2018";
		$cname=$_SESSION['c_name'];
		$status="Applied";
		$contact=$_SESSION['u_mobile'];
		$city=$_SESSION['u_city'];

		$sql='SELECT * FROM application WHERE cname="$cname";';

		$result=mysqli_query($con,$sql);
		$resultCheck=mysqli_num_rows($result);
		if($resultCheck>0)
		{
			header("Location:../application.php?");
			exit();
		}else{
			//INSERT USER INTO DATABASE
			$sql="INSERT INTO applicaion VALUES('$day','$cname','$status','$contact','$city');";
			$result=mysqli_query($con,$sql);
			header("Location:../index.php?signup=Success");
					exit();
		}
	}
}


