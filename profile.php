<?php 
	include_once 'partial/header.php'
 ?>		

<!--loop through data base for table-->


		<section id="search" class="site-padding">
		<h3 class="container count">Application Status for Internship</h3>
		<h4 class="container count">Welcome <?php echo $_SESSION['u_name'] ?> !</h4>
			<div class="container">
				<div class="row">
				<!--Filter-->
					<div class="col-sm-12">
						<table id="customers">
						  <tr>
						  	<th>Id</th>
						 	<th>Date</th>
						    <th>Company</th>
						    <th>Applicaion Status</th>
						    <th>Contact</th>
						    <th>City</th>
						  </tr>
						  <?php
						   include 'model/login.php';
							$sql='SELECT * FROM application';
							$res=mysqli_query($con,$sql);
							while ($row=mysqli_fetch_array($res)) {
							$i=$row['id'];
							$date=$row['day'];
							$cname=$row['cname'];
							$applicstat=$row['statu'];
							$contact=$row['contact'];
							$city=$row['city'];

							echo '<tr>
										<td >'.$i.' </td>
										<td >'.$date.' </td>
										<td>'.$cname .' </td>
										<td> '.$applicstat.'</td>
										<td>'.$contact.'</td>
										<td> '.$city.'/-</td>
									</tr>';
							}

							?>
						  
						</table>
					</div>
					
				</div>
			</div>
		</section>
		
	

<?php 
	include_once 'partial/footer.php'
 ?>		