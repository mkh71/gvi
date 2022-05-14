<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<title>{{ config('app.name', 'BPAro') }}</title>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<link href="{{ url('/assets/img/favicon.png') }}" rel="icon">
		<link rel="stylesheet" href="{{ url('/assets/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ url('/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
		<link rel="stylesheet" href="{{ url('/assets/plugins/fontawesome/css/all.min.css') }}">
		<link rel="stylesheet" href="{{ url('/assets/css/style.css') }}">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="{{ url('/assets/js/html5shiv.min.js') }}"></script>
			<script src="{{ url('/assets/js/respond.min.js') }}"></script>
		<![endif]-->
		@yield('css')

	</head>
	<body class="account-page">
		<div class="main-wrapper">
			<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="index.html" class="navbar-brand logo">
							<img src="{{ url('/assets/img/logo.png') }}" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="{{ url('/') }}" class="menu-logo">
								<img src="{{ url('/assets/img/logo.png') }}" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li class="has-submenu">
								<li><a href="login.html">Home</a></li>
							</li>

							<li class="login-link">
								<a href="login.html">Login / Signup</a>
							</li>
						</ul>
					</div>
					<ul class="nav header-navbar-rht">
						<li class="nav-item contact-item">
							<div class="header-contact-img">
								<i class="far fa-hospital"></i>
							</div>
							<div class="header-contact-detail">
								<p class="contact-header">Contact</p>
								<p class="contact-info-header"> +1 XXX XXX XXXX</p>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link header-login" href="{{ url('/login') }}">login / Signup </a>
						</li>
					</ul>
				</nav>
			</header>

			<div class="content">
				@yield('content')
			</div>

			<footer class="footer">
                <div class="footer-bottom">
					<div class="container-fluid">
						<div class="copyright">
							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="copyright-text">
										<p class="mb-0">&copy; 2021 BPAro. All rights reserved.</p>
									</div>
								</div>
								<div class="col-md-6 col-lg-6">
									<div class="copyright-menu">
										<ul class="policy-menu">
											<li><a href="{{ url('/term-condition') }}">Terms and Conditions</a></li>
											<li><a href="{{ url('/privacy-policy') }}">Policy</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<script src="{{ url('/assets/js/jquery.min.js') }}"></script>

		<script src="{{ url('/assets/js/popper.min.js') }}"></script>
		<script src="{{ url('/assets/js/bootstrap.min.js') }}"></script>

		<script src="{{ url('/assets/js/script.js') }}"></script>
		@yield('javascript')
	</body>
</html>
