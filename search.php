<?php 
	include_once 'partial/header.php'
 ?>		

		<section id="search" class="site-padding">
		<h3 class="container count">230+ Internship</h3>
			<div class="container">
				<div class="row">
				<!--Filter-->
					<div class="col-sm-3 le">
						<div >
							<h4>Filters</h4>
							<hr>
						</div>
						<form action="#" method="GET">
							<h4>Category</h4>
							<div class="search">
							  <span <i class="fa fa-search"></span>
							  <input name="Category" placeholder="web android etc">
							</div>
							<h4>Location</h4>
							<div class="search">
							  <span <i class="fa fa-search"></span>
							  <input name="location" placeholder="mumbai pune etc">
							</div>
							<h4>Max. duration (months)</h4>
							<div class="search">
							  <span <i class="fa fa-search"></span>
							  <input name="duration" placeholder="2 3 etc">
							</div>
							<h4>Stipend</h4>
							<div class="search">
							  <span <i class="fa fa-search"></span>
							  <input name="cname" placeholder="Company name">
							</div>	
							<button class="col-sm-11 btn btn-primary btn-lg">Sort</button>
						</form>
						


					</div>
				<!--Filter Resl on righ-->
					<div class="col-sm-9 rh">
						<div class="result">
							<h4>About Our Company</h4>
							<p><h5>Location:Mumbai</h5></p>
							
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<a href="#" class="btn btn-read-more mybtn">Read More</a>
						</div>
						<?php
						include 'model/login.php';
						if (isset($_GET['Category'])) 
						{
							if(!empty($_GET['Category'])){
								$cat=$_GET['Category'];
								$sql='SELECT * FROM company WHERE jobtype="'.$cat.'"';
							}
						}
						else if (isset($_GET['location'])) 
						{
							if(!empty($_GET['location'])){
								$cat=$_GET['location'];
								$sql='SELECT * FROM company WHERE location="'.$cat.'"';
							}
						}
						else if (isset($_GET['duration'])) 
						{
							if(!empty($_GET['duration'])){
								$cat=$_GET['duration'];
								$sql='SELECT * FROM company WHERE duration="'.$cat.'"';
							}
						}
						else if (isset($_GET['cname'])) 
						{
							if(!empty($_GET['cname'])){
								$cat=$_GET['cname'];
								$sql='SELECT * FROM company WHERE cname="'.$cat.'"';
							}
						}
						else{
							$sql='SELECT * FROM company WHERE location="pune"';
						}
						
						$res=mysqli_query($con,$sql);
						while ($row=mysqli_fetch_array($res)) {

						echo '<form method="GET"><div class="result">
							<h4>'.$row["cname"].'! </h4>'.
							'<p><h5>Location:'.$row["location"].'</h5></p>
							
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<a href="application.php?c_name='.$row["c_name"].'" class="btn btn-read-more mybtn">Read More</a>
						</div></form>';
						}
						?>
					</div>
				</div>
			</div>
		</section>
		



<?php 
	include_once 'partial/footer.php'
 ?>		