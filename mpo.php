<?php
/*
Template Name: mpo-page
*/
?>

<?php get_header(); ?>

<section class="main">

	<div class="content-container">

		<div class="row">
			<div class="col-lg-4 form-wrapper">
				<form class="form lob-conf-form">
					<div class="form-item">
						<h3 class="form-title">Задай вопрос</h3>
					</div>
					<div class="form-item">
						<h4 class="form-title-subtitle">ФИО</h4>
						<input class="form-item-input" name="surname">
					</div>
					<div class="form-item">
						<h4 class="form-title-subtitle">Контактный email</h4>
						<input class="form-item-input" name="email">
					</div>
					<div class="form-item">
						<h4 class="form-title-subtitle">Тема</h4>
						<input class="form-item-input" name="theme">
					</div>
					<div class="form-item">
						<h4 class="form-title-subtitle">Текст сообщения</h4>
						<textarea class="form-item-area"></textarea>
					</div>
					<div class="form-item form-confirm">
						<input class="btn btn-primary" type="submit" name="lob-conf-submit" value="Отправить сообщение">
					</div>
				</form>
			</div>
			<div class="col-auto col-lg-8 mpo">
				<div class="content-title">
					<h1 class="title">Межрегиональные предметные олимпиады КФУ</h1>
				</div>
				<div class="mpo-scroller-wrapper">
					<ul class="mpo-scroller mpo-sub-nav">
						<li class="mpo-scroller-item" onclick="scrollIntoV('about-olympiads')">Об олимпиадах</li>
						<li class="mpo-scroller-item" onclick="scrollIntoV('doucments-registration-procedure')">Нормативные документы</li>
						<li class="mpo-scroller-item" onclick="scrollIntoV('qualifying-stage')">Отборочный этап</li>
						<li class="mpo-scroller-item" onclick="scrollIntoV('final-stage')">Заключительный этап</li>
						<li class="mpo-scroller-item" onclick="scrollIntoV('orgcom-contacts')">Контакты оргкомитета</li>
						<li class="mpo-scroller-item" onclick="scrollIntoV('tasks-and-decisions')">Задания и решения</li>
						<li class="mpo-scroller-item" onclick="scrollIntoV('results')">результаты</li>
					</ul>
				</div>
				<div class="mpo-content">
					<h3 class="text-center">
						Уважаемые участники! Изменения в сроках публикации дипломов: дипломы и сертификаты отборочного этапа доступны для скачивания до 27 марта 2020 года.
					</h3>
					<h3 class="text-center">
						Дипломы победителей и призеров заключительного этапа будут опубликованы в личных кабинетах на сайте "Буду студентом" 28 марта 2020 года.
					</h3>
					<div class="mpo-nav">
						<ul class="nav">
							<li class="mpo-nav-item w-100 about-olympiads">
								<h3><strong>Об олимпиадах</strong></h3>
								<div>
									<p class="text-justify text"><strong>Организатором Межрегиональных предметных олимпиад</strong> является Казанский (Приволжский) федеральный университет. Общую координацию проведения Олимпиад осуществляет Центр по работе с одаренными школьниками Департамента образования КФУ.</p>

									<p class="text-justify text"><strong>Олимпиады проводятся на добровольной основе среди обучающихся 8, 9, 10, 11 классов</strong>, осваивающих образовательные программы основного общего и среднего общего образования.</p>

									<p class="text-justify text"><strong>Участие в Олимпиадах бесплатное.</strong></p>

									<p class="text-justify text"><strong>Олимпиады проводятся в два этапа:</strong></p>

									<ul class="mpo-sub-nav">
										<li class="text-justify text">отборочный этап, пройдет в заочной форме с применением дистанционных образовательных технологий  с 1 ноября по 1 декабря 2019 года (регистрация и прохождение тестирования на сайте "Буду студентом");
										</li>
										<li class="text-justify text">заключительный этап, пройдет в очной форме с января по февраль 2020 года.
										</li>
									</ul>

									<p class="text-justify text">К участию в каждом последующем этапе допускаются победители и призеры предшествующего этапа Олимпиад. Победители и призеры заключительного этапа предшествующего года, продолжающие освоение общеобразовательных программ основного общего и среднего общего образования, допускаются к участию в заключительном этапе Олимпиад по соответствующему предмету минуя отборочный этап.</p>
									<p class="text-justify text">Порядок регистрации и график проведения этапов олимпиад публикуется на сайте не позднее, чем за месяц до дня проведения. </p>

									<p class="text-justify text">Межрегиональные предметные олимпиады КФУ входят в Республиканский реестр конкурсных мероприятий для выявления и поддержки одаренных и талантливых детей и молодежи в Республике Татарстан. Победители и призеры Олимпиад КФУ будут включены в базу данных победителей и призеров конкурсных мероприятий Республики Татарстан.</p>

									<p class="text-justify text">Межрегиональные предметные олимпиады КФУ включены в Перечень олимпиад и иных интеллектуальных и (или) творческих конкурсов, мероприятий, направленных на развитие интеллектуальных и творческих способностей, способностей к занятиям физической культурой и спортом, интереса к научной (научно-исследовательской), инженерно-технической, изобретательской, творческой, физкультурно-спортивной деятельности, а также на пропаганду научных знаний, творческих и спортивных достижений, на 2019/20 учебный год. Победители и призеры будут включены в информационный ресурс об одаренных детях.</p>
									<div class="accordion-wrapper">
										<div class="accordion-item">
											<div class="accordion-header">
												<div class="accordion-item-header">
													<div class="icon"></div>
												</div>
												<h4 class="accordion-title text-uppercase">Льготы при поступлении в вуз(раскрыть)</h4>
											</div>
											<div class="accordion-content">
												<p class="text-justify text">Межрегиональные предметные олимпиады по химии, физике и иностранному языку включены Перечень олимпиад школьников и их уровней на 2019/20 учебный год (№ 31, химия и иностранный язык - 2 уровень, физика -  3 уровень, <a href="#">Приказ Министерства науки и высшего образования РФ от 30 августа 2019 года № 658 "Об утверждении перечня олимпиад школьников и их уровней на 2019/20 учебный год"</a>).</p>

												<p class="text-justify text">Победители заключительного этапа (11 класс) олимпиад, вошедших в Перечень олимпиад школьников, имеют право на прием в Казанский федеральный университет без вступительных испытаний на те специальности и (или) направления подготовки, которые <strong>соответствуют</strong> профилю олимпиад, в течение 4 лет, следующих за годом проведения олимпиад, вне зависимости от уровня олимпиад.</p>

												<p class="text-justify text">Победители заключительного этапа (11 класс) олимпиад, вошедших в Перечень олимпиад школьников, имеют право быть приравненными к лицам, набравшим максимальное количество баллов ЕГЭ (100 баллов) по общеобразовательному предмету при приеме в Казанский федеральный университет  на те специальности и (или) направления подготовки, <strong>не соответствующие</strong> профилю олимпиад, в течение 4 лет, следующих за годом проведения олимпиад, вне зависимости от уровня олимпиад.</p>

												<p class="text-justify text">Призеры заключительного этапа (11 класс) олимпиад, вошедших в Перечень олимпиад школьников, имеют право быть приравненными к лицам, набравшим максимальное количество баллов ЕГЭ (100 баллов) по общеобразовательному предмету при приеме в Казанский федеральный университет на те специальности и (или) направления подготовки, <strong>вне зависимости</strong> профилю олимпиад, в течение 4 лет, следующих за годом проведения олимпиад, вне зависимости от уровня олимпиад.</p>

												<p class="text-justify text"><strong><u>Примечание:</u></strong> КФУ установил, что особые права предоставляются победителям и призерам олимпиад при наличии у них результатов ЕГЭ не ниже 75 баллов.</p>

												<p class="text-justify text">На основании решения Приемной комиссии КФУ победители (1 место) <strong>заключительного этапа</strong> Межрегиональных предметных олимпиад КФУ из числа обучающихся 11 классов получают <strong>дополнительно 5 баллов к результатам ЕГЭ</strong> при поступлении в Казанский федеральный университет, призеры (2, 3 места) <strong>дополнительно 3 балла к результатам ЕГЭ </strong>независимо от предмета олимпиады и института. Например, победитель/призер олимпиады по обществознанию может получить дополнительные баллы к результатам ЕГЭ при поступлении в любой институт КФУ.</p>
											</div>
										</div> <!-- accordion-item -->

										<div class="accordion-item">
											<div class="accordion-header">
												<div class="accordion-item-header">
													<div class="icon"></div>
												</div>
												<h4 class="accordion-title text-uppercase">Институты КФУ, курирующие межрегиональные предметные олимпиады(рыскрыть)</h4>
											</div>
											<div class="accordion-content">
												<ul class="mpo-sub-nav main-color">
													<li>астрономия и физика - <a href="https://kpfu.ru/physics">Институт физики</a>;
													</li>
													<li>биология - <a href="https://kpfu.ru/biology-medicine">Институт фундаментальной медицины и биологии</a>;
													</li>
													<li>география и экономика - <a href="https://kpfu.ru/institutes/institut-upravleniya-ekonomiki-i-finansov">Институт управления, экономики и финансов</a>;
													</li>
													<li>геология - <a href="https://kpfu.ru/geology-oil">Институт геологии и нефтегазовых технологий</a>;
													</li>
													<li>история, обществознание и иностранные языки - <a href="https://kpfu.ru/imoiv">Институт международных отношений</a>;
													</li>
													<li>информатика - <a href="https://kpfu.ru/computing-technology">Институт вычислительной математики и информационных технологий</a>;
													</li>
													<li>литература, русский и татарский языки - <a href="https://kpfu.ru/philology-culture">Институт филологии и межкультурной коммуникации им. Льва Толстого</a>;</li>
													<li>математика - <a href="https://kpfu.ru/math">Институт математики механики им. Н.И. Лобачевского</a>;
													</li>
													<li>педагогика - <a href="https://kpfu.ru/psychology">Институт психологии и образования</a>;
													</li>
													<li>политология - <a href="https://kpfu.ru/isfnmk">Институт социально-философских наук и массовых коммуникаций</a>;
													</li>
													<li>право - <a href="https://kpfu.ru/law">Юридический факультет</a>;
													</li>
													<li>химия - <a href="https://kpfu.ru/chemistry">Химический институт им. А.М. Бутлерова</a>;
													</li>
													<li>экология - <a href="https://kpfu.ru/ecology">Институт экологии и природопользования</a>.</li>
												</ul>
											</div>
										</div> <!-- accordion-item -->
									</div> <!-- accordion-wrapper -->
								</div>
							</li> <!-- mpo-nav-item -->
							<li class="mpo-nav-item w-100 doucments-registration-procedure">
								<h3><strong>Документы, порядок регистрации и участия в олимпиадах:</strong></h3>
								<div>
									<ul class="mpo-sub-nav">
										<li class="text-justify text"><a href="http://www.rg.ru/2014/07/04/provedenie-dok.html" target="_blanc">Порядок проведения олимпиад школьников</a>
										</li>
										<li class="text-justify text"><a href="http://publication.pravo.gov.ru/Document/View/0001201501200035?index=1&amp;rangeSize=1" target="_blanc">Изменения, которые вносятся в Порядок проведения олимпиад школьников</a>
										</li>
										<li class="text-justify text"><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9F%D0%BE%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5%20%D0%9C%D0%9F%D0%9E%202018-2019.pdf">Положение о Межрегиональных предметных олимпиадах КФУ</a>
										</li>
										<li class="text-justify text"><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9F%D1%80%D0%B8%D0%BA%D0%B0%D0%B7%20%D0%BE%20%D0%B2%D0%BD%D0%B5%D1%81%D0%B5%D0%BD%D0%B8%D0%B8%20%D0%B8%D0%B7%D0%BC%D0%B5%D0%BD%D0%B5%D0%BD%D0%B8%D0%B9%20%D0%B2%20%D0%9F%D0%BE%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5.pdf">Приказ о внесении изменений в Положение о Межрегиональных предметных олимпиадах КФУ</a>
										</li>
										<li class="text-justify text"><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%A0%D0%B5%D0%B3%D0%BB%D0%B0%D0%BC%D0%B5%D0%BD%D1%82%20%D0%BE%D1%82%D0%B1%D0%BE%D1%80%D0%BE%D1%87%D0%BD%D0%BE%D0%B3%D0%BE%20%D1%8D%D1%82%D0%B0%D0%BF%D0%B0%202019-2020.pdf">Регламент проведения отборочного этапа на 2019/20 учебный год</a>
										</li>
										<li class="text-justify text"><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%A0%D0%B5%D0%B3%D0%BB%D0%B0%D0%BC%D0%B5%D0%BD%D1%82%20%D0%B7%D0%B0%D0%BA%D0%BB%D1%8E%D1%87%D0%B8%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D0%B3%D0%BE%20%D1%8D%D1%82%D0%B0%D0%BF%D0%B0%202019-2020_1.pdf">Регламент проведения заключительного этапа на 2019/20 учебный год</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="mpo-nav-item w-100 qualifying-stage">
								<h3><strong>Отборочный этап</strong></h3>
								<div class="text-justify">
									<p class="text-justify text">Отборочный этап пройдет с 1 ноября по 1 декабря 2019 года. Прохождение тестирования на сайте социально-образовательной сети <strong><a href="https://abiturient.kpfu.ru/">"Буду студентом"</a> .</strong> Любой зарегистрированный участник может участвовать только один раз по каждому выбранному предмету. Длительность сеанса тестирования по каждому предмету - 120 минут. Задания открыты круглосуточно. Олимпиады по химии, физике, иностранному языку, геологии и русскому языку проводятся для учащихся 8-11 классов. Астрономия, биология, география, информатика, история, литература, математика, обществознание, педагогика, политология, право, татарский язык, экология и экономика проводятся для учащихся 9-11 классов.</p>

									<p class="text-justify text"><u><strong>Внимание.</strong></u>  Перед регистрацией ВНИМАТЕЛЬНО ознакомьтесь с <a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%86%D0%B8%D1%8F%202019-2020%20NEW.pdf"><strong>ИНСТРУКЦИЕЙ</strong></a>. При регистрации все сведения об участнике (ФИО, название образовательной организации и т.д.) заполняются <strong>без ошибок, </strong>так как эти данные будут указаны в сертификате (дипломе) и в других документах.</p>

									<p class="text-justify text"><u><strong>Внимание.</strong></u> Произошли некоторые изменения в порядке регистрации, теперь новые пользователи должны подтвердить свою регистрацию по ссылке, которая придет в письме на Вашу личную почту (указанную при регистрации). </p>

									<p class="text-justify text">Победители и призеры отборочного этапа <strong>(до 45 % от общего числа участников по каждому предмету)</strong> приглашаются к участию в заключительном этапе. К участию в заключительном этапе также приглашаются победители и призеры заключительного этапа Олимпиад прошлого года, продолжающие освоение общеобразовательных программ.</p>

									<p class="text-justify text">Все участники отборочного этапа Олимпиад получают сертификаты об участии в отборочном этапе Межрегиональных предметных олимпиад КФУ. Победители и призеры отборочного этапа получают дипломы КФУ и приглашение на участие в заключительном этапе. Сертификаты, дипломы  и приглашение распечатываются из личного кабинета на сайте <a href="https://abiturient.kpfu.ru/">"Буду студентом"</a>.</p>

									<p class="text-justify text"><strong>Апелляции принимались на электронную почту <a href="mailto:rt.test@kpfu.ru">rt.test@kpfu.ru</a> до 15 декабря 2019 года (включительно). Разбор заданий открыт в личном кабинете на сайте <a href="https://abiturient.kpfu.ru/">"Буду студентом"</a>. Апелляции рассматривались до 18 декабря 2019 года (включительно). </strong></p>

									<div class="accordion-wrapper">
										<div class="accordion-item">
											<div class="accordion-header">
												<div class="accordion-item-header">
													<div class="icon"></div>
												</div>
												<h4 class="accordion-title text-uppercase">Результаты отборочного этапа олимпиад КФУ 2019/20 учебного года(раскрыть)</h4>
											</div>
											<div class="accordion-content">
												<p class="text"><strong>Проценты равны баллам (например, 75% = 75 баллов)</strong></p>

												<p class="text">Астрономия</p>

												<ul class="mpo-sub-nav">
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%BD%D0%BE%D0%BC%D0%B8%D1%8F_9_0.pdf">9 класс</a>
													</li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%BD%D0%BE%D0%BC%D0%B8%D1%8F_10_0.pdf">10 класс</a>
													</li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%BD%D0%BE%D0%BC%D0%B8%D1%8F_11_0.pdf">11 класс</a>
													</li>
												</ul>
												<p class="text">Биология</p>

												<ul class="mpo-sub-nav">
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%B1%D0%B8%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F_9_1.pdf">9 класс</a>
													</li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%B1%D0%B8%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F_10_0.pdf">10 класс</a>
													</li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%B1%D0%B8%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F_11_0.pdf">11 класс</a>
													</li>
												</ul>
												<p class="text">География</p>

												<ul class="mpo-sub-nav">
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%B3%D0%B5%D0%BE%D0%B3%D1%80%D0%B0%D1%84%D0%B8%D1%8F_9_1.pdf">9 класс</a>
													</li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%B3%D0%B5%D0%BE%D0%B3%D1%80%D0%B0%D1%84%D0%B8%D1%8F_10_0.pdf">10 класс</a>
													</li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%B3%D0%B5%D0%BE%D0%B3%D1%80%D0%B0%D1%84%D0%B8%D1%8F_11_0.pdf">11 класс</a>
													</li>
												</ul>
												<p class="text">Геология</p>

												<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%B3%D0%B5%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F_8_0.pdf">8 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%B3%D0%B5%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F_9_1.pdf">9 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%B3%D0%B5%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F_10_0.pdf">10 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%B3%D0%B5%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F_11_0.pdf">11 класс</a></li>
												</ul><p class="text">Иностранный язык</p>

												<p>Английский язык</p>

												<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%B0%D0%BD%D0%B3%D0%BB.%D1%8F%D0%B7_8_0.pdf">8 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%B0%D0%BD%D0%B3%D0%BB.%D1%8F%D0%B7_9_2.pdf">9 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%B0%D0%BD%D0%B3%D0%BB.%D1%8F%D0%B7_10_0.pdf">10 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%B0%D0%BD%D0%B3%D0%BB.%D1%8F%D0%B7_11_0.pdf">11 класс</a></li>
												</ul><p class="text">Немецкий язык</p>

												<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%BD%D0%B5%D0%BC.%D1%8F%D0%B7_8_0.pdf">8 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%BD%D0%B5%D0%BC.%D1%8F%D0%B7_9_0.pdf">9 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%BD%D0%B5%D0%BC.%D1%8F%D0%B7_10_0.pdf">10 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%BD%D0%B5%D0%BC.%D1%8F%D0%B7_11_0.pdf">11 класс</a></li>
												</ul><p class="text">Французский язык</p>

												<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D1%84%D1%80%D0%B0%D0%BD%D1%86.%D1%8F%D0%B7_8_0.pdf">8 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D1%84%D1%80%D0%B0%D0%BD%D1%86.%D1%8F%D0%B7_9_0.pdf">9 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D1%84%D1%80%D0%B0%D0%BD%D1%86.%D1%8F%D0%B7_10_0.pdf">10 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D1%84%D1%80%D0%B0%D0%BD%D1%86.%D1%8F%D0%B7_11_0.pdf">11 класс</a></li>
												</ul><p class="text">Испанский язык</p>

												<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%B8%D1%81%D0%BF%D0%B0%D0%BD.%D1%8F%D0%B7_8_0.pdf">8 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%B8%D1%81%D0%BF%D0%B0%D0%BD.%D1%8F%D0%B7_9_0.pdf">9 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%B8%D1%81%D0%BF%D0%B0%D0%BD.%D1%8F%D0%B7_10_0.pdf">10 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%B8%D1%81%D0%BF%D0%B0%D0%BD.%D1%8F%D0%B7_11_0.pdf">11 класс</a></li>
												</ul><p class="text">Итальянский язык</p>

												<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%B8%D1%82%D0%B0%D0%BB.%D1%8F%D0%B7_8_0.pdf">8 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%B8%D1%82%D0%B0%D0%BB.%D1%8F%D0%B7_9_0.pdf">9 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%B8%D1%82%D0%B0%D0%BB.%D1%8F%D0%B7_10_0.pdf">10 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%B8%D1%82%D0%B0%D0%BB.%D1%8F%D0%B7_11_0.pdf">11 класс</a></li>
												</ul><p class="text">Информатика</p>

												<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0_9_0.pdf">9 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0_10_0.pdf">10 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0_11_0.pdf">11 класс</a></li>
												</ul><p class="text">История</p>

												<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%B8%D1%81%D1%82%D0%BE%D1%80%D0%B8%D1%8F_9_0.pdf">9 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%B8%D1%81%D1%82%D0%BE%D1%80%D0%B8%D1%8F_10_0.pdf">10 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%B8%D1%81%D1%82%D0%BE%D1%80%D0%B8%D1%8F_11_0.pdf">11 класс</a></li>
												</ul><p class="text">Литература</p>

												<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%BB%D0%B8%D1%82%D0%B5%D1%80%D0%B0%D1%82%D1%83%D1%80%D0%B0_9_1.pdf">9 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%BB%D0%B8%D1%82%D0%B5%D1%80%D0%B0%D1%82%D1%83%D1%80%D0%B0_10_0.pdf">10 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%BB%D0%B8%D1%82%D0%B5%D1%80%D0%B0%D1%82%D1%83%D1%80%D0%B0_11_0.pdf">11 класс</a></li>
												</ul><p class="text">Математика</p>

												<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%BC%D0%B0%D1%82%D0%B5%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0_9_0.pdf">9 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%BC%D0%B0%D1%82%D0%B5%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0_10_0.pdf">10 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%BC%D0%B0%D1%82%D0%B5%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0_11_0.pdf">11 класс</a></li>
												</ul><p class="text">Обществознание</p>

												<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%BE%D0%B1%D1%89%D0%B5%D1%81%D1%82%D0%B2%D0%BE%D0%B7%D0%BD%D0%B0%D0%BD%D0%B8%D0%B5_9_0.pdf">9 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%BE%D0%B1%D1%89%D0%B5%D1%81%D1%82%D0%B2%D0%BE%D0%B7%D0%BD%D0%B0%D0%BD%D0%B8%D0%B5_10_0.pdf">10 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%BE%D0%B1%D1%89%D0%B5%D1%81%D1%82%D0%B2%D0%BE%D0%B7%D0%BD%D0%B0%D0%BD%D0%B8%D0%B5_11_0.pdf">11 класс</a></li>
												</ul><p class="text">Педагогика</p>

												<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%BF%D0%B5%D0%B4%D0%B0%D0%B3%D0%BE%D0%B3%D0%B8%D0%BA%D0%B0_9_0.pdf">9 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%BF%D0%B5%D0%B4%D0%B0%D0%B3%D0%BE%D0%B3%D0%B8%D0%BA%D0%B0_10_0.pdf">10 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%BF%D0%B5%D0%B4%D0%B0%D0%B3%D0%BE%D0%B3%D0%B8%D0%BA%D0%B0_11_0.pdf">11 класс</a></li>
												</ul><p class="text">Политология</p>

												<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%BF%D0%BE%D0%BB%D0%B8%D1%82%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F_9_0.pdf">9 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%BF%D0%BE%D0%BB%D0%B8%D1%82%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F_10_0.pdf">10 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%BF%D0%BE%D0%BB%D0%B8%D1%82%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F_11_0.pdf">11 класс</a></li>
												</ul><p class="text">Право</p>

												<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%BF%D1%80%D0%B0%D0%B2%D0%BE_9_0.pdf">9 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%BF%D1%80%D0%B0%D0%B2%D0%BE_10_0.pdf">10 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D0%BF%D1%80%D0%B0%D0%B2%D0%BE_11_0.pdf">11 класс</a></li>
												</ul><p class="text">Русский язык</p>

												<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D1%80%D1%83%D1%81.%D1%8F%D0%B7_8_0.pdf">8 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D1%80%D1%83%D1%81.%D1%8F%D0%B7_9_1.pdf">9 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D1%80%D1%83%D1%81.%D1%8F%D0%B7_10_1.pdf">10 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D1%80%D1%83%D1%81.%D1%8F%D0%B7_11_0.pdf">11 класс</a></li>
												</ul><p class="text">Татарский язык</p>

												<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D1%82%D0%B0%D1%82.%D1%8F%D0%B7_9_2.pdf">9 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D1%82%D0%B0%D1%82.%D1%8F%D0%B7_10_0.pdf">10 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D1%82%D0%B0%D1%82.%D1%8F%D0%B7_11_0.pdf">11 класс</a></li>
												</ul><p class="text">Физика</p>

												<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D1%84%D0%B8%D0%B7%D0%B8%D0%BA%D0%B0_8_1.pdf">8 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D1%84%D0%B8%D0%B7%D0%B8%D0%BA%D0%B0_9_0.pdf">9 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D1%84%D0%B8%D0%B7%D0%B8%D0%BA%D0%B0_10_1.pdf">10 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D1%84%D0%B8%D0%B7%D0%B8%D0%BA%D0%B0_11_0.pdf">11 класс</a></li>
												</ul><p class="text">Химия</p>

												<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D1%85%D0%B8%D0%BC%D0%B8%D1%8F_8_0.pdf">8 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D1%85%D0%B8%D0%BC%D0%B8%D1%8F_9_1.pdf">9 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D1%85%D0%B8%D0%BC%D0%B8%D1%8F_10_0.pdf">10 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D1%85%D0%B8%D0%BC%D0%B8%D1%8F_11_0.pdf">11 класс</a></li>
												</ul><p class="text">Экология</p>

												<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D1%8D%D0%BA%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F_9_1.pdf">9 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D1%8D%D0%BA%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F_10_0.pdf">10 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%BE_%D1%8D%D0%BA%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F_11_0.pdf">11 класс</a></li>
												</ul><p class="text">Экономика</p>

												<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D1%8D%D0%BA%D0%BE%D0%BD%D0%BE%D0%BC%D0%B8%D0%BA%D0%B0_9_0.pdf">9 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D1%8D%D0%BA%D0%BE%D0%BD%D0%BE%D0%BC%D0%B8%D0%BA%D0%B0_10_0.pdf">10 класс</a></li>
													<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9E_%D1%8D%D0%BA%D0%BE%D0%BD%D0%BE%D0%BC%D0%B8%D0%BA%D0%B0_11_0.pdf">11 класс</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="mpo-nav-item w-100 final-stage">
								<h3><strong>Заключительный этап</strong></h3>
								<div class="text-justify main-color">
									<p class="text">Уважаемые участники! В разделе "Отборочный этап" опубликованы списки школьников, которые приглашены к участию в заключительном этапе олимпиад КФУ. <strong>Если Вы допущены к участию в заключительном этапе, то необходимо:</strong>
									</p>
									<ol>
										<li>
											<p class="text">пройти по <a href="https://docs.google.com/forms/d/1TH8zBKNmvYmJrgXm_rANVgxleP6guxfsm45ry0q5StY/edit">ссылке</a> и подтвердить свое участие в заключительном этапе;</p>
										</li>
										<li>
											<p class="text">из личного кабинета на сайте <a href="https://abiturient.kpfu.ru/">"Буду студентом"</a>  скачать и распечатать письмо-приглашение и согласие на обработку персональных данных (участники из Республики Татарстан <strong>дополнительно</strong> распечатывают и приносят согласие на обработку персональных данных для Университета Талантов);</p>
										</li>
										<li>
											<p class="text">победителям/призерам заключительного этапа 2018/19 учебного года необходимо в личном кабинете на сайте <a href="https://abiturient.kpfu.ru/">"Буду студентом"</a> во вкладке "Обо мне" поменять класс на текущий. Из личного кабинета скачать и распечатать письмо-приглашение и согласие на обработку персональных данных;</p>
										</li>
										<li>
											<p class="text">подписать письмо-приглашение у директора школы (лицея/гимназии), в котором обучаетесь. Не забудьте поставить печать учебного заведения. <b>Без подписи руководителя и печати письмо-приглашение недействительно, т.к. они подтверждают правильность внесенных Вами в личный кабинет данных.</b></p>
										</li>
										<li>
											<p class="text">подписать согласие на обработку персональных данных (подписывает сам участник и один из родителей или законный представитель);</p>
										</li>
										<li>
											<p class="text">участникам из Республики Татарстан подписать согласие на обработку персональных данных (для Университета Талантов). Обратите внимание: для несовершеннолетних и лиц старше 18 лет разные формы согласия. <strong>Данное согласие необходимо только для участников из Республики Татарстан.</strong></p>
										</li>
									</ol>
									<p class="text"><strong>В день проведения Олимпиады при себе иметь:</strong></p>
									<ul class="mpo-sub-nav">
										<li>паспорт;
										</li>
										<li>письмо-приглашение и согласия на обработку персональных данных;
										</li>
										<li>ручку (синюю или черную, гелевую или шариковую), карандаш, линейку и ластик (замазку нельзя). Питьевую воду, шоколадку, сок, лекарства (по необходимости). Можно непрограммируемый калькулятор (но не в телефоне или на планшете).
										</li>
									</ul>
									<p class="text"><strong>С собой нельзя брать:</strong> блокноты, тетради, листочки, черновики (все необходимое будет выдано).</p>
									<p><strong>Время проведения олимпиады в г. Казани:</strong></p>

									<ul class="mpo-sub-nav"><li>9.20 – инструктаж, размещение участников олимпиады по аудиториям, презентация института;</li>
										<li>9.50 – заполнение бланков;</li>
										<li>10.00 – начало олимпиады;</li>
										<li>13.00 – окончание олимпиады.</li>
									</ul><p><strong>Время московское.</strong></p>

									<p><strong>Примечание.</strong></p>

									<ul class="mpo-sub-nav">
										<li>10.00 - начало олимпиады по химии;</li>
										<li>13.55 - окончание олимпиады по химии.</li>
									</ul>
									<p><strong>Время московское.</strong></p>

									<p><strong>Время проведения олимпиады на региональных площадках:</strong></p>

									<ul class="mpo-sub-nav">
										<li>9.30 – размещение участников олимпиады по аудиториям;</li>
										<li>9.50 – инструктаж, заполнение бланков;</li>
										<li>10.00 – начало олимпиады;</li>
										<li>13.00 – окончание олимпиады.</li>
									</ul>
									<p><strong>Время московское.</strong></p>

									<p><strong>Примечание.</strong></p>

									<ul class="mpo-sub-nav">
										<li>10.00 - начало олимпиады по химии;</li>
										<li>13.55 - окончание олимпиады по химии.</li>
									</ul>
									<p><strong>Время московское.</strong></p>

									<p class="text"><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%93%D1%80%D0%B0%D1%84%D0%B8%D0%BA%20%D0%BE%D1%87%D0%BD%D0%BE%D0%B3%D0%BE%20%D1%82%D1%83%D1%80%D0%B0%202019-2020_3.pdf"><strong>График проведения заключительного этапа Олимпиад КФУ в 2019/20 учебном году.</strong></a></p>

									<p class="text"><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%93%D1%80%D0%B0%D1%84%D0%B8%D0%BA%20%D0%BE%D1%87%D0%BD%D0%BE%D0%B3%D0%BE%20%D1%82%D1%83%D1%80%D0%B0%202019-2020%20%D0%BD%D0%B0%20%D1%81%D0%B0%D0%B9%D1%82_0.pdf"><strong>Адреса проведения олимпиад в Казани с аудиториями.</strong></a></p>

									<p class="text"><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%90%D0%B4%D1%80%D0%B5%D1%81%D0%B0%20%D0%BF%D1%80%D0%BE%D0%B2%D0%B5%D0%B4%D0%B5%D0%BD%D0%B8%D1%8F%202019-2020_3.pdf"><strong>Адреса региональных площадок олимпиад КФУ.</strong></a></p>

									<p><strong>Адреса проведения в Казахстане:</strong></p>

									<ul class="mpo-sub-nav">
										<li>Уральск, ул. Чапаева, 22 (Международный образовательный холдинг "GAUDEAMUS");
										</li>
										<li>Алматы, ул. Жарокова, 24, каб. 21 (Лицей № 134).</li>
									</ul>

									<div class="accordion-wrapper">
										<div class="accordion-item">
											<div class="accordion-header">
												<div class="accordion-item-header">
													<div class="icon"></div>
												</div>
												<h4 class="accordion-title text-uppercase">Иногородним участникам(раскрыть)</h4>
											</div>
											<div class="accordion-content">
												<p class="text">Иногородним школьникам, принимающим участие в олимпиадах в Казани, на выбор может быть предоставлено место:</p>

												<p class="text"><strong>Вариант 1.</strong> в общежитии Студенческого городка КФУ. Адрес местонахождения: ул. Аделя Кутуя, 2б, остановка "Достоевского", автобусы 22, 30, 89. Контакты:</p>

												<ul class="mpo-sub-nav"><li>тел. (843) 272-70-22, 89053184970; </li>
													<li>e-mail  <a href="mailto:faya.nik@mail.ru">faya.nik@mail.ru</a>.</li>
												</ul>
												<p class="text"><strong>Вариант 2.</strong> в общежитии гостиничного типа Дирекции социально-спортивных объектов КФУ. Адрес местонахождения: ул. Оренбургский тракт, 10. <a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9E%D1%80%D0%B5%D0%BD%D0%B1%D1%83%D1%80%D0%B3%D1%81%D0%BA%D0%B8%D0%B9%20%D1%82%D1%80%D0%B0%D0%BA%D1%82%2C%2010.pdf">Подробнее об общежитии.</a> Контакты: тел. (843) 277-81-19.</p>

												<p class="text">Для бронирования места участнику необходимо не позднее, чем за 10 дней до дня проведения олимпиады, направить заявку в общежитие с указанием следующей информации:</p>

												<ul class="mpo-sub-nav"><li>ФИО участника;</li>
													<li>ФИО сопровождающего (если таковой будет);</li>
													<li>домашний адрес (город, село и т.д.);</li>
													<li>точная дата и время приезда, точная дата и время отъезда;</li>
													<li>контактный телефон.</li>
												</ul>
												<p class="text"><strong>Пребывание участников и сопровождающих лиц за счет направляющей стороны.</strong></p>
											</div>
										</div> <!-- accordion-item -->
									</div>

									<hr/>

									<p class="text-align-justify">К участию в заключительном этапе приглашаются победители и призеры отборочного этапа <strong>(до 45 % от общего числа участников по каждому предмету)</strong>. К участию в заключительном этапе также приглашаются победители и призеры заключительного этапа Олимпиад прошлого года, продолжающие освоение общеобразовательных программ.</p>

									<p class="text-justify">Победители и призеры заключительного этапа получают дипломы КФУ, которые распечатываются из личного кабинета на сайте <a href="https://abiturient.kpfu.ru/">"Буду студентом"</a>.</p>

									<p class="text-justify">Заключительный этап Межрегиональных предметных олимпиад КФУ пройдет в городах:</p>

									<ul class="mpo-sub-nav">
										<li>Казань, Казанский федеральный университет <strong>(все предметы)</strong>;
										</li>
										<li>Набережные Челны, Набережночелнинский институт КФУ <strong>(только химия, физика, математика, астрономия, информатика, биология, геология, экономика, татарский язык)</strong>;</li>
										<li>Елабуга, Елабужский институт КФУ <strong>(только русский язык, иностранный язык (английский, немецкий, французский, испанский и итальянский), литература, обществознание, право, педагогика, политология, история, география, экология)</strong>;</li>
										<li>Йошкар-Ола, Политехнический лицей-интернат <strong>(все предметы кроме геологии и татарского языка)</strong>;</li>
										<li>Красноярск, Сибирский государственный университет науки и технологий имени академика М.Ф. Решетнева <strong>(только химия)</strong>;</li>
										<li>Саранск, Республиканский лицей для одаренных детей <strong>(только химия), </strong>Национальный исследовательский<strong> </strong>Мордовский государственный университет имени Н.П. Огарёва <strong>(только физика и иностранный язык)</strong>;</li>
										<li>Самара, Самарский государственный технический университет <strong>(только химия)</strong>, Самарский национальный исследовательский университет им. академика С.П. Королева <strong>(только иностранный язык)</strong>;</li>
										<li>Чебоксары, <span style="background:white">Чувашский республиканский институт образования, пр. Максима Горького, 5</span> <strong>(только химия, физика и иностранный язык)</strong>;</li>
										<li>Уфа, Республиканский инженерный лицей-интернат <strong>(только химия, физика и иностранный язык)</strong>;</li>
										<li>Краснодар, ЦДО "Клуб программистов Матрица" <strong>(только химия)</strong>;</li>
										<li>Сыктывкар, Коми республиканский лицей-интернат для одаренных детей из сельской местности <strong>(только химия, физика и иностранный язык)</strong>;</li>
										<li>р.п. Хохольский Воронежская область, Хохольский лицей <strong>(только химия и физика)</strong>;</li>
										<li>Мелеуз, Башкирский институт технологий и управления <strong>(только химия, физика и иностранный язык);</strong></li>
										<li>Волгоград, Волгоградский государственный университет <strong>(только химия и физика)</strong>;</li>
										<li>Волжский Волгоградской области, Волжский филиал ВолГУ <strong>(только иностранный язык);</strong></li>
										<li>Киров, Лицей естественных наук<strong> (только химия);</strong></li>
										<li>Магнитогорск, Средняя общеобразовательная школа № 8<strong> (только химия);</strong></li>
										<li>Уральск. Казахстан<strong> (только химия, физика и иностранный язык);</strong></li>
										<li>Алматы, Казахстан<strong> (только химия, физика и иностранный язык).</strong></li>
									</ul>
								</div>
							</li>
							<li class="mpo-nav-item w-100 orgcom-contacts">
								<h3><strong>Контакты оргкомитета Олимпиад</strong></h3>

								<div class="text-justify main-color">
									<p class="text"><strong>Время работы: </strong>с<strong> </strong>понедельника по пятницу (суббота и воскресенье - выходные дни), 8.00-17.00, обед 12.00-13.00.</p>

									<p class="text"><strong>Адрес:</strong> Республика Татарстан, г. Казань, ул. Кремлевская, 35, каб. 217.</p>

									<p class="text"><strong>Телефон:</strong> (843) 233-70-90, 292-53-63.</p>

									<p class="text"><strong>E-mail:</strong> <a href="mailto:cdo.ksu@gmail.com">cdo.ksu@gmail.com</a></p>

									<h3>Мы <a href="https://vk.com/pre_university_kfu">Вконтакте</a>.</h3>
								</div>
							</li>
							<li class="mpo-nav-item w-100 literature">
								<h3><strong>Литература</strong></h3>
								<div class="text-justify main-color">
									<p class="text">Видеоразбор заданий прошлых лет Межрегиональной предметной олимпиады КФУ по химии подготовлен трехкратным победителем Всероссийской олимпиады, двукратным золотым медалистом Международной Менделеевской олимпиады, золотым медалистом Международной олимпиады по химии Курамшиным Булатом. Видео доступно по <strong><a href="https://vk.com/videos-153450618?z=video-153450618_456239018%2Fclub153450618%2Fpl_-153450618_-2">ссылке</a></strong>.</p>

									<hr/>
									<p class="text">Ниже представлен список литературы, который рекомендован методической комиссией и жюри Межрегиональных предметных олимпиад КФУ.</p>

									<div class="accordion-wrapper">
										<div class="accordion-item">
											<div class="accordion-header">
												<div class="accordion-item-header">
													<div class="icon"></div>
												</div>
												<h4 class="accordion-title">Астрономия</h4>
											</div>
											<div class="accordion-content">
												<ol class="mb-3"><li>А.В.Засов, Э.В.Кононович. Астрономия- 11. Учебник для 11 класса ср. школы. Изд-во Просвещение, М., 1996 (2-е изд.).</li>
													<li>П.Г. Куликовский. Справочник любителя астрономии – Москва, УРСС, 2002.</li>
													<li>Э.В. Кононович, В.И. Мороз. Курс общей астрономии – Москва, УРСС, 2003.</li>
													<li>Энциклопедия для детей. Том 8. Астрономия – Москва, Аванта+, 2004.</li>
													<li>В.Г. Сурдин. Астрономические олимпиады. Задачи с решениями – Москва, Издательство Учебно-научного центра довузовской подготовки МГУ, 1995.</li>
													<li>В.Г. Сурдин. Астрономические задачи с решениями – Москва, УРСС, 2002.</li>
													<li>Задачи Московской астрономической олимпиады. 1997-2002. Под ред. О.С. Угольникова, В.В. Чичмаря – Москва, МИОО, 2002.</li>
													<li>Задачи Московской астрономической олимпиады. 2003-2005. Под ред. О.С. Угольникова, В.В. Чичмаря – Москва, МИОО, 2005.</li>
													<li>А.М. Романов. Занимательные вопросы по астрономии и не только – Москва, МЦНМО, 2005.</li>
													<li>Всероссийская олимпиада школьников по астрономии. Авт.-сост. А.В. Засов и др. – Москва, Федеральное агентство по образованию, АПК и ППРО, 2005.</li>
													<li>Всероссийская олимпиада школьников по астрономии: содержание олимпиады и подготовка конкурсантов. Авт.-сост. О. С. Угольников – Москва, Федеральное агентство по образованию, АПК и ППРО, 2006 (в печати).</li>
												</ol>

												<p class="text">Ресурсы сети "Интернет":</p>

												<ol><li><a href="http://www.rosolymp.ru/">Официальный сайт всех Всероссийских олимпиад, созданный по инициативе Министерства образования и науки Российской Федерации и Федерального агентства по образованию.</a></li>
													<li><a href="http://www.astroolymp.ru/">Официальный сайт Всероссийской астрономической олимпиады.</a></li>
													<li><a href="http://school.astro.spbu.ru/">Сайт Астрономических олимпиад Санкт-Петербурга и Ленинградской области (задачи и решения).</a></li>
												</ol>
											</div>
										</div>
										<div class="accordion-item">
											<div class="accordion-header">
												<div class="accordion-item-header">
													<div class="icon"></div>
												</div>
												<h4 class="accordion-title">История</h4>
											</div>
											<div class="accordion-content">
												<ol class="mb-3"><li><a href="/sites/default/files/%D0%A3%D1%82%D0%BA%D0%B8%D0%BD%D0%B0%20%D0%AD.%20%D0%92.%20-%20%D0%A8%D0%BA%D0%BE%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5%20%D0%BE%D0%BB%D0%B8%D0%BC%D0%BF%D0%B8%D0%B0%D0%B4%D1%8B.%20%D0%98%D1%81%D1%82%D0%BE%D1%80%D0%B8%D1%8F.%2010-11%20%D0%BA%D0%BB.%20(%D0%A8%D0%BA%D0%BE%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5%20%D0%BE%D0%BB%D0%B8%D0%BC%D0%BF%D0%B8%D0%B0%D0%B4%D1%8B).%20-%202006.pdf">Уткина Э. В. - Школьные олимпиады. История. 10-11 кл. (Школьные олимпиады). - 2006.</a></li>
													<li><a href="/sites/default/files/%D0%A3%D1%82%D0%BA%D0%B8%D0%BD%D0%B0%20%D0%AD.%20%D0%92.%20-%20%D0%A8%D0%BA%D0%BE%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5%20%D0%BE%D0%BB%D0%B8%D0%BC%D0%BF%D0%B8%D0%B0%D0%B4%D1%8B.%20%D0%98%D1%81%D1%82%D0%BE%D1%80%D0%B8%D1%8F.%205-9%20%D0%BA%D0%BB.%20(%D0%A8%D0%BA%D0%BE%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5%20%D0%BE%D0%BB%D0%B8%D0%BC%D0%BF%D0%B8%D0%B0%D0%B4%D1%8B).%20-%202006.pdf">Уткина Э. В. - Школьные олимпиады. История. 5-9 кл. (Школьные олимпиады). - 2006.</a></li>
													<li><a href="/sites/default/files/%D0%9A%D0%B8%D1%80%D0%B8%D0%BB%D0%BE%D0%B2%D0%B0%20%D0%95.%20%D0%98.%20(%D1%81%D0%BE%D1%81%D1%82.).%20-%20%D0%9E%D0%BB%D0%B8%D0%BC%D0%BF%D0%B8%D0%B0%D0%B4%D1%8B%20%D0%BF%D0%BE%20%D0%B8%D1%81%D1%82%D0%BE%D1%80%D0%B8%D0%B8.%2010%20%D0%BA%D0%BB%D0%B0%D1%81%D1%81.%20-%202006.pdf">Кирилова Е. И. (сост.). - Олимпиады по истории. 10 класс. - 2006.</a></li>
													<li><a href="/sites/default/files/%D0%91%D0%B0%D1%80%D0%B7%D0%B0%D0%BA%20%D0%95.%20%D0%9F.%20(%D1%81%D0%BE%D1%81%D1%82.).%20-%20%D0%9E%D0%BB%D0%B8%D0%BC%D0%BF%D0%B8%D0%B0%D0%B4%D1%8B%20%D0%BF%D0%BE%20%D0%B8%D1%81%D1%82%D0%BE%D1%80%D0%B8%D0%B8.%2011%20%D0%BA%D0%BB%D0%B0%D1%81%D1%81.%20-%202006.pdf">Барзак Е. П. (сост.). - Олимпиады по истории. 11 класс. - 2006.</a></li>
												</ol><p>Интернет-ресурсы:</p>

												<ol><li><a href="http://info.olimpiada.ru/activity/84/tasks/2017">Всероссийская олимпиада школьников по истории.</a></li>
												<li><a href="https://olymp.hse.ru/mmo/tasks-history">Задания и решения Олимпиады школьников "Высшая проба".</a></li>
												</ol>
											</div>
										</div>

										<div class="accordion-item">
											<div class="accordion-header">
												<div class="accordion-item-header">
													<div class="icon"></div>
												</div>
												<h4 class="accordion-title">Математика</h4>
											</div>
											<div class="accordion-content">
												<ol><li> Николай Борисович Васильев, Виктор Львович Гутенмахер, Жозеф Михайлович Раббот, Андрей Леонович Тоом,<i> </i><a href="http://ilib.mccme.ru/djvu/olimp/zaochnye.htm">Заочные математические олимпиады</a>.М., Наука, 1987 — 176 с. </li>
													<li>Муштари Данияр Хамидович. Подготовка к математическим олимпиадам : Кн. для учащихся / Д.Х. Муштари. - Казань : Каз. мат. о-во, 2000. - 240 с.</li>
												</ol>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="mpo-nav-item w-100 archive">
								<h3 class="text-center text-uppercase"><strong>Архив</strong></h3>
							</li>
							<li class="mpo-nav-item w-100 results">
								<h3 class="text-align-justify"><strong>Результаты олимпиад:</strong>  </h3>
								<div class="accordion-wrapper">
									<div class="accordion-item">
										<div class="accordion-header">
											<div class="accordion-item-header">
												<div class="icon"></div>
											</div>
											<h4 class="accordion-title text-uppercase">2019-2020 учебный год(раскрыть)</h4>
										</div>
										<div class="accordion-content">
											<p class="text">Астрономия. Итоговые протоколы с указанием мест.</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%90%D0%A1%D0%A2%D0%A0%D0%9E%D0%9D%D0%9E%D0%9C%D0%98%D0%AF%209%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">9 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%90%D0%A1%D0%A2%D0%A0%D0%9E%D0%9D%D0%9E%D0%9C%D0%98%D0%AF%2010%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">10 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%90%D0%A1%D0%A2%D0%A0%D0%9E%D0%9D%D0%9E%D0%9C%D0%98%D0%AF%2011%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">11 класс</a></li>
											</ul><p class="text">Биология. Итоговые протоколы с указанием мест.</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%91%D0%98%D0%9E%D0%9B%D0%9E%D0%93%D0%98%D0%AF%209%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">9 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%91%D0%98%D0%9E%D0%9B%D0%9E%D0%93%D0%98%D0%AF%2010%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">10 класс</a> </li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%91%D0%98%D0%9E%D0%9B%D0%9E%D0%93%D0%98%D0%AF%2011%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0_2.pdf">11 класс</a></li>
											</ul><p class="text">География. Итоговые протоколы с указанием мест.</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%93%D0%95%D0%9E%D0%93%D0%A0%D0%90%D0%A4%D0%98%D0%AF%209_7.pdf">9 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%93%D0%95%D0%9E%D0%93%D0%A0%D0%90%D0%A4%D0%98%D0%AF%2010_4.pdf">10 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%93%D0%95%D0%9E%D0%93%D0%A0%D0%90%D0%A4%D0%98%D0%AF%2011_4.pdf">11 класс</a></li>
											</ul><p class="text">Геология. Итоговые протоколы с указанием мест.</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%93%D0%95%D0%9E%D0%9B%D0%9E%D0%93%D0%98%D0%AF%208%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">8 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%93%D0%95%D0%9E%D0%9B%D0%9E%D0%93%D0%98%D0%AF%209%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0_0.pdf">9 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%93%D0%95%D0%9E%D0%9B%D0%9E%D0%93%D0%98%D0%AF%2010%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">10 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%93%D0%95%D0%9E%D0%9B%D0%9E%D0%93%D0%98%D0%AF%2011%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">11 класс</a></li>
											</ul><p class="text">Иностранные языки:</p>

											<p class="text">Английский язык. Итоговые протоколы с указанием мест.</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%90%D0%9D%D0%93%D0%9B%D0%98%D0%99%D0%A1%D0%9A%D0%98%D0%99%20%D0%AF%D0%97%D0%AB%D0%9A%208%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">8 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%90%D0%9D%D0%93%D0%9B%D0%98%D0%99%D0%A1%D0%9A%D0%98%D0%99%20%D0%AF%D0%97%D0%AB%D0%9A%209%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">9 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%90%D0%9D%D0%93%D0%9B%D0%98%D0%99%D0%A1%D0%9A%D0%98%D0%99%20%D0%AF%D0%97%D0%AB%D0%9A%2010%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">10 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%90%D0%9D%D0%93%D0%9B%D0%98%D0%99%D0%A1%D0%9A%D0%98%D0%99%20%D0%AF%D0%97%D0%AB%D0%9A%2011%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0_3.pdf">11 класс</a></li>
											</ul><p class="text">Испанский язык. Итоговые протоколы с указанием мест.</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%98%D0%A1%D0%9F%D0%90%D0%9D%D0%A1%D0%9A%D0%98%D0%99%20%D0%AF%D0%97%D0%AB%D0%9A%208-11%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">8-11 классы</a></li>
											</ul><p class="text">Итальянский язык. Итоговые протоколы с указанием мест.</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%98%D0%A2%D0%90%D0%9B%D0%AC%D0%AF%D0%9D%D0%A1%D0%9A%D0%98%D0%99%20%D0%AF%D0%97%D0%AB%D0%9A%208-11%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">8-11 классы</a></li>
											</ul><p class="text">Немецкий язык. Итоговые протоколы с указанием мест.</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%9D%D0%95%D0%9C%D0%95%D0%A6%D0%9A%D0%98%D0%99%20%D0%AF%D0%97%D0%AB%D0%9A%208-11%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">8-11 классы</a></li>
											</ul><p class="text">Французский язык. Итоговые протоколы с указанием мест.</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%A4%D0%A0%D0%90%D0%9D%D0%A6%D0%A3%D0%97%D0%A1%D0%9A%D0%98%D0%99%20%D0%AF%D0%97%D0%AB%D0%9A%208-11%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">8-11 классы</a></li>
											</ul><p class="text">Информатика. Итоговые протоколы с указанием мест.</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%98%D0%9D%D0%A4%D0%9E%D0%A0%D0%9C%D0%90%D0%A2%D0%98%D0%9A%D0%90%209%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">9 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%98%D0%9D%D0%A4%D0%9E%D0%A0%D0%9C%D0%90%D0%A2%D0%98%D0%9A%D0%90%2010%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">10 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%98%D0%9D%D0%A4%D0%9E%D0%A0%D0%9C%D0%90%D0%A2%D0%98%D0%9A%D0%90%2011%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">11 класс</a></li>
											</ul><p class="text">История. Итоговые протоколы с указанием мест.</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%98%D0%A1%D0%A2%D0%9E%D0%A0%D0%98%D0%AF%209%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">9 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%98%D0%A1%D0%A2%D0%9E%D0%A0%D0%98%D0%AF%2010%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">10 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%98%D0%A1%D0%A2%D0%9E%D0%A0%D0%98%D0%AF%2011%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0_1.pdf">11 класс</a></li>
											</ul><p class="text">Литература. Итоговые протоколы с указанием мест.</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%9B%D0%98%D0%A2%D0%95%D0%A0%D0%90%D0%A2%D0%A3%D0%A0%D0%90%209%20%D1%81%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0%D0%BC%D0%B8.pdf">9 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%9B%D0%98%D0%A2%D0%95%D0%A0%D0%90%D0%A2%D0%A3%D0%A0%D0%90%2010%20%D1%81%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0%D0%BC%D0%B8.pdf">10 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%9B%D0%98%D0%A2%D0%95%D0%A0%D0%90%D0%A2%D0%A3%D0%A0%D0%90%2011%20%D1%81%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0%D0%BC%D0%B8.pdf">11 класс</a></li>
											</ul><p class="text">Математика. Итоговые протоколы с указанием мест.</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%9C%D0%90%D0%A2%D0%95%D0%9C%D0%90%D0%A2%D0%98%D0%9A%D0%90%209_2.pdf">9 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%9C%D0%90%D0%A2%D0%95%D0%9C%D0%90%D0%A2%D0%98%D0%9A%D0%90%2010_3.pdf">10 класс</a> </li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%9C%D0%90%D0%A2%D0%95%D0%9C%D0%90%D0%A2%D0%98%D0%9A%D0%90%2011_2.pdf">11 класс</a></li>
											</ul><p class="text">Обществознание. Итоговые протоколы с указанием мест.</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%9E%D0%91%D0%A9%D0%95%D0%A1%D0%A2%D0%92%D0%9E%D0%97%D0%9D%D0%90%D0%9D%D0%98%D0%95%209%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">9 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%9E%D0%91%D0%A9%D0%95%D0%A1%D0%A2%D0%92%D0%9E%D0%97%D0%9D%D0%90%D0%9D%D0%98%D0%95%2010%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0_1.pdf">10 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%9E%D0%91%D0%A9%D0%95%D0%A1%D0%A2%D0%92%D0%9E%D0%97%D0%9D%D0%90%D0%9D%D0%98%D0%95%2011%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0_3.pdf">11 класс</a></li>
											</ul><p class="text">Педагогика. Итоговые протоколы с указанием мест.</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%9F%D0%95%D0%94%D0%90%D0%93%D0%9E%D0%93%D0%98%D0%9A%D0%90%209%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">9 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%9F%D0%95%D0%94%D0%90%D0%93%D0%9E%D0%93%D0%98%D0%9A%D0%90%2010%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0_1.pdf">10 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%9F%D0%95%D0%94%D0%90%D0%93%D0%9E%D0%93%D0%98%D0%9A%D0%90%2011%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">11 класс</a></li>
											</ul><p class="text">Политология. Итоговые протоколы с указанием мест.</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%9F%D0%9E%D0%9B%D0%98%D0%A2%D0%9E%D0%9B%D0%9E%D0%93%D0%98%D0%AF%209%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">9 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%9F%D0%9E%D0%9B%D0%98%D0%A2%D0%9E%D0%9B%D0%9E%D0%93%D0%98%D0%AF%2010%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">10 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%9F%D0%9E%D0%9B%D0%98%D0%A2%D0%9E%D0%9B%D0%9E%D0%93%D0%98%D0%AF%2011%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0_1.pdf">11 класс</a></li>
											</ul><p class="text">Право. Итоговые протоколы с указанием мест.</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%9F%D0%A0%D0%90%D0%92%D0%9E%209%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">9 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%9F%D0%A0%D0%90%D0%92%D0%9E%2010%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">10 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%9F%D0%A0%D0%90%D0%92%D0%9E%2011%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0_0.pdf">11 класс</a></li>
											</ul><p class="text">Русский язык. Итоговые протоколы с указанием мест.</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%A0%D0%A3%D0%A1%D0%A1%D0%9A%D0%98%D0%99%20%D0%AF%D0%97%D0%AB%D0%9A%208%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">8 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%A0%D0%A3%D0%A1%D0%A1%D0%9A%D0%98%D0%99%20%D0%AF%D0%97%D0%AB%D0%9A%209%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">9 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%A0%D0%A3%D0%A1%D0%A1%D0%9A%D0%98%D0%99%20%D0%AF%D0%97%D0%AB%D0%9A%2010%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0_0.pdf">10 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%A0%D0%A3%D0%A1%D0%A1%D0%9A%D0%98%D0%99%20%D0%AF%D0%97%D0%AB%D0%9A%2011%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">11 класс</a></li>
											</ul><p class="text">Татарский язык. Итоговые протоколы с указанием мест.</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%A2%D0%90%D0%A2%D0%90%D0%A0%D0%A1%D0%9A%D0%98%D0%99%20%D0%AF%D0%97%D0%AB%D0%9A%209_3.pdf">9 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%A2%D0%90%D0%A2%D0%90%D0%A0%D0%A1%D0%9A%D0%98%D0%99%20%D0%AF%D0%97%D0%AB%D0%9A%2010_3.pdf">10 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%A2%D0%90%D0%A2%D0%90%D0%A0%D0%A1%D0%9A%D0%98%D0%99%20%D0%AF%D0%97%D0%AB%D0%9A%2011_3.pdf">11 класс</a></li>
											</ul><p class="text">Физика. Итоговые протоколы с указанием мест.</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%A4%D0%98%D0%97%D0%98%D0%9A%D0%90%208%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">8 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%A4%D0%98%D0%97%D0%98%D0%9A%D0%90%209%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">9 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%A4%D0%98%D0%97%D0%98%D0%9A%D0%90%2010%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">10 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%A4%D0%98%D0%97%D0%98%D0%9A%D0%90%2011%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0_0.pdf">11 класс</a></li>
											</ul><p class="text">Химия. Итоговые протоколы с указанием мест.</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%A5%D0%98%D0%9C%D0%98%D0%AF%208%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">8 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%A5%D0%98%D0%9C%D0%98%D0%AF%209%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0_0.pdf">9 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%A5%D0%98%D0%9C%D0%98%D0%AF%2010%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">10 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%A5%D0%98%D0%9C%D0%98%D0%AF%2011%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0_1.pdf">11 класс</a></li>
											</ul><p class="text">Экология. Итоговые протоколы с указанием мест.</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%AD%D0%9A%D0%9E%D0%9B%D0%9E%D0%93%D0%98%D0%AF%209%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">9 класс</a> </li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%AD%D0%9A%D0%9E%D0%9B%D0%9E%D0%93%D0%98%D0%AF%2010%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">10 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%AD%D0%9A%D0%9E%D0%9B%D0%9E%D0%93%D0%98%D0%AF%2011%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">11 класс</a></li>
											</ul><p class="text">Экономика. Итоговые протоколы с указанием мест.</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%AD%D0%9A%D0%9E%D0%9D%D0%9E%D0%9C%D0%98%D0%9A%D0%90%209%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">9 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%AD%D0%9A%D0%9E%D0%9D%D0%9E%D0%9C%D0%98%D0%9A%D0%90%2010%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0_0.pdf">10 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%98%D1%82%D0%BE%D0%B3%D0%BE%D0%B2%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%20%D0%AD%D0%9A%D0%9E%D0%9D%D0%9E%D0%9C%D0%98%D0%9A%D0%90%2011%20%D0%BC%D0%B5%D1%81%D1%82%D0%B0.pdf">11 класс</a></li>
											</ul>
										</div>
									</div>
								</div>
							</li>
							<li class="mpo-nav-item w-100 tasks-and-decisions">
								<h3 class="text-align-justify"><strong>Олимпиадные задания и решения: </strong></h3>
								<div class="accordion-wrapper">
									<div class="accordion-item">
										<div class="accordion-header">
											<div class="accordion-item-header">
												<div class="icon"></div>
											</div>
											<h4 class="accordion-title text-uppercase">2019-2020 учебный год(раскрыть)</h4>
										</div>
										<div class="accordion-content">
											<p class="text">Астрономия</p>
											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/9_%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%BD%D0%BE%D0%BC%D0%B8%D1%8F%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">9 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/10_%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%BD%D0%BE%D0%BC%D0%B8%D1%8F%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">10 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/11_%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%BD%D0%BE%D0%BC%D0%B8%D1%8F%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">11 класс</a></li>
											</ul><p>Биология</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/9%20%D0%BA%D0%BB%D0%B0%D1%81%D1%81_%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">9 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/10%20%D0%BA%D0%BB%D0%B0%D1%81%D1%81_%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">10 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/11%20%D0%BA%D0%BB%D0%B0%D1%81%D1%81_%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">11 класс</a></li>
											</ul><p>География</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/9_%20%D0%B3%D0%B5%D0%BE%D0%B3%D1%80%D0%B0%D1%84%D0%B8%D1%8F%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">9 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/10-11_%D0%B3%D0%B5%D0%BE%D0%B3%D1%80%D0%B0%D1%84%D0%B8%D1%8F%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">10-11 классы</a></li>
											</ul><p>Геология</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/8%20%D0%BA%D0%BB%D0%B0%D1%81%D1%81%20-%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">8 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/9%20%D0%BA%D0%BB%D0%B0%D1%81%D1%81%20-%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">9 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/10%20%D0%BA%D0%BB%D0%B0%D1%81%D1%81%20-%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">10 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/11%20%D0%BA%D0%BB%D0%B0%D1%81%D1%81%20-%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">11 класс</a></li>
											</ul><p>Иностранные языки</p>

											<p class="text">Английский язык</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/8_%D0%B0%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA.pdf">8 класс</a> (<a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/8_%D0%B0%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">ответы</a>)</li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/9_%D0%B0%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA.pdf">9 класс</a> (<a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/9_%D0%B0%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">ответы</a>)</li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/10_%D0%B0%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA.pdf">10 класс</a> (<a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/10_%D0%B0%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">ответы</a>)</li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/11_%D0%B0%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA.pdf">11 класс</a> (<a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/11_%D0%B0%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B_0.pdf">ответы</a>)</li>
											</ul><p class="text mt-3"><strong>Комментарий.</strong> В ответах за 11 класс обнаружены технические ошибки, но они не повлияли на проверку письменных работ. </p>

											<p class="text">Испанский язык</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/8_%D0%B8%D1%81%D0%BF%D0%B0%D0%BD%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA_%D0%B7%D0%B0%D0%B4%D0%B0%D0%BD%D0%B8%D1%8F.pdf">8 класс</a> (<a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/8_%D0%B8%D1%81%D0%BF%D0%B0%D0%BD%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">ответы</a>)</li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/9_%D0%B8%D1%81%D0%BF%D0%B0%D0%BD%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA_%D0%B7%D0%B0%D0%B4%D0%B0%D0%BD%D0%B8%D1%8F.pdf">9 класс</a> (<a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/9_%D0%B8%D1%81%D0%BF%D0%B0%D0%BD%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">ответы</a>)</li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/10_%D0%B8%D1%81%D0%BF%D0%B0%D0%BD%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA_%D0%B7%D0%B0%D0%B4%D0%B0%D0%BD%D0%B8%D1%8F.pdf">10 класс</a> (<a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/10_%D0%B8%D1%81%D0%BF%D0%B0%D0%BD%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">ответы</a>)</li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/11_%D0%B8%D1%81%D0%BF%D0%B0%D0%BD%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA_%D0%B7%D0%B0%D0%B4%D0%B0%D0%BD%D0%B8%D1%8F.pdf">11 класс</a> (<a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/11_%D0%B8%D1%81%D0%BF%D0%B0%D0%BD%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">ответы</a>)</li>
											</ul><p class="text">Итальянский язык</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/8_%D0%B8%D1%82%D0%B0%D0%BB%D1%8C%D1%8F%D0%BD%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA.pdf">8 класс</a> (<a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/8_%D0%B8%D1%82%D0%B0%D0%BB%D1%8C%D1%8F%D0%BD%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA_%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">ответы</a>)</li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/9_%D0%B8%D1%82%D0%B0%D0%BB%D1%8C%D1%8F%D0%BD%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA.pdf">9 класс</a> (<a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/9_%D0%B8%D1%82%D0%B0%D0%BB%D1%8C%D1%8F%D0%BD%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">ответы</a>)</li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/10_%D0%B8%D1%82%D0%B0%D0%BB%D1%8C%D1%8F%D0%BD%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA.pdf">10 класс</a> (<a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/10_%D0%B8%D1%82%D0%B0%D0%BB%D1%8C%D1%8F%D0%BD%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">ответы</a>)</li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/11_%D0%B8%D1%82%D0%B0%D0%BB%D1%8C%D1%8F%D0%BD%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA.pdf">11 класс</a> (<a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/11_%D0%B8%D1%82%D0%B0%D0%BB%D1%8C%D1%8F%D0%BD%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">ответы</a>)</li>
											</ul><p class="text">Немецкий язык</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/8_%D0%BD%D0%B5%D0%BC%D0%B5%D1%86%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA%20%D0%B7%D0%B0%D0%B4%D0%B0%D0%BD%D0%B8%D1%8F.pdf">8 класс</a> (<a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/8_%D0%BD%D0%B5%D0%BC%D0%B5%D1%86%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">ответы</a>)</li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/9_%D0%BD%D0%B5%D0%BC%D0%B5%D1%86%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA%20%D0%B7%D0%B0%D0%B4%D0%B0%D0%BD%D0%B8%D1%8F.pdf">9 класс</a> (<a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/9_%D0%BD%D0%B5%D0%BC%D0%B5%D1%86%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">ответы</a>)</li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/10_%D0%BD%D0%B5%D0%BC%D0%B5%D1%86%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA%20%D0%B7%D0%B0%D0%B4%D0%B0%D0%BD%D0%B8%D1%8F.pdf">10 класс</a> (<a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/10_%D0%BD%D0%B5%D0%BC%D0%B5%D1%86%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">ответы</a>)</li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/11_%D0%BD%D0%B5%D0%BC%D0%B5%D1%86%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA%20%D0%B7%D0%B0%D0%B4%D0%B0%D0%BD%D0%B8%D1%8F.pdf">11 класс</a> (<a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/11_%D0%BD%D0%B5%D0%BC%D0%B5%D1%86%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">ответы</a>)</li>
											</ul><p class="text">Французский язык</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/8_%D1%84%D1%80%D0%B0%D0%BD%D1%86%D1%83%D0%B7%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA.pdf">8 класс</a> (<a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/8_%D1%84%D1%80%D0%B0%D0%BD%D1%86%D1%83%D0%B7%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">ответы</a>)</li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/9_%D1%84%D1%80%D0%B0%D0%BD%D1%86%D1%83%D0%B7%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA.pdf">9 класс</a> (<a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/9_%D1%84%D1%80%D0%B0%D0%BD%D1%86%D1%83%D0%B7%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">ответы</a>)</li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/10_%D1%84%D1%80%D0%B0%D0%BD%D1%86%D1%83%D0%B7%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA.pdf">10 класс</a> (<a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/10_%D1%84%D1%80%D0%B0%D0%BD%D1%86%D1%83%D0%B7%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">ответы</a>)</li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/11_%D1%84%D1%80%D0%B0%D0%BD%D1%86%D1%83%D0%B7%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA.pdf">11 класс</a> (<a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/11_%D1%84%D1%80%D0%B0%D0%BD%D1%86%D1%83%D0%B7%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">ответы</a>)</li>
											</ul><p class="text">Информатика</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/9_%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0.pdf">9 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/10_%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0.pdf">10 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/11_%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0.pdf">11 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/9-11_%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">9-11 классы (ответы)</a></li>
											</ul><p class="text">История</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/9_%D0%B8%D1%81%D1%82%D0%BE%D1%80%D0%B8%D1%8F%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">9 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/10_%D0%B8%D1%81%D1%82%D0%BE%D1%80%D0%B8%D1%8F%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">10 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/11_%D0%B8%D1%81%D1%82%D0%BE%D1%80%D0%B8%D1%8F%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">11 класс</a></li>
											</ul><p class="text">Литература</p>

											<ul class="mpo-sub-nav"><li>9 класс</li>
												<li>10 класс</li>
												<li>11 класс</li>
											</ul><p class="text">Математика</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/9_%D0%BC%D0%B0%D1%82%D0%B5%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0%20%D1%81%20%D1%80%D0%B5%D1%88%D0%B5%D0%BD%D0%B8%D1%8F%D0%BC%D0%B8.pdf">9 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/10_%D0%BC%D0%B0%D1%82%D0%B5%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0%20%D1%81%20%D1%80%D0%B5%D1%88%D0%B5%D0%BD%D0%B8%D1%8F%D0%BC%D0%B8.pdf">10 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/11_%D0%BC%D0%B0%D1%82%D0%B5%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0%20%D1%81%20%D1%80%D0%B5%D1%88%D0%B5%D0%BD%D0%B8%D1%8F%D0%BC%D0%B8.pdf">11 класс</a></li>
											</ul><p class="text">Обществознание</p>

											<ul class="mpo-sub-nav"><li>9 класс <a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/9-1_%D0%BE%D0%B1%D1%89%D0%B5%D1%81%D1%82%D0%B2%D0%BE%D0%B7%D0%BD%D0%B0%D0%BD%D0%B8%D0%B5.pdf">1 вариант</a> <a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/9-2_%D0%BE%D0%B1%D1%89%D0%B5%D1%81%D1%82%D0%B2%D0%BE%D0%B7%D0%BD%D0%B0%D0%BD%D0%B8%D0%B5.pdf">2 вариант</a></li>
												<li>10 класс <a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/10-1_%D0%BE%D0%B1%D1%89%D0%B5%D1%81%D1%82%D0%B2%D0%BE%D0%B7%D0%BD%D0%B0%D0%BD%D0%B8%D0%B5.pdf">1 вариант</a> <a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/10-2-%D0%BE%D0%B1%D1%89%D0%B5%D1%81%D1%82%D0%B2%D0%BE%D0%B7%D0%BD%D0%B0%D0%BD%D0%B8%D0%B5.pdf">2 вариант</a></li>
												<li>11 класс <a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/11-1_%D0%BE%D0%B1%D1%89%D0%B5%D1%81%D1%82%D0%B2%D0%BE%D0%B7%D0%BD%D0%B0%D0%BD%D0%B8%D0%B5.pdf">1 вариант</a> <a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/11-2_%D0%BE%D0%B1%D1%89%D0%B5%D1%81%D1%82%D0%B2%D0%BE%D0%B7%D0%BD%D0%B0%D0%BD%D0%B8%D0%B5.pdf">2 вариант</a></li>
											</ul><p class="text">Педагогика</p>

											<ul><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/9_%D0%BF%D0%B5%D0%B4%D0%B0%D0%B3%D0%BE%D0%B3%D0%B8%D0%BA%D0%B0%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">9 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/10_%D0%BF%D0%B5%D0%B4%D0%B0%D0%B3%D0%BE%D0%B3%D0%B8%D0%BA%D0%B0%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">10 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/11_%D0%BF%D0%B5%D0%B4%D0%B0%D0%B3%D0%BE%D0%B3%D0%B8%D0%BA%D0%B0%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">11 класс</a></li>
											</ul><p class="text">Политология</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/9%20%D0%BA%D0%BB%D0%B0%D1%81%D1%81%20%D0%9F%D0%BE%D0%BB%D0%B8%D1%82%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">9 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/10%20%D0%BA%D0%BB%D0%B0%D1%81%D1%81%20%D0%9F%D0%BE%D0%BB%D0%B8%D1%82%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">10 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/11%20%D0%BA%D0%BB%D0%B0%D1%81%D1%81%20%D0%9F%D0%BE%D0%BB%D0%B8%D1%82%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">11 класс</a></li>
											</ul><p class="text">Право</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/9%20%D0%BA%D0%BB%D0%B0%D1%81%D1%81%20%D1%81%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D0%B0%D0%BC%D0%B8.pdf">9 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/10%20%D0%BA%D0%BB%D0%B0%D1%81%D1%81%20%20%D1%81%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D0%B0%D0%BC%D0%B8.pdf">10 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/11%20%D0%BA%D0%BB%D0%B0%D1%81%D1%81%20%D1%81%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D0%B0%D0%BC%D0%B8.pdf">11 класс</a></li>
											</ul><p class="text">Русский язык</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9E%D0%BB%D0%B8%D0%BC%D0%BF_%D0%9A%D0%A4%D0%A3_%D1%80%D1%83%D1%81_%D1%8F%D0%B7_2019_2020_8-9%20%D0%BA%D0%BB%D0%B0%D1%81%D1%81-%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">8-9 классы</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9E%D0%BB%D0%B8%D0%BC%D0%BF_%D0%9A%D0%A4%D0%A3_%D1%80%D1%83%D1%81_%D1%8F%D0%B7_2019_2020_10-11%20%D0%BA%D0%BB%D0%B0%D1%81%D1%81-%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">10-11 классы</a></li>
											</ul><p class="text">Татарский язык</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/9_%D1%82%D0%B0%D1%82%D0%B0%D1%80%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">9 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/10_%D1%82%D0%B0%D1%82%D0%B0%D1%80%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">10 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/11_%D1%82%D0%B0%D1%82%D0%B0%D1%80%D1%81%D0%BA%D0%B8%D0%B9%20%D1%8F%D0%B7%D1%8B%D0%BA%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">11 класс</a></li>
											</ul><p class="text">Физика</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/8_%D1%84%D0%B8%D0%B7%D0%B8%D0%BA%D0%B0_%D1%80%D0%B5%D1%88%D0%B5%D0%BD%D0%B8%D1%8F.pdf">8 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/9_%D1%84%D0%B8%D0%B7%D0%B8%D0%BA%D0%B0_%20%D1%80%D0%B5%D1%88%D0%B5%D0%BD%D0%B8%D1%8F.pdf">9 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/10_%D1%84%D0%B8%D0%B7%D0%B8%D0%BA%D0%B0_%D1%80%D0%B5%D1%88%D0%B5%D0%BD%D0%B8%D1%8F.pdf">10 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/11_%D1%84%D0%B8%D0%B7%D0%B8%D0%BA%D0%B0_%D1%80%D0%B5%D1%88%D0%B5%D0%BD%D0%B8%D1%8F.pdf">11 класс</a></li>
											</ul><p class="text">Химия</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9F%D0%9E%D0%A5_2020_%D0%97%D0%B0%D0%B4%D0%B0%D0%BD%D0%B8%D1%8F_%D0%BF%D1%80%D0%B0%D0%B2.pdf">8-11 классы задания</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/%D0%9C%D0%9F%D0%9E%D0%A5_2020_%D0%A0%D0%B5%D1%88%D0%B5%D0%BD%D0%B8%D1%8F_%D0%BF%D1%80%D0%B0%D0%B2_0.pdf">8-11 классы ответы</a></li>
											</ul><p class="text">Экология</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/9_%D1%8D%D0%BA%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">9 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/10_%D1%8D%D0%BA%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">10 класс</a></li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/11_%D1%8D%D0%BA%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">11 класс</a></li>
											</ul><p class="text">Экономика</p>

											<ul class="mpo-sub-nav"><li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/9_%D1%8D%D0%BA%D0%BE%D0%BD%D0%BE%D0%BC%D0%B8%D0%BA%D0%B0.pdf">9 класс</a> (<a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/9%20%D0%BA%D0%BB%D0%B0%D1%81%D1%81%20%D1%8D%D0%BA%D0%BE%D0%BD%D0%BE%D0%BC%D0%B8%D0%BA%D0%B0%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">ответы</a>)</li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/10_%D1%8D%D0%BA%D0%BE%D0%BD%D0%BE%D0%BC%D0%B8%D0%BA%D0%B0.pdf">10 класс</a> (<a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/10%20%D0%BA%D0%BB%D0%B0%D1%81%D1%81%20%D1%8D%D0%BA%D0%BE%D0%BD%D0%BE%D0%BC%D0%B8%D0%BA%D0%B0%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B_0.pdf">ответы</a>)</li>
												<li><a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/11_%D1%8D%D0%BA%D0%BE%D0%BD%D0%BE%D0%BC%D0%B8%D0%BA%D0%B0.pdf">11 класс</a> (<a href="/sites/default/files/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%20%D0%A0%D1%81%D0%9E%D0%A8/11%20%D0%BA%D0%BB%D0%B0%D1%81%D1%81%20%D1%8D%D0%BA%D0%BE%D0%BD%D0%BE%D0%BC%D0%B8%D0%BA%D0%B0%20%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%8B.pdf">ответы</a>)</li>
											</ul>
										</div>
									</div>
								</div>
							</li>
						</ul> <!-- nav -->
					</div> <!-- mpo-nav -->
				</div> <!-- mpo-content -->
			</div>
		</div>

	</div>

	<div class="back-to-top" onclick="scrollToTop()">
		<div class="arrow">	
		</div>
	</div>

</section>

<?php get_footer(); ?>