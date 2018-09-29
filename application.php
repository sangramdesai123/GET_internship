<?php 
	include_once 'partial/header.php'
 ?>		
<section class="site-padding">
	
	<?php
	if (!isset($_SESSION['u_name'])) {
		# code...
		echo '<script>alert("You Must Log In ");;</script>';
	}
		include 'model/login.php';
		if(!isset($_SESSION['c_name'])){
			$_SESSION['c_name']=$_GET['c_name'];
		}
		$cat=$_SESSION['c_name'];

		$sql='SELECT * FROM company WHERE c_name="'.$cat.'"';
		$res=mysqli_query($con,$sql);
		while ($row=mysqli_fetch_array($res)) {
		echo '
		<div class="container result">
			<h2>'.$row["cname"].'! </h2>'.
			'<p><h5>Location:'.$row["email"].'</h5></p>
			<p><h5>Location:'.$row["location"].'</h5></p>
			<div class="container row">
				<div class="col-sm-3">
					<b>Start Date</b>
				</div>
				<div class="col-sm-3">
					<b>Duration</b>
				</div>
				<div class="col-sm-4">
					<b>	Rewards & Incentives</b>
				</div>
				<div class="col-sm-2">
					<b>Stipend</b>
				</div>
			</div>
			<div class="container row">
				<div class="col-sm-3">
					<i>immediately</i>
				</div>
				<div class="col-sm-3">
					<i>'.$row["duration"].'</i>
					
				</div>
				<div class="col-sm-4">
					<i>	Performance Based</i>
				</div>
				<div class="col-sm-2">
					<i>'.$row["stipend"].'</i>
				</div>
			</div>
		</div>';

	}
if(isset($_SESSION["u_name"])){
	
	if (isset($_GET["app"])) {

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
			$sql="INSERT INTO application VALUES('$day','$cname','$status','$contact','$city');";
			mysqli_query($con,$sql);
		}
	}
}
					
	?>
	<form method="GET" action="application.php">
	<div class="container result">
		<h5>About Learning While Travelling (http://www.learningwhiletravelling.com):</h5>
		<p>Learning While Travelling has an app/website to connect junior students with their potential senior students from various colleges where the junior students wish to take admission in future. We offering this for both undergraduate and postgraduate prospective students. Senior students will be hosting the prospective students in college campus and show them the campus life, mess food, sports facilities, hostel life and e-cell overview etc. Its a new concept and there is no competition in the market</p>				
		<h5>About the Program:</h5>
		<p>Selected intern's day-to-day responsibilities include:

		1. Create a buzz and excitement about LWT's event in your college<br>
		2. Team Leader: CA will be solely responsible for getting participants for "Mentorship at IIT DELHI <br>Program" from your college. CA will be the point of contact for us from their college<br>
		3. Post about -Mentorship Program At IIT DELHI- on your social media platforms like Instagram, Facebook, Whatsapp, Twitter etc<br>
		4. Get fellow college-mates to register and book -Mentorship Program at IIT DELHI-<br>
		5. Be the face of lwt in your college and represent the brand<br>
		</p>	
		
		<h5>Selection procedure:</h5>
		<p>Selected intern's day-to-day responsibilities include:

		1. Available for 1-month program<br>
		2. have relevant skills and interests<br>
		3. Socially and culturally active in their respective college events<br>
		4. Extrovert<br>
		5. Social media butterfly<br>
		</p>	
		
		<h5>About Learning While Travelling (http://www.learningwhiletravelling.com):</h5>
		<p>Learning While Travelling has an app/website to connect junior students with their potential senior students from various colleges where the junior students wish to take admission in future. We offering this for both undergraduate and postgraduate prospective students. Senior students will be hosting the prospective students in college campus and show them the campus life, mess food, sports facilities, hostel life and e-cell overview etc. Its a new concept and there is no competition in the market</p>	

		<h5>Perks:</h5>
		<p>Certificate, Letter of recommendation, Flexible work hours.</p>
			<?php
			if (!isset($_GET["app"]) && isset($_SESSION['u_name'])) {
				# code...
				echo '<button name="app" class="btn m1 btn-primary">Apply NoW !</button>';
			}
			else{
				if(isset($_SESSION['u_name']))
				echo' <button  class="btn m1 btn-primary disabled">Applied allready !</button>';
			}
			?>
			
		</form>	
	</div>
</section>

<?php 
	include_once 'partial/footer.php';
 ?>		