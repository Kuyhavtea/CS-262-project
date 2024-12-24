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

				<!-- Reports Section -->
				<section class="content">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12">
								<h2>Reports</h2>

								<!-- User Activity Reports -->
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">User Activity Reports</h3>
									</div>
									<div class="card-body">
										<canvas id="userActivityChart"></canvas>
									</div>
								</div>

								<!-- Financial Reports -->
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Financial Reports</h3>
									</div>
									<div class="card-body">
										<canvas id="financialReportsChart"></canvas>
									</div>
								</div>

								<!-- System Performance Reports -->
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">System Performance Reports</h3>
									</div>
									<div class="card-body">
										<canvas id="systemPerformanceChart"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- Integrations Section -->
				<section class="content">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12">
								<h2>Integrations</h2>

								<!-- Payment Gateways -->
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Payment Gateways</h3>
									</div>
									<div class="card-body">
										<ul class="list-group">
											<li class="list-group-item">PayPal</li>
											<li class="list-group-item">Stripe</li>
											<li class="list-group-item">Square</li>
										</ul>
									</div>
								</div>

								<!-- Email Services -->
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Email Services</h3>
									</div>
									<div class="card-body">
										<ul class="list-group">
											<li class="list-group-item">Mailchimp</li>
											<li class="list-group-item">SendGrid</li>
										</ul>
									</div>
								</div>

								<!-- CRM Systems -->
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">CRM Systems</h3>
									</div>
									<div class="card-body">
										<ul class="list-group">
											<li class="list-group-item">Salesforce</li>
											<li class="list-group-item">HubSpot</li>
										</ul>
									</div>
								</div>

								<!-- Analytics Tools -->
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Analytics Tools</h3>
									</div>
									<div class="card-body">
										<ul class="list-group">
											<li class="list-group-item">Google Analytics</li>
											<li class="list-group-item">Mixpanel</li>
										</ul>
									</div>
								</div>

								<!-- Third-party APIs -->
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Third-party APIs</h3>
									</div>
									<div class="card-body">
										<ul class="list-group">
											<li class="list-group-item">Custom API 1</li>
											<li class="list-group-item">Custom API 2</li>
										</ul>
									</div>
								</div>

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

		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

		<script>

			// Example chart setup
			const userActivityCtx = document.getElementById('userActivityChart').getContext('2d');
			const financialReportsCtx = document.getElementById('financialReportsChart').getContext('2d');
			const systemPerformanceCtx = document.getElementById('systemPerformanceChart').getContext('2d');

			// User Activity Chart
			const userActivityChart = new Chart(userActivityCtx, {
				type: 'line',
				data: {
					labels: ['January', 'February', 'March', 'April', 'May', 'June'],
					datasets: [{
						label: 'User Activity',
						data: [65, 59, 80, 81, 56, 55],
						backgroundColor: 'rgba(75, 192, 192, 0.2)',
						borderColor: 'rgba(75, 192, 192, 1)',
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						y: {
							beginAtZero: true
						}
					}
				}
			});

			// Financial Reports Chart
			const financialReportsChart = new Chart(financialReportsCtx, {
				type: 'bar',
				data: {
					labels: ['January', 'February', 'March', 'April', 'May', 'June'],
					datasets: [{
						label: 'Revenue',
						data: [12000, 15000, 18000, 22000, 25000, 30000],
						backgroundColor: 'rgba(153, 102, 255, 0.2)',
						borderColor: 'rgba(153, 102, 255, 1)',
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						y: {
							beginAtZero: true
						}
					}
				}
			});

			// System Performance Chart
			const systemPerformanceChart = new Chart(systemPerformanceCtx, {
				type: 'pie',
				data: {
					labels: ['Uptime', 'Downtime'],
					datasets: [{
						label: 'System Performance',
						data: [99.5, 0.5],
						backgroundColor: [
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 99, 132, 0.2)'
						],
						borderColor: [
							'rgba(54, 162, 235, 1)',
							'rgba(255, 99, 132, 1)'
						],
						borderWidth: 1
					}]
				},
				options: {
					responsive: true
				}
			});
		</script>
</body>

</html>