<footer class="footer">
	<div class="footer-top">
		<div class="content-container">
			<div class="row justify-content-md-between justify-content-center">
				<div class="col-auto col-md-6 d-flex text-center text-md-left flex-column flex-md-row">
					<div class="logo">
						<a href="">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/footerLogo.png">
						</a>
					</div>
					<div class="info">
						<div class="info-title">
							Приемная комиссия кфу
						</div>
						<div class="phone">
							Телефон: <span class="phone-number">+7(843)292-73-40</span>
						</div>
						<div class="email">
							E-mail: <span class="email-adress">priem@kpfu.ru</span>
						</div>
						<div class="adress-wrapper">
							Адрес: <span class="adress">Адрес: 420008, РТ, г. Казань, ул. Кремлевская, д. 35, каб. 114, 115</span>
						</div>
						<div class="mailing-address">
							Почтовый адрес: <span>Почтовый адрес: 420008, РТ, г. Казань, ул. Кремлевская, д. 18 (для приемной комиссии)</span>
						</div>
					</div>
				</div>
				<div class="col-auto age-limit align-item-end">
					<img src="https://admissions.kpfu.ru/themes/inno/images/age_limit.png">
				</div>
			</div>
		</div>
	</div>

	<div class="footer-bottom">
		<div class="content-container">
			<div class="footer-menu-wrapper d-flex justify-content-center align-items-center">
				<div class="arrow-left" onclick="footerSlider('arrow-left')"></div>
				<ul class="nav footer-menu d-flex justify-content-lg-center align-items-center text-center">
					<li class="footer-menu-item active">
						<a href="#" class="footer-menu-link">Интранет</a>
					</li>
					<li class="footer-menu-item">
						<a href="#" class="footer-menu-link">Карта сайта</a>
					</li>
					<li class="footer-menu-item">
						<a href="http://kpfu.ru/sveden/brendbuk-kfu" class="footer-menu-link">Фирменный стиль</a>
					</li>
					<li class="footer-menu-item">
						<a href="#" class="footer-menu-link">Аккредитация журналистов</a>
					</li>
					<li class="footer-menu-item">
						<a href="#" class="footer-menu-link">Телефонный справочник</a>
					</li>
					<li class="footer-menu-item">
						<a href="#" class="footer-menu-link">Техническая поддержка</a>
					</li>
					<li class="footer-menu-item">
						<a href="https://kpfu.ru/sveden/internet-priemnaya" class="footer-menu-link">Обратная связь</a>
					</li>
					<li class="footer-menu-item">
						<a href="https://admissions.kpfu.ru/blind/change/text" class="footer-menu-link">Версия для слабовидящих</a>
					</li>
				</ul>
				<div class="arrow-right" onclick="footerSlider('arrow-right')"></div>
			</div>
			<div class="copyright d-flex justify-content-center">
				© Казанский федеральный университет, 2020
			</div>
		</div>
	</div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<?php wp_footer(); ?>


</body>
</html>