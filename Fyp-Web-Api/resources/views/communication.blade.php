<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel Shop :: Administrative Panel</title>
	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="asset/plugins/fontawesome-free/css/all.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="asset/css/adminlte.min.css">
	<link rel="stylesheet" href="asset/css/custom.css">
</head>

<body class="hold-transition sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Right navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
			</ul>
			<div class="navbar-nav pl-2">
				<!-- Breadcrumb -->
			</div>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" data-widget="fullscreen" href="#" role="button">
						<i class="fas fa-expand-arrows-alt"></i>
					</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link p-0 pr-3" data-toggle="dropdown" href="#">
						<img src="asset/img/avatar5.png" class='img-circle elevation-2' width="40" height="40"
							alt="User Image">
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-3">
						<h4 class="h4 mb-0"><strong>Mohit Singh</strong></h4>
						<div class="mb-3">example@example.com</div>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-user-cog mr-2"></i> Settings
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-lock mr-2"></i> Change Password
						</a>
						<div class="dropdown-divider"></div>
						<form action="/logoutAdmin" method="POST">
                			@csrf
							<button type="submit" class="dropdown-item text-danger nav-link">
								<i class="fas fa-sign-out-alt mr-2"></i> Logout
							</button>
						<form>
					</div>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="#" class="brand-link">
				<img src="asset/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
					style="opacity: .8">
				<span class="brand-text font-weight-light">P2P Lending</span>
			</a>
			<!-- Sidebar -->
			<div class="sidebar">
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
						data-accordion="false">
						<li class="nav-item">
                            <a href="/dashboard" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/home" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>User Management</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/transactionmonitoring" class="nav-link">
                                <i class="nav-icon fas fa-search-dollar"></i>
                                <p>Transaction Monitoring</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/transfermonitoring" class="nav-link">
                                <i class="nav-icon fas fa-exchange-alt"></i>
                                <p>Transfer Monitoring</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/communication" class="nav-link">
                                <i class="nav-icon fas fa-comments"></i>
                                <p>Communication Tools</p>
                            </a>
                        </li>
					</ul>
				</nav>
			</div>
		</aside>
		<!-- Content Wrapper. Contains page content -->
		<div class="wrapper">
			<!-- Navbar and Sidebar would be here -->

			<div class="content-wrapper">
				<section class="content-header">
					<div class="container-fluid">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Dashboard</h1>
							</div>
							<div class="col-sm-6">
								<ol class="breadcrumb float-sm-right">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active">Dashboard</li>
								</ol>
							</div>
						</div>
					</div>
				</section>

				<!-- Messaging System -->
				<section class="content">
					<div class="container-fluid">
						<div class="row mb-2">
							<div class="col-12">
								<h2>Internal Messaging</h2>
								<textarea class="form-control mb-3" rows="3"
									placeholder="Type your message here..."></textarea>
								<button class="btn btn-primary">Send Message</button>
							</div>
						</div>
					</div>
				</section>

				<!-- Notifications -->
				<section class="content">
					<div class="container-fluid">
						<div class="row mb-2">
							<div class="col-12">
								<h2>Notifications</h2>
								<ul class="list-group">
									<li class="list-group-item">New user registered</li>
									<li class="list-group-item">Transaction ID #1234 approved</li>
									<li class="list-group-item">Password reset requested</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<!-- Email Integration -->
				<section class="content">
					<div class="container-fluid">
						<div class="row mb-2">
							<div class="col-12">
								<h2>Email Integration</h2>
								<form>
									<div class="form-group">
										<label for="emailSubject">Email Subject:</label>
										<input type="text" class="form-control" id="emailSubject">
									</div>
									<div class="form-group">
										<label for="emailBody">Email Body:</label>
										<textarea class="form-control" id="emailBody" rows="5"></textarea>
									</div>
									<button type="submit" class="btn btn-primary">Send Email</button>
								</form>
							</div>
						</div>
					</div>
				</section>

				<!-- Announcement System -->
				<section class="content">
					<div class="container-fluid">
						<div class="row mb-2">
							<div class="col-12">
								<h2>Announcements</h2>
								<div class="alert alert-info">System maintenance scheduled for May 30, 2024.</div>
								<div class="alert alert-success">New feature: Real-time transaction monitoring.</div>
							</div>
						</div>
					</div>
				</section>

				<!-- Activity Feed -->
				<section class="content">
					<div class="container-fluid">
						<div class="row mb-2">
							<div class="col-12">
								<h2>Activity Feed</h2>
								<ul class="list-group">
									<li class="list-group-item">John Doe logged in</li>
									<li class="list-group-item">Jane Smith approved a transaction</li>
									<li class="list-group-item">New loan application submitted</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
		</div>
		<!-- /.content-wrapper -->
		<footer class="main-footer">

			<strong>Copyright &copy; 2014-2022 AmazingShop All rights reserved.
		</footer>
	</div>

	<!-- ./wrapper -->
	<!-- jQuery -->
	<script src="asset/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="asset/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="asset/js/demo.js"></script>

</html>