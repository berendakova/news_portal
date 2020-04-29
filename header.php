<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Exo+2:300i,400,500,700,900&display=swap" rel="stylesheet">

	<script src="https://kit.fontawesome.com/b842fc6cc1.js"></script>

	<title>Olimpiady</title>
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
						<ul class="nav navbar-nav justify-content-between">
							<li class="top-menu-item active">
								<a href="https://rector.kpfu.ru/" class="top-menu-link">Сайт ректора</a>
							</li>
							<li class="closed-items">
								<div class="main-burger-menu" onclick="Togler('closed-items-nav')">
									<div class="arrow"></div>
								</div>
								<ul class="closed-items-nav navbar-nav">
									<li class="top-menu-item">
										<a href="https://museums.kpfu.ru/" class="top-menu-link">Музеи</a>
									</li>
									<li class="top-menu-item">
										<a href="https://kpfu.ru/library" class="top-menu-link">Библиотека</a>
									</li>
									<li class="top-menu-item">
										<a href="https://newspaper.kpfu.ru/" class="top-menu-link">Газета "Казанский университет"</a>
									</li>
									<li class="top-menu-item">
										<a href="https://tv.kpfu.ru/" class="top-menu-link">Универ ТВ</a>
									</li>
									<li class="top-menu-item">
										<a href="https://darelfonyn.kpfu.ru/" class="top-menu-link">Газета "Darelfonyn"</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div> <!-- row -->
			</div> <!-- col-md -->

			<div class="col-auto order-md-3 order-2 right-side">
				<div class="row justify-content-between">
					<div class="col-auto language">
						<button class="choose-lang-button" onclick="Togler('choose-lang')">
							<img class="country-flag" src="https://students.kpfu.ru/sharing/images/flags/russian-ico.png">
							<div class="arrow"></div>
						</button>
						<ul class="navbar-nav choose-lang">
							<li class="choose-lang-item">
								<span class="lang">Русский</span>
								<img class="country-flag" src="https://students.kpfu.ru/sharing/images/flags/russian-ico.png">
							</li>
							<li class="choose-lang-item">
								<span class="lang">Русский</span>
								<img class="country-flag" src="https://students.kpfu.ru/sharing/images/flags/russian-ico.png">
							</li>
							<li class="choose-lang-item">
								<span class="lang">Русский</span>
								<img class="country-flag" src="https://students.kpfu.ru/sharing/images/flags/russian-ico.png">
							</li>
							<li class="choose-lang-item">
								<span class="lang">Русский</span>
								<img class="country-flag" src="https://students.kpfu.ru/sharing/images/flags/russian-ico.png">
							</li>
						</ul>
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
					<ul class="nav nav-offset-left d-flex justify-content-lg-center align-item-center justify-content-start">
						<li class="admissions-nav-item">
							<a class="admissions-nav-link first-step-link">
								Приемня комиссия
							</a>
							<div class="row hidden-content m-0">
								<div class="content-container">
									<div class="row justify-content-start m-auto">
										<div class="hidden-content-list be-student">
											<a href="http://abiturient.kpfu.ru/" class="hidden-content-link">
												<div>
													<h4 class="title">Регистрация на сайте</h4>
													<img src="https://admissions.kpfu.ru//themes/inno/images/menu-logo.jpg">
												</div>
											</a>
										</div>
										<div class="col-12 col-lg-auto hidden-content-list">
											<a href="#" class="hidden-content-link second-step-link">
												<h4 class="title">Общая информация</h4>
											</a>
											<ul class="nav row">
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/comission" class="hidden-content-link">Сотрудники отдела организации приема абитуриентов</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/selection-committee/faq" class="hidden-content-link">Часто задаваемые вопросы</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/regulations/comission-docs" class="hidden-content-link">Нормативные документы приемной комиссии</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/kontakty/kontakty-priemnoi-komissii" class="hidden-content-link">Контакты</a>
												</li>
											</ul>
										</div> <!-- hidden-content-list  -->
										<div class="col-12 col-lg-auto hidden-content-list">
											<a href="#" class="hidden-content-link second-step-link">
												<h4 class="title">Медия</h4>
											</a>
											<ul class="nav row">
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/selection-committee/calendar/month?field_tip_meropriatia_target_id%5B145%5D=145&field_tip_meropriatia_target_id%5B2%5D=2&field_tip_meropriatia_target_id%5B3%5D=3&field_tip_meropriatia_target_id%5B4%5D=4&field_tip_meropriatia_target_id%5B7%5D=7&field_tip_meropriatia_target_id%5B1%5D=1" class="hidden-content-link">Мероприятия и события</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/comission-news?field_kategoria_novosti_target_id%5B14%5D=14&field_kategoria_novosti_target_id%5B12%5D=12&field_kategoria_novosti_target_id%5B9%5D=9&field_kategoria_novosti_target_id%5B15%5D=15&field_kategoria_novosti_target_id%5B18%5D=18&field_kategoria_novosti_target_id%5B13%5D=13&field_kategoria_novosti_target_id%5B11%5D=11&field_kategoria_novosti_target_id%5B17%5D=17&field_kategoria_novosti_target_id%5B16%5D=16&field_kategoria_novosti_target_id%5B8%5D=8" class="hidden-content-link">Новости приемной комиссии</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://buklet.000webhostapp.com/mobile/index.html" class="hidden-content-link">Буклет</a>
												</li>
											</ul>
										</div> <!-- hidden-content-list  -->

									</div> <!-- row -->

								</div> <!-- content-container -->
							</div> <!-- hidden-content -->
						</li>
						<li class="admissions-nav-item">
							<a class="admissions-nav-link first-step-link">
								Бакалавриат/Специалитет
							</a>
							<div class="row hidden-content m-0">
								<div class="content-container">
									<div class="row justify-content-start m-auto">
										<div class="col-lg-auto hidden-content-list be-student">
											<a href="http://abiturient.kpfu.ru/" class="hidden-content-link s">
												<div>
													<h4 class="title">Регистрация на сайте</h4>
													<img src="https://admissions.kpfu.ru//themes/inno/images/menu-logo.jpg">
												</div>
											</a>
										</div>

										<div class="col-12 col-lg-auto hidden-content-list">
											<a href="#" class="hidden-content-link second-step-link">
												<h4 class="title">Перед поступлением</h4>
											</a>
											<ul class="nav row">
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/informirovanie-o-prieme-bakalavriat/specialitet-magistratura" class="hidden-content-link">Информирование о приеме</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/pravila-priema-bakalavriat/specialitet-magistratura" class="hidden-content-link">Правила приема</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/ege" class="hidden-content-link">Калькулятор ЕГЭ</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/plan-priema-2020-kolicestvo-mest-vstupitelnye-ispytania-i-minimalnye-bally" class="hidden-content-link">План приема (количество баллов, вступительные испытания и минимальные баллы)</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/sroki-provedenia-priema-bakalavriat/specialitet-magistratura" class="hidden-content-link">Сроки проведения приема</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/shema-postuplenia-bakalavriat/specialitet" class="hidden-content-link">Схема поступления</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://buklet.000webhostapp.com/mobile/index.html" class="hidden-content-link">Буклет</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/sites/default/files/Priem/Instruktsia_dlya_bakalavrov%20%281%29.pdf" class="hidden-content-link">Справочник для поступающих</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priemnaa-komissia/medicinskii-osmotr" class="hidden-content-link">Медицинский осмотр</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/ege" class="hidden-content-link">График проведения Дней открытых дверей 2019-2020</a>
												</li>
											</ul>
										</div> <!-- hidden-content-list  -->

										<div class="col-12 col-lg-auto hidden-content-list">
											<a href="#" class="hidden-content-link second-step-link">
												<h4 class="title">Процедура приема</h4>
											</a>
											<ul class="nav row">
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priemnaa-komissia/podaca-dokumentov-bakalavriat/specialitet" class="hidden-content-link">Подача документов</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/raspisanie-vstupitelnyh-ispytanii-bakalavriat/specialitet-2019" class="hidden-content-link">Расписание вступительных экзаменов</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/distancionnye-vstupitelnye-ispytania" class="hidden-content-link">Дистанционные вступительные экзамены</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/programmy-vstupitelnyh-ispytanii-skaly-i-kriterii-ocenivania-bakalavriat" class="hidden-content-link">Программа вступительных испытаний</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priemnaa-komissia/priemnaa-kampania/priem-v-predelah-osoboi-kvoty-lgotniki" class="hidden-content-link">Прием в пределах особой квоты (льготники)</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/priem-lic-s-ogranicennymi-vozmoznostami-zdorova" class="hidden-content-link">Прием лиц с ограниченными возможностями здоровья</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priemnaa-komissia/priem-pobeditelei-i-prizerov-olimpiad-bakalavriat/specialitet" class="hidden-content-link">Прием победителей и призеров олимпиад</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priemnaa-komissia/stipendia-rektora-stoballnik" class="hidden-content-link">Стипендия ректора "Стобалльник"</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/preimusestvennoe-pravo-zacislenia" class="hidden-content-link">Преимущественное право зачисления</a>
												</li>
	 											<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/ucet-individualnyh-dostizenii" class="hidden-content-link">Учёт индивидуальных достижений</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priemnaa-komissia/priemnaa-kampania/priem-na-celevoe-obucenie-bakalavriat/specialitet" class="hidden-content-link">Прием на целевые места</a>
												</li>	
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/stoimost-obucenia-0" class="hidden-content-link">Стоимость обучения</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priemnaa-komissia/obsezitia" class="hidden-content-link">Общежития</a>
												</li>		
											</ul>
										</div> <!-- hidden-content-list  -->

										<div class="col-12 col-lg-auto hidden-content-list">
											<a href="#" class="hidden-content-link second-step-link">
												<h4 class="title">Результаты приема</h4>
											</a>
											<ul class="nav row">
												<li class="col-lg-auto hidden-content-item">
													<a href="https://abiturient.kpfu.ru/entrant/abit_entrant_originals_list?p_open=&p_typeofstudy=&p_faculty=&p_speciality=&p_inst=0&p_category=" class="hidden-content-link">Списки поступающих</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/prikazy-o-zacislenii-2018" class="hidden-content-link">Приказы о зачислении</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/informacia-o-kolicestve-podannyh-zaavlenii-o-prieme" class="hidden-content-link">Поданные заявления о приеме</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/reception-results?field_god_priema_target_id=41" class="hidden-content-link">Итоги приема. Архив</a>
												</li>
											</ul>
										</div> <!-- hidden-content-list  -->

									</div> <!-- row -->

								</div> <!-- content-container -->

							</div> <!-- hidden-content -->
						</li>
						<li class="admissions-nav-item">
							<a class="admissions-nav-link first-step-link">
								Магистратура
							</a>
							<div class="row hidden-content m-0">
								<div class="content-container">
									<div class="row justify-content-start m-auto">
										<div class="col-lg-auto hidden-content-list be-student">
											<a href="http://abiturient.kpfu.ru/" class="hidden-content-link s">
												<div>
													<h4 class="title">Регистрация на сайте</h4>
													<img src="https://admissions.kpfu.ru//themes/inno/images/menu-logo.jpg">
												</div>
											</a>
										</div>

										<div class="col-12 col-lg-auto hidden-content-list">
											<a href="#" class="hidden-content-link second-step-link">
												<h4 class="title">Перед поступлением</h4>
											</a>
											<ul class="nav row">
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/informirovanie-o-prieme-bakalavriat/specialitet-magistratura" class="hidden-content-link">Информирование о приеме</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/pravila-priema" class="hidden-content-link">Правила приема</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/plan-priema-2020-kolicestvo-mest-vstupitelnye-ispytania-i-minimalnye-bally" class="hidden-content-link">План приема (количество баллов, вступительные испытания и минимальные баллы)</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/sroki-provedenia-priema-bakalavriat/specialitet-magistratura" class="hidden-content-link">Сроки проведения приема</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priemnaa-komissia/grafik-provedenia-dnei-otkrytyh-dverei" class="hidden-content-link">График приема Дней открытых дверей</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/olimpiada-dla-postupausih-v-magistraturu-magistrant-kfu" class="hidden-content-link">Олимпиада для поступающих в магистратуру "Я - Магистрант КФУ"</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/olimpiada-federalnyh-universitetov-dla-postupausih-v-magistraturu-v-2020-g" class="hidden-content-link">Олимпиада федеральных университетов для поступающих в магистратуру в 2020 г.</a>
												</li>
											</ul>
										</div> <!-- hidden-content-list  -->

										<div class="col-12 col-lg-auto hidden-content-list">
											<a href="#" class="hidden-content-link second-step-link">
												<h4 class="title">Процедура приема</h4>
											</a>
											<ul class="nav row">
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/instrukcia-po-postupleniu-magistratura" class="hidden-content-link">Подача документов</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/raspisanie-vstupitelnyh-ispytanii-magistratura-2020" class="hidden-content-link">Расписание вступительных экзаменов</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/programmy-vstupitelnyh-ispytanii-magistratura" class="hidden-content-link">Программа вступительных экзаменов</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/priem-lic-s-ogranicennymi-vozmoznostami-zdorova-0" class="hidden-content-link">Прием лиц с ограниченными возможностями здоровья</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/ucet-individualnyh-dostizenii-0" class="hidden-content-link">Учет индивидуальных достижений</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/priem-na-celevye-mesta" class="hidden-content-link">Прием на целевые места</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/stoimost-obucenia-0" class="hidden-content-link">Стоимость обучения</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priemnaa-komissia/medicinskii-osmotr" class="hidden-content-link">Медицинский осмотр</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priemnaa-komissia/obsezitia" class="hidden-content-link">Общежития</a>
												</li>

											</ul>
										</div> <!-- hidden-content-list  -->

										<div class="col-12 col-lg-auto hidden-content-list">
											<a href="#" class="hidden-content-link second-step-link">
												<h4 class="title">Результаты приема</h4>
											</a>
											<ul class="nav row">
												<li class="col-lg-auto hidden-content-item">
													<a href="https://abiturient.kpfu.ru/entrant/abit_entrant_originals_list?p_open=&p_typeofstudy=&p_faculty=&p_speciality=&p_inst=0&p_category=" class="hidden-content-link">Списки поступающих</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/prikazy-o-zacislenii-2018" class="hidden-content-link">Приказы о зачислении</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/informacia-o-kolicestve-podannyh-zaavlenii-o-prieme" class="hidden-content-link">Поданные заявления о приеме</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/reception-results?field_god_priema_target_id=41" class="hidden-content-link">Итоги приема. Архив</a>
												</li>
											</ul>
										</div> <!-- hidden-content-list  -->

									</div> <!-- row -->

								</div> <!-- content-container -->

							</div> <!-- hidden-content -->
						</li>
						<li class="admissions-nav-item">
							<a class="admissions-nav-link first-step-link">
								Аспирантура
							</a>
							<div class="row hidden-content m-0">
								<div class="content-container">
									<div class="row justify-content-start m-auto">
										<div class="col-lg-auto hidden-content-list be-student">
											<a href="http://abiturient.kpfu.ru/" class="hidden-content-link s">
												<div>
													<h4 class="title">Регистрация на сайте</h4>
													<img src="https://admissions.kpfu.ru//themes/inno/images/menu-logo.jpg">
												</div>
											</a>
										</div>

										<div class="col-12 col-lg-auto hidden-content-list">
											<a href="#" class="hidden-content-link second-step-link">
												<h4 class="title">Перед поступлением</h4>
											</a>
											<ul class="nav row">
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/kolicestvo-mest-dla-priema-v-aspiranturu" class="hidden-content-link">План приема</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/napravlenia-obucenia-v-aspiranture" class="hidden-content-link">Направления обучения</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/stoimost-obucenia-v-aspiranture" class="hidden-content-link">Стоимость обучения</a>
												</li>
											</ul>
										</div> <!-- hidden-content-list  -->

										<div class="col-12 col-lg-auto hidden-content-list">
											<a href="#" class="hidden-content-link second-step-link">
												<h4 class="title">Процедура приема</h4>
											</a>
											<ul class="nav row">
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/priem-2020" class="hidden-content-link">План приема</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/instrukcia-po-postupleniu-0" class="hidden-content-link">Инструкция по поступлению</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/perecen-vstupitelnyh-ispytanii" class="hidden-content-link">Перечень вступлительных экзаменов</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/programmy-vstupitelnyh-ekzamenov-v-aspiranturu" class="hidden-content-link">Программа вступительных экзаменов</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/raspisanie-vstupitelnyh-ekzamenov" class="hidden-content-link">Расписание вступительных экзаменов</a>
												</li>
											</ul>
										</div> <!-- hidden-content-list  -->


										<div class="col-12 col-lg-auto hidden-content-list">
											<a href="#" class="hidden-content-link second-step-link">
												<h4 class="title">Результаты приема</h4>
											</a>
											<ul class="nav row">
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/spiski-rekomendovannyh-v-aspiranturu" class="hidden-content-link">Списки рекомендованных в аспирантуру</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://shelly.kpfu.ru/pls/iias/originals_list" class="hidden-content-link">Списки поступающих</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/programmy-vstupitelnyh-ekzamenov-v-aspiranturu" class="hidden-content-link">Правила подачи и рассмотрения аппеляций по результатам вступительных экзаменов</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/prikazy-o-zacislenii" class="hidden-content-link">Приказы о зачислении</a>
												</li>
											</ul>
										</div> <!-- hidden-content-list  -->

									</div> <!-- row -->

								</div> <!-- content-container -->

							</div> <!-- hidden-content -->
						</li>
						<li class="admissions-nav-item">
							<a class="admissions-nav-link first-step-link">
								Ординатура
							</a>
							<div class="row hidden-content m-0">
								<div class="content-container">
									<div class="row justify-content-start m-auto">
										<div class="col-lg-auto hidden-content-list be-student">
											<a href="http://abiturient.kpfu.ru/" class="hidden-content-link s">
												<div>
													<h4 class="title">Регистрация на сайте</h4>
													<img src="https://admissions.kpfu.ru//themes/inno/images/menu-logo.jpg">
												</div>
											</a>
										</div>

										<div class="col-12 col-lg-auto hidden-content-list">
											<a href="#" class="hidden-content-link second-step-link">
												<h4 class="title">Перед поступлением</h4>
											</a>
											<ul class="nav row">
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/ordinatura/priemnaa-komissia-po-programmam-ordinatury" class="hidden-content-link">Приемная комиссия по программам ординатуры</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/ordinatura/pravila-priema-v-ordinaturu" class="hidden-content-link">Правила приема</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/ordinatura/sroki-provedenia-priema-ordinatura" class="hidden-content-link">Сроки проведения приема</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/plan-priema-2020" class="hidden-content-link">План приема 2020</a>
												</li>
											</ul>
										</div> <!-- hidden-content-list  -->

										<div class="col-12 col-lg-auto hidden-content-list">
											<a href="#" class="hidden-content-link second-step-link">
												<h4 class="title">Процедура приема</h4>
											</a>
											<ul class="nav row">
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/ordinatura/podaca-dokumentov-ordinatura" class="hidden-content-link">Подача документов</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/ordinatura/programma-vstupitelnyh-ispytanii-i-pravila-podaci-apellacii" class="hidden-content-link">Программа вступительных экзаменов</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/ordinatura/stoimost-obucenia" class="hidden-content-link">Стоимость обучения</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/ordinatura/obrazec-dogovora-na-okazanie-platnyh-obrazovatelnyh-uslug" class="hidden-content-link">Образец договора на оказание платных образовательных услуг</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/ordinatura/obsezitia" class="hidden-content-link">Общежития</a>
												</li>
											</ul>
										</div> <!-- hidden-content-list  -->

										<div class="col-12 col-lg-auto hidden-content-list">
											<a href="#" class="hidden-content-link second-step-link">
												<h4 class="title">Результаты приема</h4>
											</a>
											<ul class="nav row">
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/podannye-zaavlenia" class="hidden-content-link">Поданные заявления</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/spiski-postupausih-0" class="hidden-content-link">Списки поступающих</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/ordinatura/pravila-podaci-i-rassmotrenia-apellacii-po-rezultatam-vstupitelnyh" class="hidden-content-link">Правила подачи и рассмотрения аппеляций по результатам вступительных экзаменов</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/ordinatura/rezultaty-vstupitelnyh-ispytanii" class="hidden-content-link">Результаты вступительных экзаменов</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/ordinatura/prikazy-o-zacislenii" class="hidden-content-link">Приказы о зачислении</a>
												</li>
											</ul>
										</div> <!-- hidden-content-list  -->

									</div> <!-- row -->

								</div> <!-- content-container -->

							</div> <!-- hidden-content -->
						</li>
						<li class="admissions-nav-item">
							<a class="admissions-nav-link first-step-link">
								Среднее образование
							</a>
							<div class="row hidden-content m-0">
								<div class="content-container">
									<div class="row justify-content-start m-auto">
										<div class="col-lg-auto hidden-content-list be-student">
											<a href="http://abiturient.kpfu.ru/" class="hidden-content-link s">
												<div>
													<h4 class="title">Регистрация на сайте</h4>
													<img src="https://admissions.kpfu.ru//themes/inno/images/menu-logo.jpg">
												</div>
											</a>
										</div>

										<div class="col-12 col-lg-auto hidden-content-list">
											<a href="#" class="hidden-content-link second-step-link">
												<h4 class="title">Поступление в лицей им. Лобачевского </h4>
											</a>
											<ul class="nav row">
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/srednee-obrazovanie/postuplenie-v-licei-im-lobacevskogo/pravila-priema" class="hidden-content-link">Правила приема</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-licei/postuplenie-v-licei-im-lobacevskogo/dokumenty-dla-postuplenia" class="hidden-content-link">Документы для поступленияа</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/srednee-obrazovanie/postuplenie-v-licei-im-lobacevskogo/faq" class="hidden-content-link">Часто задаваемые вопросы</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/kontakty/kontakty" class="hidden-content-link">Контакты</a>
												</li>
											</ul>
										</div> <!-- hidden-content-list  -->

										<div class="col-12 col-lg-auto hidden-content-list">
											<a href="#" class="hidden-content-link second-step-link">
												<h4 class="title">Поступление в IT лицей-интернат КФУ</h4>
											</a>
											<ul class="nav row">
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-licei/postuplenie-v-it-licei/pravila-priema" class="hidden-content-link">Правила приема</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/srednee-obrazovanie/postuplenie-v-it-licei/dokumenty-dla-postuplenia" class="hidden-content-link">Документы для поступления</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/srednee-obrazovanie/postuplenie-v-it-licei/faq" class="hidden-content-link">Часто задаваемые вопросы</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/kontakty/it-licei" class="hidden-content-link">Контакты</a>
												</li>
											</ul>
										</div> <!-- hidden-content-list  -->

										<div class="col-12 col-lg-auto hidden-content-list">
											<a href="#" class="hidden-content-link second-step-link">
												<h4 class="title">Поступление в Инженерно-экономический колледж</h4>
											</a>
											<ul class="nav row">
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-kolledzi/prikazy-o-zacislenii" class="hidden-content-link">Приказы о зачислении</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-kolledzi/postuplenie-v-inzenerno-ekonomiceskii-kolledz/pravila-priema" class="hidden-content-link">Правила приема</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-kolledzi/postuplenie-v-inzenerno-ekonomiceskii-kolledz/dokumenty-dla-postuplenia" class="hidden-content-link">Документы для поступления</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/srednee-obrazovanie/postuplenie-v-kolledge/faq" class="hidden-content-link">Часто задаваемые вопросы</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/kontakty/inzinerno-ekonomiceskii-kolledz" class="hidden-content-link">Контакты</a>
												</li>
											</ul>
										</div> <!-- hidden-content-list  -->

									</div> <!-- row -->

								</div> <!-- content-container -->

							</div> <!-- hidden-content -->
						</li>
						<li class="admissions-nav-item">
							<a class="admissions-nav-link first-step-link">
								Поступление иностранных студентов
							</a>
							<div class="row hidden-content m-0">
								<div class="content-container">
									<div class="row justify-content-start m-auto">
										
										<div class="col-12 col-lg-auto hidden-content-list">
											<a href="#" class="hidden-content-link second-step-link">
												<h4 class="title">Общая информация</h4>
											</a>
											<ul class="nav row">
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/postuplenie-inostrannyh-grazdan/informacia-dla-pribytia" class="hidden-content-link">Информация для прибытия</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/postuplenie-inostrannyh-grazdan/trebovania-k-dokumentam-ob-obrazovanii-abiturientov" class="hidden-content-link">Требование к документам об образовании абитуриента</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/priem-v-universitet/raspisanie-vstupitelnyh-ispytanii-magistratura-2020" class="hidden-content-link">Расписание приема</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/postuplenie-inostrannyh-grazdan/instrukcia-po-postupleniu" class="hidden-content-link">Инструкция по поступлению</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/postuplenie-inostrannyh-grazdan/pravila-prebyvania-inostrannyh-grazdan-na-territorii-rf" class="hidden-content-link">Правила пребывания иностранных граждан на территории РФ</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/kontakty/otdel-privlecenia-i-nabora-inostrannyh-obucausihsa" class="hidden-content-link">Контакты</a>
												</li>
											</ul>
										</div> <!-- hidden-content-list  -->

										<div class="col-12 col-lg-auto hidden-content-list">
											<a href="https://admissions.kpfu.ru/postuplenie-inostrannyh-grazdan/budzet-ili-kontrakt" class="hidden-content-link second-step-link">
												<h4 class="title">Бюджет или контракт?</h4>
											</a>
											<ul class="nav row">
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/postuplenie-inostrannyh-grazdan/priem-na-budzetnoe-obucenie-na-obsih-osnovaniah" class="hidden-content-link">Прием на общих основаниях</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/postuplenie-inostrannyh-grazdan/priem-na-budzetnoe-obucenie-po-kvote" class="hidden-content-link">Прием по квоте</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/postuplenie-inostrannyh-grazdan/priem-na-obucenie-po-kontraktu" class="hidden-content-link">Прием на обучение по контракту</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/postuplenie-inostrannyh-grazdan/priem-sootecestvennikov" class="hidden-content-link">Прием соотечественников</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/postuplenie-inostrannyh-grazdan/priem-ucastnikov-gosprogrammy-po-pereseleniu-v-rf-sootecestvennikov" class="hidden-content-link">Прием участников программы по переселению в РФ соотечественников, проживающих за рубежом</a>
												</li>
											</ul>
										</div> <!-- hidden-content-list  -->

										<div class="col-12 col-lg-auto hidden-content-list">
											<a href="#" class="hidden-content-link second-step-link">
												<h4 class="title">Абитуриентам из СНГ</h4>
											</a>
											<ul class="nav row">
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/postuplenie-inostrannyh-grazdan/instrukcia-po-postupleniu-0" class="hidden-content-link">Инструкция по поступлению</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/postuplenie-inostrannyh-grazdan/grafik-mezdunarodnyh-obrazovatelnyh-vystavok" class="hidden-content-link">График международных образовательных выставок</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://abiturient.kpfu.ru/" class="hidden-content-link">Олимпиады</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/postuplenie-inostrannyh-grazdan/my-v-socsetah" class="hidden-content-link">Мы в соц. сетях</a>
												</li>
											</ul>
										</div> <!-- hidden-content-list  -->

										<div class="col-12 col-lg-auto hidden-content-list">
											<a href="https://admissions.kpfu.ru/priem-v-universitet/plan-priema-2020-kolicestvo-mest-vstupitelnye-ispytania-i-minimalnye-bally" class="hidden-content-link second-step-link">
												<h4 class="title">Бакалавриат/Специалитет</h4>
											</a>
											<ul class="nav row">
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/postuplenie-inostrannyh-grazdan/vstupitelnye-ispytania-1" class="hidden-content-link">Вступительные испытания</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/postuplenie-inostrannyh-grazdan/bakalavriat-specialitet" class="hidden-content-link">Направления обучения</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/postuplenie-inostrannyh-grazdan/minimalnye-bally-dla-postuplenia" class="hidden-content-link">Минимальные баллы для поступления</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/postuplenie-inostrannyh-grazdan/dokumenty-dla-postuplenia" class="hidden-content-link">Документы для поступления</a>
												</li>
											</ul>
										</div> <!-- hidden-content-list  -->

										<div class="col-12 col-lg-auto hidden-content-list">
											<a href="#" class="hidden-content-link second-step-link">
												<h4 class="title">Аспирантура</h4>
											</a>
											<ul class="nav row">
												<li class="col-lg-auto hidden-content-item">
													<a href="https://kpfu.ru/postgraduate/napravleniya-podgotovki" class="hidden-content-link">Направления обучения</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/postuplenie-inostrannyh-grazdan/vstupitelnye-ispytania" class="hidden-content-link">Вступительные испытания</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/postuplenie-inostrannyh-grazdan/dokumenty-dla-postuplenia-1" class="hidden-content-link">Документы для поступления</a>
												</li>
											</ul>
										</div> <!-- hidden-content-list  -->

										<div class="col-12 col-lg-auto hidden-content-list">
											<a href="https://admissions.kpfu.ru/priem-v-universitet/plan-priema-2020-kolicestvo-mest-vstupitelnye-ispytania-i-minimalnye-bally" class="hidden-content-link second-step-link">
												<h4 class="title">Магистратура</h4>
											</a>
											<ul class="nav row">
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/postuplenie-inostrannyh-grazdan/magistratura" class="hidden-content-link">Направления обучения</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/postuplenie-inostrannyh-grazdan/vstupitelnye-ispytania-0" class="hidden-content-link">Вступительные испытания</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/postuplenie-inostrannyh-grazdan/dokumenty-dla-postuplenia-0" class="hidden-content-link">Документы для поступления</a>
												</li>
											</ul>
										</div> <!-- hidden-content-list  -->

									<div class="col-12 col-lg-auto hidden-content-list">
											<a href="https://admissions.kpfu.ru/postuplenie-inostrannyh-grazdan/predvuzovskaa-podgotovka-dla-inostrannyh-grazdan-i-lic-bez" class="hidden-content-link second-step-link">
												<h4 class="title">Предвузовская подготовка для иностранных граждан и лиц без гражданства</h4>
											</a>
									</div> <!-- row -->
									
									<div class="col-12 col-lg-auto hidden-content-list">
											<a href="https://admissions.kpfu.ru/semester-programs" class="hidden-content-link second-step-link">
												<h4 class="title">Дополнительные образовательные программы</h4>
											</a>
									</div> <!-- row -->

									<div class="col-12 col-lg-auto hidden-content-list">
											<a href="https://admissions.kpfu.ru/postuplenie-inostrannyh-grazdan/programmy-obmena" class="hidden-content-link second-step-link">
												<h4 class="title">Программы обмена</h4>
											</a>
									</div> <!-- row -->

									<div class="col-12 col-lg-auto hidden-content-list">
											<a href="https://admissions.kpfu.ru/summer-school" class="hidden-content-link second-step-link">
												<h4 class="title">Летние школы</h4>
											</a>
									</div> <!-- row -->

									<div class="col-12 col-lg-auto hidden-content-list">
											<a href="https://admissions.kpfu.ru/zima" class="hidden-content-link second-step-link">
												<h4 class="title">Зимние школы</h4>
											</a>
									</div> <!-- row -->

								</div> <!-- content-container -->

							</div> <!-- hidden-content -->
						</li>
						<li class="admissions-nav-item">
							<a class="admissions-nav-link first-step-link">
								Школьнику
							</a>
							<div class="row hidden-content m-0">
								<div class="content-container">
									<div class="row justify-content-start m-auto">

										<div class="col-12 col-lg-auto hidden-content-list">
											<a href="#" class="hidden-content-link second-step-link">
												<h4 class="title">Малый университет</h4>
											</a>
											<ul class="nav row">
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/dovuzovskaa-podgotovka/obsaa-informacia" class="hidden-content-link">Общая информация</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/dovuzovskaa-podgotovka/otdeleniya-malogo-universiteta" class="hidden-content-link">Факультеты</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/dovuzovskaa-podgotovka/informacia-dla-postupausih" class="hidden-content-link">Информация для поступающих</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/dovuzovskaa-podgotovka/informacia-dla-obucausihsa" class="hidden-content-link">Информация для обучающихся</a>
												</li>
											</ul>
										</div> <!-- hidden-content-list  -->

										<div class="col-12 col-lg-auto hidden-content-list">
											<a href="#" class="hidden-content-link second-step-link">
												<h4 class="title">Подготовка к ЕГЭ и ОГЭ</h4>
											</a>
											<ul class="nav row">
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/dovuzovskaa-podgotovka/podgotovka-k-ege-i-oge/kursy-podgotovki-k-ege-i-oge" class="hidden-content-link">Курсы подготовки к ЕГЭ и ОГЭ</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/dovuzovskaa-podgotovka/podgotovka-k-ege-i-oge/letnie-podgotovitelnye-kursy" class="hidden-content-link">Летние подготовительные курсы</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/dovuzovskaa-podgotovka/podgotovka-k-ege-i-oge/probnye-ekzameny" class="hidden-content-link">Пробные экзамены</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/dovuzovskaa-podgotovka/podgotovka-k-ege-i-oge/distancionnye-podgotovitelnye-kursy" class="hidden-content-link">Дистанционные подготовительные курсы</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/dovuzovskaa-podgotovka/podgotovka-k-ege-i-oge/ucebnye-posobia" class="hidden-content-link">Учебные пособия</a>
												</li>
											</ul>
										</div> <!-- hidden-content-list  -->

										<div class="col-12 col-lg-auto hidden-content-list">
											<a href="#" class="hidden-content-link second-step-link">
												<h4 class="title">Мероприятия</h4>
											</a>
											<ul class="nav row">
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/mpo" class="hidden-content-link">Межрегиональные предметные олимпиады КФУ</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/lob-konf" class="hidden-content-link">Научная конференция им. Н. И. Лобачевского</a>
												</li>
												<li class="col-lg-auto hidden-content-item">
													<a href="https://admissions.kpfu.ru/olimpiady" class="hidden-content-link">Конкурсы, олимпиады, профильные школы</a>
												</li>
											</ul>
										</div> <!-- hidden-content-list  -->

									</div> <!-- row -->

								</div> <!-- content-container -->

							</div> <!-- hidden-content -->
						</li>
					</ul>
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