<?php get_header(); ?>

<section class="main">
	
	<div class="content-container">
		
		<div class="row">
			<div class="col-lg-4 form-wrapper">
				<form class="form new-event">
					<div class="form-item">
						<h4 class="form-title-subtitle">Дата проведения</h4>
						<input class="form-item-input" name="date">
					</div>
					<fieldset class="form-item new-event-classes">
						<h3 class="form-title">Класс</h3>
						<h5 class="get-all" onclick="selectAll('new-event-classes-item')">Выбрать все</h5>
						<div class="new-event-classes-item">
							<input type="checkbox" id="class1" name="news-event-class">
							<label for="class1">1 класс</label>
						</div>
						<div class="new-event-classes-item">
							<input type="checkbox" id="class2" name="news-event-class">
							<label for="class2">2 класс</label>
						</div>
						<div class="new-event-classes-item">
							<input type="checkbox" id="class3" name="news-event-class">
							<label for="class3">3 класс</label>
						</div>
						<div class="new-event-classes-item">
							<input type="checkbox" id="class4" name="news-event-class">
							<label for="class4">4 класс</label>
						</div>
						<div class="new-event-classes-item">
							<input type="checkbox" id="class5" name="news-event-class">
							<label for="class5">5 класс</label>
						</div>
						<div class="new-event-classes-item">
							<input type="checkbox" id="class6" name="news-event-class">
							<label for="class6">6 класс</label>
						</div>
						<div class="new-event-classes-item">
							<input type="checkbox" id="class7" name="news-event-class">
							<label for="class7">7 класс</label>
						</div>
						<div class="new-event-classes-item">
							<input type="checkbox" id="class8" name="news-event-class">
							<label for="class8">8 класс</label>
						</div>
						<div class="new-event-classes-item">
							<input type="checkbox" id="class9" name="news-event-class">
							<label for="class9">9 класс</label>
						</div>
						<div class="new-event-classes-item">
							<input type="checkbox" id="class10" name="news-event-class">
							<label for="class10">10 класс</label>
						</div>
						<div class="new-event-classes-item">
							<input type="checkbox" id="class11" name="news-event-class">
							<label for="class11">11 класс</label>
						</div>
					</fieldset>
					<fieldset class="form-item new-event-type">
						<h3 class="form-title">Вид мероприятия</h3>
						<div class="new-event-type-item">
							<input type="checkbox" id="type1" name="news-event-type">
							<label for="type1">Олимпиада</label>
						</div>
						<div class="new-event-type-item">
							<input type="checkbox" id="type2" name="news-event-type">
							<label for="type2">Олимпиада</label>
						</div>
						<div class="new-event-type-item">
							<input type="checkbox" id="type3" name="news-event-type">
							<label for="type3">Олимпиада</label>
						</div>
						<div class="new-event-type-item">
							<input type="checkbox" id="type4" name="news-event-type">
							<label for="type4">Олимпиада</label>
						</div>
						<div class="new-event-type-item">
							<input type="checkbox" id="type5" name="news-event-type">
							<label for="type5">Олимпиада</label>
						</div>
						<div class="new-event-type-item">
							<input type="checkbox" id="type6" name="news-event-type">
							<label for="type6">Олимпиада</label>
						</div>
					</fieldset>
					<div class="form-confirm">
						<input class="btn btn-primary" type="submit" name="" value="Применить">
					</div>
				</form>
			</div>
			<div class="col-auto col-lg-8 news">
				<div class="news-item">
					<div class="news-illustration">
						<img src="https://admissions.kpfu.ru//sites/default/files/2020-01/SHG_kfu-%2841%29_3_4_0.jpg">
					</div>
					<div class="news-description">
						<a href="#" class="news-title-link">
							<h3 class="news-title">
								<span class="news-event">День открытых дверей в ВШ ИТИС</span>
								<span class="news-date">28.03.2020</span>
							</h3>
						</a>
						<p class="news-event-description">Встреча с абитуриентами 9-11 классов и их родителями. Расскажем какие ЕГЭ нужно сдавать, как можно получить грант на обучение, какие предметы изучают студенты. Дата проведения: 28 марта 2020 года в 12.00, ул. Кремлевская, 35, 13 этаж, ауд. 1310-1311.
								<span class="contacts">
									Контакты: 
									<span class="contacts-name">Ирина Максимова, </span> 
									<a href="#" class="contacts-mail">
										i_maksimova@it.kfu.ru
									</a>
									<span class="contacts-phone">, 8 (843) 221-34-33 (доб.12).</span>
								</span>
						</p>
						<p class="classes">Классы: 9 класс, 10 класс, 11 класс</p>
						<p class="date">Дата проведения: 28.03.2020 - 12:00</p>
					</div>
				</div> <!-- news-item -->
				<div class="news-item">
					<div class="news-illustration">
						<img src="https://admissions.kpfu.ru//sites/default/files/2020-01/SHG_kfu-%2841%29_3_4_0.jpg">
					</div>
					<div class="news-description">
						<a href="#" class="news-title-link">
							<h3 class="news-title">
								<span class="news-event">День открытых дверей в ВШ ИТИС</span>
								<span class="news-date">28.03.2020</span>
							</h3>
						</a>
						<p class="news-event-description">Встреча с абитуриентами 9-11 классов и их родителями. Расскажем какие ЕГЭ нужно сдавать, как можно получить грант на обучение, какие предметы изучают студенты. Дата проведения: 28 марта 2020 года в 12.00, ул. Кремлевская, 35, 13 этаж, ауд. 1310-1311.
								<span class="contacts">
									Контакты: 
									<span class="contacts-name">Ирина Максимова, </span> 
									<a href="#" class="contacts-mail">
										i_maksimova@it.kfu.ru
									</a>
									<span class="contacts-phone">, 8 (843) 221-34-33 (доб.12).</span>
								</span>
						</p>
						<p class="classes">Классы: 9 класс, 10 класс, 11 класс</p>
						<p class="date">Дата проведения: 28.03.2020 - 12:00</p>
					</div>
				</div> <!-- news-item -->
			</div>
		</div>

	</div>

</section>

<?php get_footer(); ?>