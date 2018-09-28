<?php
 session_start(); 
 ?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
		
		<!-- Font -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,700,600italic,700italic,800,800italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<!-- Font -->
		
		
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
		
		<!--Style for log in form-->
		<style type="text/css">
			* {box-sizing: border-box;}
			/* The popup form - hidden by default */
			.form-popup {
			  display: none;
			  position: fixed;
			  bottom: 0;
			  right: 15px;
			  border: 2px solid #00bcd4;
			  z-index: 9;
			}

			/* Add styles to the form container */
			.form-container {
			  max-width: 300px;
			  padding: 10px;
			  background-color: white;
			}

			/* Full-width input fields */
			.form-container input[type=text], .form-container input[type=password] {
			  width: 100%;
			  padding: 15px;
			  margin: 5px 0 22px 0;
			  border: none;
			  background: #f1f1f1;
			}

			/* When the inputs get focus, do something */
			.form-container input[type=text]:focus, .form-container input[type=password]:focus {
			  background-color: #ddd;
			  outline: none;
			}

			/* Set a style for the submit/login button */
			.form-container .btn {
			  background-color: #4CAF50;
			  color: white;
			  padding: 10px 16px;
			  border: none;
			  cursor: pointer;
			  width: 100%;
			  margin-bottom:10px;
			  opacity: 0.8;
			}

			/* Add a red background color to the cancel button */
			.form-container .cancel {
			  background-color: red;
			}

			/* Add some hover effects to buttons */
			.form-container .btn:hover, .open-button:hover {
			  opacity: 1;
			}
		</style>
		<!--Script for log in form-->
		<script>
		function openForm() {
		    document.getElementById("myForm").style.display = "block";
		}

		function closeForm() {
		    document.getElementById("myForm").style.display = "none";
		}
		function openReg() {
		    document.getElementById("myReg").style.display = "block";
		}

		function closeReg() {
		    document.getElementById("myReg").style.display = "none";
		}
		</script>
    </head>
    <body>
		
		<!-- Header Start -->
		<header id="home">
			
			<!-- Main Menu Start -->
			<div class="main-menu">
				<div class="navbar-wrapper">
					<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
						<div class="container">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle Navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								
								<a href="#" class="navbar-brand"><img src="img/logo.png" alt="Logo" /></a>							
							</div>
<!------------------------------------------------>
							<!--log in form-->
							<div class="form-popup" id="myForm" >
							  <form action="./model/userlogin.php" method="GET" class="form-container">
							    <h1 class="login">Login</h1>
							    <hr>

			               	    <label for="user"><b>User Name</b></label>
							    <input type="text" placeholder="Enter UserName" name="uname" required>

							    <label for="psw"><b>Password</b></label>
							    <input type="password" placeholder="Enter Password" name="pwd" required>

							    <button type="submit" class="btn" name="submit">Login</button>
							    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
							  </form>
							</div>
							<!--log in form-->

<!------------------------------------------------>

<!------------------------------------------------>
							<!--Register in form-->
							<div class="form-popup" id="myReg" >
							  <form action="regtype.php" method="GET" class="form-container">
							    <h1 class="login">Select Form</h1>
							    <hr>
							    <button type="submit" class="btn" name="usersubmit">New User</button>
							    <button type="submit" class="btn" name="compsubmit">New Company</button>
							    <button type="button" class="btn cancel" onclick="closeReg()">Close</button>
							  </form>
							</div>
							<!--Register in form-->

<!------------------------------------------------>
							<div class="navbar-collapse collapse">
								<ul class="nav navbar-nav navbar-right">
									<li><a href="./index.php"><i class="fa fa-home "></i>  Home</a></li>
									<li><a href="./search.php"><i class="fa fa-search"></i>  Search  internships</a></li>
									<?php  

										if(isset($_SESSION['u_name']))
										{
											$user=$_SESSION['u_name'];
										echo '<li><a href="./profile.php" ><i class="fa fa-user"></i>'.$_SESSION['u_name'].'</a></li>
										<li><a href="./model/logout.php" class="logbtn">Log Out</a></li>';

										}
										else{
										echo '<li><a href="#" onclick="openForm()" class="logbtn">Log In</a></li>
										<li><a href="#" onclick="openReg()" class="logbtn">Register</a></li>';
										}
									?>



								</ul>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!-- Main Menu End -->

		</header>
		<!-- Header End -->
