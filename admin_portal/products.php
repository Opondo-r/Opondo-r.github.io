<!DOCTYPE HTML>
<?php $con=mysqli_connect('localhost','root','','icar'); ?>
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
					<form action="products.php" method="POST" enctype="multipart/form-data">  
					<div class="row">

							<div class="col-4 col-12-medium">

							<div class="col-12">
								<input type="text" name="prod_name"  value="" placeholder="Name" />
						 
											</div>

								</div>

								<div class="col-4 col-12-medium">
																
								<div class="col-12">
								<input type="text" name="car_model"  placeholder="Car Model" />
									</div>										 	

								</div>
								<div class="col-4 col-12-medium">
										<div class="col-12">

												<input type="text" name="manuafacturer" placeholder="Manufacture" />

													</div>
								</div>

							</div>
							<br/>

								<div class="row">

							<div class="col-4 col-12-medium">

								<div class="col-12">
									<textarea name="description" id="description" placeholder="Enter item description" rows="6"></textarea>
									</div>
									

								</div>

								<div class="col-4 col-12-medium">
								
																	
								<div class="col-12">
								<input type="text" name="price" placeholder="Price" />
									</div>									 	

								</div>
								<div class="col-4 col-12-medium">
								<div class="col-12">
									<label for="demo-copy">Upload car part pictures (.jpg,.png) (Multiple photos are allowed)</label>
									<input type="file" name="files[]" id="files" multiple accept=".jpg, .jpeg, .png" />

										</div>

								</div>


							</div>
							<br/>


							<div class="row">

							<div class="col-4 col-12-medium">

							<div class="col-12">
																	
							</div>
									
						</div>

								<div class="col-4 col-12-medium">
										<div class="col-12">
												<ul class="actions">
													<li><input type="submit" name="submit" value="Save record" class="primary" /></li>
												</ul>

															</div>
								</div>

							</div>
									
										<hr class="major" />

										
										</form>

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
										<li><a href="index.html">Homepage</a></li>
										<li><a href="generic.html">Generic</a></li>
										<li><a href="elements.html">Elements</a></li>
										<li>
											<span class="opener">Submenu</span>
											<ul>
												<li><a href="#">Lorem Dolor</a></li>
												<li><a href="#">Ipsum Adipiscing</a></li>
												<li><a href="#">Tempus Magna</a></li>
												<li><a href="#">Feugiat Veroeros</a></li>
											</ul>
										</li>
										
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


			<!--Script for jquery -->
	</body>
		<?php
			 
			    if(isset($_POST['submit'])){
			      $prod_name=$_POST['prod_name'];
			      $car_model=$_POST['car_model'];
			      $manuafacturer=$_POST['manuafacturer'];
			      $description=$_POST['description'];
			      $price=$_POST['price'];

			      //product_photos

	  $subdir=rand(1, 10000000);

      $target_folder = 'product_photos/'.$subdir;
      
      if (isset($_FILES['files'])) {

    if (!file_exists($target_folder)) {
        mkdir($target_folder, 0777, true);
    }

    foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['files']['name'][$key];
        $file_tmp = $_FILES['files']['tmp_name'][$key];

        $targetPath = $target_folder .'/'.$file_name;

        if (move_uploaded_file($file_tmp, $targetPath)) {
            echo "File '$file_name' uploaded successfully!<br>";
        } else {
            echo "Failed to upload '$file_name'.<br>";
        }
    }
} else {
    echo "No files uploaded.";
}
  
			     

			      $insert_teacher=mysqli_query($con,"insert into products(prod_name,car_model,manufacturer,price,description,photo_path)values('$prod_name','$car_model','$manuafacturer','$price','$description','$target_folder')"); // correct the photo with the correct path

			      if($insert_teacher){
			        echo 'record inserted';
			      }else{
			        echo mysqli_error($con);
			      }
			      }

			?>

</html>