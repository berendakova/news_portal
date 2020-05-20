<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Exo+2:300i,400,500,700,900&display=swap" rel="stylesheet">

	<script src="https://kit.fontawesome.com/b842fc6cc1.js"></script>

	<title>Admissions KPFU</title>
	<?php wp_head();  ?>
</head>
<body>

<header>
	<div class="container-fluid top-header">

		<div class="row top-menu justify-content-between align-items-center">

			<div class="col-auto order-1 actions left-side d-flex justify-content-between align-items-center">
				<a href="#" class="login top-menu-link">Вход</a>
				<a href="#" class="home top-menu-link"><i class="fas fa-home"></i></a>
			</div> <!-- actions left-side -->

			<div class="col-12 col-md order-md-2 order-3">
				<div class="row align-items-center justify-content-center">
					<div class="col-auto col-md main-menu">
						<div class="arrow arrow-left" onclick="topMenuSlider('arrow-left')"></div>
						<ul class="nav navbar-nav main-menu-wrapper d-flex align-items-center">
							<li class="top-menu-item opened-top-menu-item active">
								<a href="https://rector.kpfu.ru/" class="top-menu-link">Сайт ректора</a>
							</li>
							<li class="top-menu-item opened-top-menu-item">
								<a href="https://museums.kpfu.ru/" class="top-menu-link">Студенту</a>
							</li>
							<li class="top-menu-item opened-top-menu-item">
								<a href="https://museums.kpfu.ru/" class="top-menu-link">Выпускникам</a>
							</li>
							<li class="top-menu-item opened-top-menu-item">
								<a href="https://museums.kpfu.ru/" class="top-menu-link">Работникам и Работодателям</a>
							</li>
							<li class="top-menu-item opened-top-menu-item">
								<a href="https://museums.kpfu.ru/" class="top-menu-link">Инновации</a>
							</li>
							<li class="top-menu-item opened-top-menu-item">
								<a href="https://museums.kpfu.ru/" class="top-menu-link">Медиа</a>
							</li>
							<li class="top-menu-item opened-top-menu-item">
								<a href="https://museums.kpfu.ru/" class="top-menu-link">Музеи</a>
							</li>
							<li class="top-menu-item opened-top-menu-item">
								<a href="https://kpfu.ru/library" class="top-menu-link">Библиотека</a>
							</li>
							<li class="top-menu-item opened-top-menu-item">
								<a href="https://newspaper.kpfu.ru/" class="top-menu-link">Газета "Казанский университет"</a>
							</li>
							<li class="top-menu-item opened-top-menu-item">
								<a href="https://tv.kpfu.ru/" class="top-menu-link">Универ ТВ</a>
							</li>
							<li class="top-menu-item opened-top-menu-item">
								<a href="https://darelfonyn.kpfu.ru/" class="top-menu-link">Газета "Darelfonyn"</a>
							</li>
							<li class="closed-items">
								<div class="main-burger-menu" onclick="Togler('closed-items')">
									<div class="arrow"></div>
								</div>
								<ul class="closed-items-nav navbar-nav">
									<li class="top-menu-item closed-top-menu-item active">
										<a href="https://rector.kpfu.ru/" class="top-menu-link">Сайт ректора</a>
									</li>
									<li class="top-menu-item closed-top-menu-item active">
										<a href="https://museums.kpfu.ru/" class="top-menu-link">Студенту</a>
									</li>
									<li class="top-menu-item closed-top-menu-item active">
										<a href="https://museums.kpfu.ru/" class="top-menu-link">Выпускникам</a>
									</li>
									<li class="top-menu-item closed-top-menu-item active">
										<a href="https://museums.kpfu.ru/" class="top-menu-link">Работникам и Работодателям</a>
									</li>
									<li class="top-menu-item closed-top-menu-item active">
										<a href="https://museums.kpfu.ru/" class="top-menu-link">Инновации</a>
									</li>
									<li class="top-menu-item closed-top-menu-item active">
										<a href="https://museums.kpfu.ru/" class="top-menu-link">Медиа</a>
									</li>
									<li class="top-menu-item closed-top-menu-item active">
										<a href="https://museums.kpfu.ru/" class="top-menu-link">Музеи</a>
									</li>
									<li class="top-menu-item closed-top-menu-item active">
										<a href="https://kpfu.ru/library" class="top-menu-link">Библиотека</a>
									</li>
									<li class="top-menu-item closed-top-menu-item active">
										<a href="https://newspaper.kpfu.ru/" class="top-menu-link">Газета "Казанский университет"</a>
									</li>
									<li class="top-menu-item closed-top-menu-item active">
										<a href="https://tv.kpfu.ru/" class="top-menu-link">Универ ТВ</a>
									</li>
									<li class="top-menu-item closed-top-menu-item active">
										<a href="https://darelfonyn.kpfu.ru/" class="top-menu-link">Газета "Darelfonyn"</a>
									</li>
								</ul>
							</li>
						</ul>
						<div class="arrow arrow-right" onclick="topMenuSlider('arrow-right')"></div>
					</div>
				</div> <!-- row -->
			</div> <!-- col-md -->

			<div class="col-auto order-md-3 order-2 right-side">
				<div class="row justify-content-between">
					<div class="col-auto language">
						<button class="choose-lang-button" onclick="Togler('choose-lang','language')">
							<img class="country-flag" src="https://students.kpfu.ru/sharing/images/flags/russian-ico.png">
							<div class="arrow"></div>
						</button>
						<div class="choose-lang">
							<ul class="navbar-nav choose-lang-wrap">
								<li class="choose-lang-text choose-lang-item">
									Выберите язык:
								</li>
								<li class="choose-lang-item active">
									<a href="http://u75680.test-handyhost.ru/" target="blank">
									<span class="lang">Русский</span>
									<img class="country-flag" src="https://students.kpfu.ru/sharing/images/flags/russian-ico.png">
									</a>
								</li>
								<li class="choose-lang-item">
									<a href="https://tat.kpfu.ru/" target="blank">
									<span class="lang">Татар</span>
									<img class="country-flag" src="https://students.kpfu.ru/sharing/images/flags/tatar-ico.png">
									</a>
								</li>
								<li class="choose-lang-item">
									<a href="https://kpfu.ru/eng" target="blank">
									<span class="lang">English</span>
									<img class="country-flag" src="https://stud-new2.kpfu.ru/themes/inno/images/english-flag.svg">
									</a>
								</li>
								<li class="choose-lang-item">
									<a href="https://kpfu.ru/es" target="blank">
									<span class="lang">Español</span>
									<img class="country-flag" src="https://shelly.kpfu.ru/pdf/supersite/mainpage/images/flags/spanish-ico.png">
									</a>
								</li>
								<li class="choose-lang-item">
									<a href="https://kpfu.ru/de" target="blank">
									<span class="lang">Français</span>
									<img class="country-flag" src="https://shelly.kpfu.ru/pdf/supersite/mainpage/images/flags/french-ico.png">
									</a>
								</li>
								<li class="choose-lang-item">
									<a href="#">
									<span class="lang">Deutsche</span>
									<img class="country-flag" src="https://shelly.kpfu.ru/pdf/supersite/mainpage/images/flags/german-ico.png">
									</a>
								</li>
								<li class="choose-lang-item">
									<a href="https://kpfu.ru/tr" target="blank">
									<span class="lang">Türkçe</span>
									<img class="country-flag" src="https://shelly.kpfu.ru/pdf/supersite/mainpage/images/flags/turkish-ico.png">
									</a>
								</li>
								<li class="choose-lang-item">
									<a href="https://kpfu.ru/ar" target="blank">
									<span class="lang">العربية<</span>
									<img class="country-flag" src="https://shelly.kpfu.ru/pdf/supersite/mainpage/images/flags/arabic-ico.png">
									</a>
								</li>
								<li class="choose-lang-item">
									<a href="https://kpfu.ru/cn" target="blank">
									<span class="lang">中文</span>
									<img class="country-flag" src="https://shelly.kpfu.ru/pdf/supersite/mainpage/images/flags/chinese-ico.png">
									</a>
								</li>
								<li class="choose-lang-item">
									<a href="https://kpfu.ru/fa" target="blank">
									<span class="lang">فارسی/ </span>
									<img class="country-flag" src="https://shelly.kpfu.ru/pdf/supersite/mainpage/images/flags/persian-ico.png">
									</a>
								</li>
							</ul>
							<div class="closer" onclick="Togler('choose-lang','language')">
								<button class="closer-btn">
									<span>Menu</span>
								</button>
							</div>
						</div>
					</div>
					<div class="col-auto actions d-flex justify-content-between align-items-center">
						<div class="actions-item">
							<a href="http://kpfu.ru/sveden/internet-priemnaya"><i class="far fa-envelope"></i></a>
						</div>
						<div class="actions-item">
							<a href="http://kpfu.ru/sveden/karta-vseh-obektov"><i class="far fa-map"></i></a>
						</div>
						<div class="actions-item">
							<a href=""><i class="fas fa-search"></i></a>
						</div>
					</div>
				</div>
			</div> <!-- actions right-side -->

		</div>

	</div> <!-- top-menu -->

	<div class="menu-fixed">

		<div class="header-line">
			<div class="container-fluid">

				<div class="row justify-content-between align-items-center">

					<div class="col-auto d-flex justify-content-between align-items-center">
						<div class="logo-wrapper">
							<img class="logo" src="<?php echo get_template_directory_uri();  ?>/assets/img/logo.png">
						</div>
					</div>

					<div class="col-auto nav-toggle" onclick="Togler('admissions-nav-wrapper')">
						<button class="nav-toggle-button">
							<span>Menu</span>
						</button>
						<span class="menu-text">Меню</span>
					</div>

					<div class="col-auto text-right">
						<h3 class="phone">+7 (843) 292-73-40</h3>
					</div>

				</div> <!-- row -->

			</div> <!-- container -->
		</div> <!-- header-line -->

		<div class="admissions-nav-wrapper">
			<div class="fixed-content-container">
				<nav class="admissions-nav">
					<div class="search">
						<input placeholder="Что ищем?">
						<div class="close-menu" onclick="Togler('admissions-nav-wrapper')">
							menu
						</div>
					</div>
					<?php admissions_nav_menu(); ?>
					<div class="social-links">
						<div class="social-links-item">
							<a class="social-link" href="#">
								<i class="fas fa-envelope"></i>
							</a>
						</div>
						<div class="social-links-item">
							<a class="social-link" href="#">
								<i class="fab fa-twitter"></i>
							</a>
						</div>
						<div class="social-links-item">
							<a class="social-link" href="#">
								<i class="fab fa-facebook-f"></i>
							</a>
						</div>
					</div>
				</nav>
			</div>
		</div>

	</div>

</header>