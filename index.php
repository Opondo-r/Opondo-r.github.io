<!DOCTYPE HTML>
<?php $con=mysqli_connect('localhost','root','','icar');  ?>
<html>
	<head>
		<title>icar solutions</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.php" class="logo"><strong>icar</strong> Solutions</a>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
									</ul>
								</header>

							<!-- Content -->
								<section>
									

									<!-- Content -->
									
										<div class="row">
											<div class="col-6 col-12-small">
						
												<p><img src="images/logo.jpeg" width=400 height="400"></p>

											</div>
											<div class="col-6 col-12-small">
												<header>
													<h2>Welcome to icar Solutions<br /></h2>
													
													<p>All under one roof</p>
												</header>
												
														<form method="post" action="index.php">
														<div class="row gtr-uniform">
															<div class="col-6 col-12-xsmall">
																<input type="text" name="fn"  value="" placeholder="First Name" />
															</div>
															<div class="col-6 col-12-xsmall">
																<input type="text" name="ln"  value="" placeholder="Last Name" />
															</div>
															<div class="col-6 col-12-xsmall">
																
															<input type="text" name="phone"  value="" placeholder="phone number (begin with country code)" />

															</div>
															<div class="col-6 col-12-xsmall">
																
															<input type="text" name="email"  value="" placeholder="email " />

															</div>
																											
												
															<div class="col-6 col-12-xsmall">
																<input type="password" name="pw" value="" placeholder="Password" />
															</div>
															<div class="col-6 col-12-xsmall">
																<input type="password" name="cpw" value="" placeholder="Confirm Password" />
															</div>
															
														
															<!-- Break -->
															<div class="col-12">
																<ul class="actions">
																	<li><input type="submit" name="submit" value="signup" class="primary" /></li>
																	<li><a href="login.php" class="button big">Login</a></li>
																</ul>
															</div>
														</div>
													</form>

											</div>
											<!-- Break -->
											
										</div>

									<hr class="major" />

									<!-- Elements -->
		
										

								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>



						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>


		<?php
			 
			    if(isset($_POST['submit'])){
			      $fn=$_POST['fn'];
			      $ln=$_POST['ln'];
			      $phone=$_POST['phone'];
			      $email=$_POST['email'];
			      $password=$_POST['pw'];
			      $cpassword=$_POST['cpw'];

			      if($password==$cpassword){
			      	$pass=SHA1($password);

			      $insert_user=mysqli_query($con,"insert into users(fn,ln,phone,email,pass)values('$fn','$ln','$phone','$email','$pass')"); // correct the photo with the correct path

			      if($insert_user){
			        echo 'record inserted';
			      }else{
			        echo mysqli_error($con);
			      }
			      }else{
			      	echo 'password mismatch';
			      }
 

			    }



			?>
</html>