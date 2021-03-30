<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>HTML5 Website with Bootstrap | Responsive Website Design</title>
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- Bootstrap 4.5 CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="css/bangthidua.css">
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
</head>

<body>
	

	<!-- Top Bar -->

	<div class="top-bar">
		<div class="container">
			<div class="col-12 text-right">
				<p><a href=""> </a></p>
			</div>
		</div>
	</div>
	<!-- End Top Bar -->


	<!-- Navigation -->

	<nav class="navbar bg-light navbar-light navbar-expand-lg">
		<div class="container">
			<a href="index.php" class="navbar-brand"><img src="img/logo.png" alt="logo" title="Logo"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="index.php" class="nav-link active">Trang chủ</a></li>
					<li class="nav-item"><a href="lichlam.php" class="nav-link">Lịch làm</a></li>
				
					<li class="nav-item"><a href="bangthidua.php" class="nav-link">Bảng thi đua</a></li>
					<li class="nav-item"><a href="dsnhanvien.php" class="nav-link">Danh sách nhân viên</a></li>
				
					<li class="nav-item">
					<form action="user.php" method="post">
                                        <input type="hidden" name="userinfor" value="tien">
                                        <button type="submit" name="delete_btn" class="btn btn-danger"> Tải Khoản</button>
                                    </form>
					
					</li>

				</ul>


			</div>

		</div>
	</nav>

	<!-- End Navigation -->

	<?php 
	include_once 'controller/controller_login.php';
	include_once 'model/UserDB.php';
	$dt = new UserDB();
	$df = new controller_login();
	?>
	<!-- Image Carousel -->

	<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="1800">




		<!-- Carousel Content -->
		<div class="carousel123">
			<div class="carousel-item active">
				<img src="img/WaHhUiR.png" alt="" class="w-100 h-100">

				<div class="tablett">
					<h3>Bảng thi đua nhân viên <?php  $date = getdate();   echo "Tháng: ".$date['mon'];
    echo "/".$date['year']; ?> </h3>
					<table border="3">
						<tr height="60">
							<th width="300">Xếp hạng</th>
							<th width="300">Thông tin</th>
							<th width="300">Lượng bình chọn</th>
							<th width="300"> Thu nhập</th>
							<th width="300">Thành tích trong tháng</th>
						</tr>
						<?php $t=1;for($k=0;$k<6;$k++): ?>
						<tr height="100">
							<td>
								<div class="rating">
									<div class="number mr-4 pt-3">
										<h1><?php echo $t++; ?></h1>
									</div>
									<img src="<?php echo $df->sapxep()[$k]->getImage(); ?>" alt="" width="80" height="80">
								</div>
							</td>
							<td>
								<a href="index.html"><?php echo $df->sapxep()[$k]->getName(); ?></a>
								<p><?php echo $df->sapxep()[$k]->getPosition(); ?></p>
							</td>
							<td>
								<h4><?php echo $df->sapxep()[$k]->getVotes(); ?> Phiếu</h4>
							</td>
							<td>
								<h3><?php echo $df->sapxep()[$k]->getSalary(); ?>đ</h3>
							</td>
							<td>
								<p><?php echo $df->sapxep()[$k]->getAchievements(); ?></p>
							</td>
						</tr>
						<?php endfor; ?>


					</table>

				</div>
			</div>


		</div>

		<!-- End Carousel Content -->


		<!-- Previous & Next Buttons -->

		<!-- End Previous & Next Buttons -->
	</div>

	<!-- End Image Carousel -->


	<!-- Main Page Heading -->
	<div class="col-12 text-center mt-5">
		<h1 class="text-dark pt-4">Built with Ease</h1>

		<div class="border-top border-primary w-25 mx-auto my-3"></div>
		<p class="lead">For all of the chempions in this world</p>
	</div>

	<!-- Three Column Section -->

	<!-- Start Footer -->
	<footer>
		<div class="container">
			<div class="row text-light text-center py-4 justify-content-center">
				<div class="col-sn-10 col-md-8 col-lg-6">

					<img src="img/logo-white.png" alt="">
					<p>At our core is a colection of design and development solutions that represent everything your
						business needs to compete in the modern markerplace</p>

					<ul class="social pt-3">
						<li><a href="https://www.facebook.com/" target="-blank"><i class="fab fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/" target="-blank"><i class="fab fa-twitter"></i></a></li>
						<li><a href="https://instagram.com/" target="-blank"><i class="fab fa-instagram"></i></a></li>
						<li><a href="https://youtube.com" target="-blank"><i class="fab fa-youtube"></i></a></li>
					</ul>
				</div>


			</div>
		</div>
	</footer>
	<!-- End Footer -->


	<!-- Start Socket -->
	<div class="socket text-light text-center py-3">
		<p>&copy: <a href="https://www.google.com.vn/" target="-blank">https://www.google.com.vn/</a></p>
	</div>
	<!-- End Socket -->



	<!-- Script Source Files -->

	<!-- jQuery -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<!-- Bootstrap 4.5 JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>
	<!-- Font Awesome -->
	<script src="js/all.min.js"></script>

	<!-- End Script Source Files -->
</body>

</html>