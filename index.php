<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="fonts/fonts.css">
	<link rel="stylesheet" href="dist/app.css">

</head>

<body>

	<!-- header-section--home Этот класс должен быть у хедера только на главной -->

	<header class="header-section header-section--home">

		<div class="header-top">
			<div class="top-dd">
				<div class="dd-btn">
					<img src="../images/header-top-logo.svg" alt="logo" class="dd-btn__logo">
					Creating Better Business
					<svg class="dd-btn__arrow" width="13" height="13">
						<use xlink:href="#arrow-icon"></use>
					</svg>
				</div>
			</div>

			<div class="top-social">
				<p class="top-social__label d-none d-md-inline-flex">The Software Development Agency</p>
				<a href="#" class="top-social__link">
					<svg width="13" height="13">
						<use xlink:href="#linked-icon"></use>
					</svg>
					<span class="d-none d-md-inline-flex">Join us on Linkedin</span>
				</a>
			</div>
		</div>

		<nav class="header-nav">
			<a href="/" class="header-nav__logo">
				<img class="logo-white" src="../images/header-logo-white.png" alt="logo">
				<img class="logo-darck" src="../images/header-logo-darck.png" alt="logo">
			</a>

			<div class="nav-list">
				<a href="#" class="nav-list__item">
					Consulting
				</a>
				<a href="services.php" class="nav-list__item nav-list__item--drop">
					Services

					<div class="nav-drop-btn">
						<svg class="top-dd__arrow" width="13" height="13">
							<use xlink:href="#arrow-icon"></use>
						</svg>
					</div>
				</a>
				<a href="#" class="nav-list__item">Work</a>
				<a href="#" class="nav-list__item">About</a>
				<a href="#" class="nav-list__item">CONTACT</a>
			</div>

			<div class="burger d-lg-none">
				<button class="nav-btn d-flex align-items-center">
					<div class="nav-btn__line">
						<span class="bar1"></span>
						<span class="bar2"></span>
						<span class="bar3"></span>
					</div>
				</button>
			</div>
		</nav>

		<div class="nav-drop">
			<div class="container-fluid">
				<div class="row">
					<div class="col d-lg-none">
						<a href="#" class="drop-back">
							<svg width="13" height="13">
								<use xlink:href="#arrow-icon"></use>
							</svg>
							Back
						</a>
						<h3 class="drop-title">Services</h3>
					</div>
					<div class="col-lg-4">
						<div class="drop-list">
							<?php foreach (range(1, 3) as $item) : ?>
								<a href="#" class="drop-list__item">Bespoke Software Development</a>
							<?php endforeach; ?>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="drop-list">
							<?php foreach (range(1, 3) as $item) : ?>
								<a href="#" class="drop-list__item">Bespoke Software Development</a>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>


	</header>

	<?php

	$sections = [
		'intro',
		'services',
		'work',
		'we-build',
		'we-different',
	];
	foreach ($sections as $section) {
		include(__DIR__ . '/views/sections/home/' . $section . '.php');
	}

	require_once('views/modules/lets-start-talking.php');
	require_once('views/base/footer.php');
