<?php session_start(); 
$con=mysqli_connect('localhost','root','','icar'); 
?>
<!DOCTYPE HTML>

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
												
														<form method="post" action="login.php">
														<div class="row gtr-uniform">																									
															<div class="col-12">
																<input type="email" name="email" value="" placeholder="Email" />
															</div>
															<div class="col-12">
																<input type="password" name="pw" value="" placeholder="Password" />
															</div>
															
														
															<!-- Break -->
															<div class="col-12">
																<ul class="actions">
																	<li><input type="submit" name="submit" value="login" class="primary" /></li>
																	
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

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="index.php">Homepage</a></li>
									</ul>
								</nav>

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

				if (isset($_POST['email']) && ($_POST ['pw'])) {
		        $username = strip_tags($_POST['email']);
		        $password = strip_tags($_POST['pw']);
		        $pass = SHA1 ($password);
		        
		        $sql=mysqli_query($con,"SELECT * FROM users WHERE email='$username'AND pass='$pass'");
		        $num_rows=mysqli_num_rows($sql);
		        if($num_rows>0)
		        {
		            while($row=mysqli_fetch_array($sql)){
		                $user_id=$row['user_id'];
		                $_SESSION['id'] = $user_id;
		                        ?>
		                   <div class="alert alert-success alert-dismissible" role="alert" data-dismiss="alert">
		                  Login successful
		                     </div>
		                    <script type="text/javascript">
		                       window.location = "home_page.php";
		                    </script> 
		                    <?php
		                }

		            }

		 else{
		                                ?>
                    <script type="text/javascript">
                      alert("email / password mismatch");
                       window.location = "login.php";
                    </script> ;
                    <?php
        }
    }

?>     
</html>