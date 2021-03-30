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
	<link rel="stylesheet" href="css/lichlam.css">

	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
</head>

<body>
<?php
include_once 'model/CalendarDB.php';
include_once 'model/Calendar.php'; 
include_once 'model/UserDB.php'; 
$mang=[];
$dh= new CalendarDB();
$dr= new UserDB();
?>
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


	<!-- Image Carousel -->
	<div id="bnt">
		<h3>Oct9-Oct15</h3>
		<div class="ml-auto">
			<button class="btn btn-outline-secondary">Chuyển đổi lịch tự động</button>
			<button class="btn btn-outline-secondary">Hôm nay</button>
			<button class="btn btn-outline-secondary">Tuần</button>
			<button class="btn btn-outline-secondary"><img src="img/printer.png" alt=""></button>
			<button class="btn btn-outline-secondary"><img src="img/setting.png" alt=""></button>
			<button class="btn btn-outline-secondary"><img src="img/resize.png" alt=""></button>
		</div>
	</div>


	</div>
	<div class="row justify-content-center">

		<table border="2" height="625">
			<tr height="50" bgcolor="#edeef0">
				<th width="200"> Employee</th>
				<th width="150"> Mon</th>
				<th width="150"> Tue</th>
				<th width="150"> Wed</th>
				<th width="150"> Thu</th>
				<th width="150"> Fri</th>
				<th width="150"> Sat</th>
				<th width="150"> Sun</th>
			</tr>
						<?php
$names = ["tien", "hoàng", "ngo thanh tan"];

foreach ($names as $value): ?>
			<tr height="60" width="300">
				<td>
					<div class="ifor">
						<img src="<?php echo $dr->getUserByName($value)[0]->getImage(); ?>" alt="" width="50" height="50">
						<div class="name">
							<h6><?php echo $value; ?></h6>
							<div class="clock"><img src="img/clock.png" alt="">
								<p>24/40</p>
							</div>
						</div>

					</div>
				</td>
				<?php $da=0; $t=1;$f=1;  $mang=$dh->getCalendarByName($value); for($i=2;$i<=8;$i++):?>
					<!--  thử đi�?u kiện so sánh biến chạy với biến ngày nếu trùng thì xanh k thì trắng -->
				<td>
					<?php if(0==($t+$f)){ $da++;} ?>
					<div>
						<h6>
							
							<?php
							if(isset($mang[$da])){
								if($i==$mang[$da]->getDay()){
								$t=0;
									echo $mang[$da]->getPlace(); 
									}
							}else{echo "Trống";}
						 ?>
				
			</h6>
						<p><?php 
						if(isset($mang[$da])){
							if($i==$mang[$da]->getDay()){
							$f=0;
				echo $mang[$da]->getTime(); 
				}
						}else{ echo "Lịch Làm";} 
						
				?>
				
			</p>
					</div>
				</td>
				<?php endfor; ?>
				

			</tr>
			<?php endforeach; ?>
		
		</table>

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