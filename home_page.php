<?php 
session_start();
$con=mysqli_connect('localhost','root','','icar'); 
$user_id=$_SESSION['id'];

 $sql=mysqli_query($con,"SELECT * FROM users WHERE user_id='$user_id'");

 $num_row=mysqli_num_rows($sql);
            if($num_row>0){
            while($row=mysqli_fetch_array($sql)){
               
                $firstname=$row['fn'];
                $lastname=$row['ln'];
               
            }
            }

            ?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>icar solutions</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
		  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.php" class="logo"><strong><?php echo $lastname; ?></strong> <?php echo $firstname; ?></a>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
									</ul>
								</header>

							<!-- Content -->
							<!--top row -->

							<section>
										<?php
									$sql=mysqli_query($con,"SELECT * FROM products ORDER BY prod_id LIMIT 5");
									while($row=mysqli_fetch_array($sql)){
										$prod_name=$row['prod_name'];
										$car_model=$row['car_model'];
										$description=$row['description'];
										$price=$row['price'];

										?>
										<div class="row">
										<div class="col-6 col-12-small">
										<h3><?php echo $prod_name; ?></h3>
										<img src="images/logo.jpeg" width="400" height="400">
										</div>
										<div class="col-6 col-12-small">
										<br/> <br/> <?php echo "<b>".$car_model."</b>"; ?>
										<br/> 
										<?php echo $description; ?><br/> <br/> 
										<?php echo "<b>"."$".$price."</b>"; ?>

										</div>
									</div>
									<hr>


										<?php
									}

									?>
									<br/>

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
										<li><a href="home_page.php">Homepage</a></li>
										<li><a href="#">view products</a></li>
										<li><a href="#">my purchase history</a></li>
										<li><a href="#">Upload profile picture</a></li>
										
										
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
		 
</html>