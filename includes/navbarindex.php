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
	<link rel="stylesheet" href="css/style.css">
	<!-- Custom fonts for this template-->
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
			<a href="index.php" class="navbar-brand"><img src="img/logo.png"
				 alt="logo" title="Logo"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse"
			 data-target="#navbarResponsive">
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
	<!-- Logout Modal-->
	