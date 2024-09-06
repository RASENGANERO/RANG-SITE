<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная"); ?><main>
<div class="hero main-hero">
	<div class="container">
		<p class="main-hero__text">
			 Запускаем бизнес на космических скоростях в офлайн и диджитал среде
		</p>
		<div class="hero_block">
			<div class="title_hero title-main">
				<h3><br>
				</h3>
				<h1>МАРКЕТИНГОВОЕ <br>
				 БУТИК АГЕНТСТВО </h1>
				<h3>на базе AI инфраструктуры и инновационных IT решений</h3>
			</div>
		</div>
	</div>
</div>
<div class="dragon-section">
	<div class="container">
		<div class="dragon-block">
			<div class="dragon-block__item">
 <img src="/local/templates/jvas/img/dragon-logo.png" class="dragon-logo" alt="">
				<h2>РАНГ - для бизнеса нацеленного на амбициозные результаты</h2>
				<h3>Персональный подход к вашему бизнесу и лимитированное количество клиентов на сопровождении</h3>
 <a class="dragon-btn" href="#">Подробнее об агентстве</a>
			</div>
			<div class="dragon-block__item dragon-block__item-angelina">
 <img src="/local/templates/jvas/img/angelina-bg-mob.png" class="angelina-bg" alt="">
				<h2 class="angelina-name">Ангелина Мартовская</h2>
				<p class="angelina-job">
					 Основатель “РАНГ” <br>
					 Разработчик AI инфраструктуры
				</p>
			</div>
		</div>
	</div>
</div>
<div class="count-block count-block1">
	<div class="container">
		<div class="count-content">
			<div class="count-item">
				<h3>50+</h3>
				<p>
					 НИШ, в которых мы эксперты
				</p>
			</div>
			<div class="count-item">
				<h3>2+</h3>
				<p>
					 МЛРД, управление рекламным бюджетом
				</p>
			</div>
			<div class="count-item">
				<h3>100+</h3>
				<p>
					 МЛРД, заработали клиенты
				</p>
			</div>
		</div>
	</div>
</div>
<div class="agency-resident">
	<div class="container">
		<div class="title_hero agency_title">
			<h2>РЕЗИДЕНТЫ АГЕНТСТВА</h2>
			<h3>Люди которые работают над успехом вашего бренда</h3>
		</div>
		 <!-- Swiper -->
		<div class="swiper agencySlider">
			<div class="swiper-wrapper">
				 <?php 
                    $data = Functions::GetResidents();
                    foreach($data as $item) {
                ?>
				<div class="swiper-slide">
					<div class="agency_wrap">
						<div class="agencySlider-card">
 <img src="<?=$item['PREVIEW_IMAGE']?>" alt="" class="agencySlider-card-img">
							<div class="agencySlider-text">
								<div class="agencySlider-titles">
									<h2><?=$item['NAME']?></h2>
									<p>
										 <?=$item['PROPERTIES']['SPECIAL_CODE'][0]?>
									</p>
								</div>
 <button class="agency_card-btn">регалии </button>
							</div>
						</div>
						<div class="card_info">
							<p>
								 <?=$item['PROPERTIES']['TYPE_CODE'][0]?>
							</p>
							<div class="card_info-box">
 <span class="card_info-text-main">Образование</span>
								<?php 
									foreach($item['PROPERTIES']['EDUCATION_CODE'] as $value) {
                                ?>
								<p>
									 <?=$value?>
								</p>
								 <?php 
								} 
								?>
							</div>
							<div class="card_info-box">
 <span class="card_info-text-main">Опыт работы</span>
								<?php 
                                    foreach($item['PROPERTIES']['WORKEXPIRIENCE_CODE'] as $value) {
                                ?>
								<p>
									 <?=$value?>
								</p>
								 <?php 
								} 
								?>
							</div>
							<div class="card_info-box">
 <span class="card_info-text-main">Достижения</span>
								<?php 
                                    foreach($item['PROPERTIES']['ACHIVMENTS_CODE'] as $value) {
                                ?>
								<p>
									 <?=$value?>
								</p>
								 <?php 
								} 
								?>
							</div>
						</div>
					</div>
				</div>
				 <?php 
                    }
                ?> <!--<div class="swiper-slide">
					<div class="agency_wrap">
						<div class="agencySlider-card">
 							<img src="/local/templates/jvas/img/agency2.png" alt="" class="agencySlider-card-img">
							<div class="agencySlider-text">
								<div class="agencySlider-titles">
									<h2>Мухаметдиннова Виссариона Константиновна</h2>
									<p>
										Резидент аналитического направления
									</p>
								</div>
 <button class="agency_card-btn">
								регалии </button>
							</div>
						</div>
						<div class="card_info">
							<p>
								Эксперт в области цифровой рекламы трафика и лидогенерации
							</p>
							<div class="card_info-box">
								 Образование
								<p>
									 2005 - 2008 МБА экономика и промышленность <br>
									 2000 - 2005 МГУ политология и философия
								</p>
							</div>
							<div class="card_info-box">
								 Опыт работы
								<p>
									2008 - 2018 Директор еком направления СБЕРБАНК РОССИИ
								</p>
							</div>
							<div class="card_info-box">
								 Достижения
								<p>
									 Бюджет 2 млрд <br>
									 Клиентов 200 млн <br>
									 Доход от рекламы 100 трл
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="agency_wrap">
						<div class="agencySlider-card">
 <img src="/local/templates/jvas/img/agency3.png" alt="" class="agencySlider-card-img">
							<div class="agencySlider-text">
								<div class="agencySlider-titles">
									<h2>Иванов Иван Иванович</h2>
									<p>
										Резидент бренд коммуникации
									</p>
								</div>
 <button class="agency_card-btn">
								регалии </button>
							</div>
						</div>
						<div class="card_info">
							<p>
								Эксперт в области цифровой рекламы трафика и лидогенерации
							</p>
							<div class="card_info-box">
								 Образование
								<p>
									 2005 - 2008 МБА экономика и промышленность <br>
									 2000 - 2005 МГУ политология и философия
								</p>
							</div>
							<div class="card_info-box">
								 Опыт работы
								<p>
									2008 - 2018 Директор еком направления СБЕРБАНК РОССИИ
								</p>
							</div>
							<div class="card_info-box">
								 Достижения
								<p>
									 Бюджет 2 млрд <br>
									 Клиентов 200 млн <br>
									 Доход от рекламы 100 трл
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="agency_wrap">
						<div class="agencySlider-card">
 <img src="/local/templates/jvas/img/agency4.png" alt="" class="agencySlider-card-img">
							<div class="agencySlider-text">
								<div class="agencySlider-titles">
									<h2>Петрова Ольга Васильевна</h2>
									<p>
										Резидент Digital направления
									</p>
								</div>
 <button class="agency_card-btn">
								регалии </button>
							</div>
						</div>
						<div class="card_info">
							<p>
								Эксперт в области цифровой рекламы трафика и лидогенерации
							</p>
							<div class="card_info-box">
								 Образование
								<p>
									 2005 - 2008 МБА экономика и промышленность <br>
									 2000 - 2005 МГУ политология и философия
								</p>
							</div>
							<div class="card_info-box">
								 Опыт работы
								<p>
									2008 - 2018 Директор еком направления СБЕРБАНК РОССИИ
								</p>
							</div>
							<div class="card_info-box">
								 Достижения
								<p>
									 Бюджет 2 млрд <br>
									 Клиентов 200 млн <br>
									 Доход от рекламы 100 трл
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="agency_wrap">
						<div class="agencySlider-card">
 <img src="/local/templates/jvas/img/agency1.png" alt="" class="agencySlider-card-img">
							<div class="agencySlider-text">
								<div class="agencySlider-titles">
									<h2>Мартовская Ангелина Евгеньевна</h2>
									<p>
										Резидент - президент
									</p>
								</div>
 <button class="agency_card-btn">
								регалии </button>
							</div>
						</div>
						<div class="card_info">
							<p>
								Эксперт в области цифровой рекламы трафика и лидогенерации
							</p>
							<div class="card_info-box">
								 Образование
								<p>
									 2005 - 2008 МБА экономика и промышленность <br>
									 2000 - 2005 МГУ политология и философия
								</p>
							</div>
							<div class="card_info-box">
								 Опыт работы
								<p>
									2008 - 2018 Директор еком направления СБЕРБАНК РОССИИ
								</p>
							</div>
							<div class="card_info-box">
								 Достижения
								<p>
									 Бюджет 2 млрд <br>
									 Клиентов 200 млн <br>
									 Доход от рекламы 100 трл
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="agency_wrap">
						<div class="agencySlider-card">
 <img src="/local/templates/jvas/img/agency2.png" alt="" class="agencySlider-card-img">
							<div class="agencySlider-text">
								<div class="agencySlider-titles">
									<h2>Мухаметдиннова Виссариона Константиновна</h2>
									<p>
										Резидент аналитического направления
									</p>
								</div>
 <button class="agency_card-btn">
								регалии </button>
							</div>
						</div>
						<div class="card_info">
							<p>
								Эксперт в области цифровой рекламы трафика и лидогенерации
							</p>
							<div class="card_info-box">
								 Образование
								<p>
									 2005 - 2008 МБА экономика и промышленность <br>
									 2000 - 2005 МГУ политология и философия
								</p>
							</div>
							<div class="card_info-box">
								 Опыт работы
								<p>
									2008 - 2018 Директор еком направления СБЕРБАНК РОССИИ
								</p>
							</div>
							<div class="card_info-box">
								 Достижения
								<p>
									 Бюджет 2 млрд <br>
									 Клиентов 200 млн <br>
									 Доход от рекламы 100 трл
								</p>
							</div>
						</div>
					</div>
				</div>-->
			</div>
		</div>
	</div>
</div>
<div class="innovative">
	<div class="container">
		<div class="innovative_block">
			<div class="innovative_top">
				<p>
					 Аккредитованная IT компания
				</p>
 <img src="/local/templates/jvas/img/innovative-logo.svg" alt="">
			</div>
			<div class="title">
 <img src="/local/templates/jvas/img/logo.svg" alt="">
				<h2>Инновационные технологии для точных решений</h2>
				<p>
					 Технологичный подход в реализации вопросов бизнеса
				</p>
			</div>
		</div>
		<div class="innovative_slider">
			<div class="innovative_arrow">
				<div class="swiper-button-prev">
				</div>
				<div class="swiper-pagination">
				</div>
				<div class="swiper-button-next">
				</div>
			</div>
			<div class="swiper innovativeSlider">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="item">
							<h3 class="item_num">01.</h3>
							<div class="item_info">
								<h4>IT аккредитация</h4>
								<p>
									 Наша компания прошла IT аккредитация что дает нам право заявлять о своей экспертности и гарантии для вас работы с нами
								</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="item">
							<h3 class="item_num">02.</h3>
							<div class="item_info">
								<h4>9 резидентов</h4>
								<p>
									 Экперты с глубоким знаниям в области маркетинга и рекламы занимающие ТОП позиции в крупных компаниях со стажем 5+ лет
								</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="item">
							<h3 class="item_num">03.</h3>
							<div class="item_info">
								<h4>AI инфраструктура</h4>
								<p>
									 Собственная запатентированная технология позволяющая реализовать 100% точную маркетинговую стратегию и запустить рекламу
								</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="item">
							<h3 class="item_num">04.</h3>
							<div class="item_info">
								<h4>BIG DATA</h4>
								<p>
									 Собственный запатентированный сервис позволяющий получить статистические данные из достоверных источников и обработать с целью 100% картины рынка
								</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="item">
							<h3 class="item_num">05.</h3>
							<div class="item_info">
								<h4>Прозрачная отчетность и наглядные результаты</h4>
								<p>
									 Мы за цифры, а не процессы поэтому вы видите результаты в цифровом эквиваленте которые демонстрируются на дашборде
								</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="item">
							<h3 class="item_num">06.</h3>
							<div class="item_info">
								<h4>AI зрение</h4>
								<p>
									 Сервис позволяющий оценить ваш продукт перед выпуском на рынок и получить достоверную обратную связь от респондентов
								</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
 <a href="#" class="innovative_slider-btn">Подробнее</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="audience audience1">
	<div class="container">
		<div class="audience_block">
			<div class="title">
 <img src="/local/templates/jvas/img/logo.svg" alt="">
				<h2>вербуем аудиторию через креативный подход</h2>
				<p>
					 Рекламная коммуникация через воздействие на сознание
				</p>
			</div>
			<div class="audience_slider">
				<div class="audience_arrow">
					<div class="swiper-button-prev">
					</div>
					<div class="swiper-pagination">
					</div>
					<div class="swiper-button-next">
					</div>
				</div>
				<div class="swiper audienceSlider">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="item">
								<h3 class="item_num">01.</h3>
								<div class="item_info">
									<h4>методы нейромаркетинга</h4>
									<p>
										 Наша компания прошла IT аккредитация что дает нам право заявлять о своей экспертности и гарантии для вас работы с нами
									</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="item">
								<h3 class="item_num">02.</h3>
								<div class="item_info">
									<h4>поиск ценностей и смыслов</h4>
									<p>
										 Экперты с глубоким знаниям в области маркетинга и рекламы занимающие ТОП позиции в крупных компаниях со стажем 5+ лет
									</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="item">
								<h3 class="item_num">03.</h3>
								<div class="item_info">
									<h4>коммуникация с аудиторией на их языке</h4>
									<p>
										 Собственная запатентированная технология позволяющая реализовать 100% точную маркетинговую стратегию и запустить рекламу
									</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="item">
								<h3 class="item_num">04.</h3>
								<div class="item_info">
									<h4>трансляция аудитории их ожиданий</h4>
									<p>
										 Собственный запатентированный сервис позволяющий получить статистические данные из достоверных источников и обработать с целью 100% картины рынка
									</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="item">
								<h3 class="item_num">05.</h3>
								<div class="item_info">
									<h4>психология потребителей</h4>
									<p>
										 Мы за цифры, а не процессы поэтому вы видите результаты в цифровом эквиваленте которые демонстрируются на дашборде
									</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
 <a href="#" class="audience_slider-btn">Подробнее</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="marketing marketing1">
	<div class="container">
		<div class="marketing_info">
 			<img src="/local/templates/jvas/img/gradus.svg" alt="">
			<h2>Комплексные решения для роста вашего бизнеса</h2>
			<p>
				 от разработки стратегии до маркетинга 360°
			</p>
		</div>
		<?php
		$services = Functions::GetServices();
		?>
		<div class="marketing_slider">
			<div class="swiper marketingSlider">
				<div class="swiper-wrapper">
					<?php
						foreach($services as $servItem){
					?>

					<div class="swiper-slide">
						<div class="item">
							<div class="item_top">
								<h3><?=$servItem['NAME']?></h3>
								<p><?=$servItem['PREVIEW_TEXT']?></p>
							</div>
							<div class="item_bottom">
					 			<div class="market-block">
					 				<a class="market-block-text" href="<?=$servItem['CODE']?>/">Подробнее</a> 
					 					<svg class="arrow" width="15" height="7" viewBox="0 0 15 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        					<path d="M1 0.5L7.5365 6.5M14 0.5L7.4635 6.5" stroke="white"/>
                    					</svg>
								</div> 
							</div>
							<img src="<?=$servItem['PREVIEW_IMAGE']?>" alt="" class="item_img">
						</div>
					</div>
					<?
						}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="audience audience2">
	<div class="container">
		<div class="audience_block">
			<div class="title">
 				<img src="/local/templates/jvas/img/logo.svg" alt="">
				<h2>Станьте автором собственного бренда</h2>
				<p>От разработки идеи до присутствия на полках</p>
			</div>
			<div class="audience_info">
				<ul>
					<li>Продукты питания и напитки</li>
					<li>БАДы и фитнес продукты</li>
					<li>Косметика и космецевтика</li>
					<li>Корма для животных</li>
					<li>Бытовая химия</li>
				</ul>
 				<a href="#" class="audience_link">перейти</a>
			</div>
		</div>
	</div>
</div>
<div class="solutions solutions2">
	<div class="container">
		<div class="title">
 <img src="/local/templates/jvas/img/logo2.svg" alt="">
			<h2>Магазин конверсионных сайтов</h2>
			<h3>Разработали готовые решения сайтов на основании детальной маркетинговой аналитики вашей ниши, чтобы вы смогли быстро запустить сайт и начать принимать трафик для вашего бизнеса</h3>
 <a href="#">перейти</a>
		</div>
	</div>
</div>
<div class="department">
	<div class="container">
		<div class="department_info">
 <img src="/local/templates/jvas/img/logo.svg" alt="">
			<h2>Построим отдел маркетинга и продаж «под ключ»</h2>
 <a href="#" class="department_link">перейти</a>
		</div>
	</div>
	<div class="count-block count-block2">
		<div class="container">
			<div class="count-content">
				<div class="count-item">
					<h3>
					Рекрутинг <br>
					 персонала </h3>
				</div>
				<div class="line">
				</div>
				<div class="count-item">
					<h3>
					Автоматизация <br>
					 процессов </h3>
				</div>
				<div class="line">
				</div>
				<div class="count-item">
					<h3>
					Оптимизация <br>
					 стандартов </h3>
				</div>
			</div>
 <a href="#" class="department_link">перейти</a>
		</div>
	</div>
</div>
<div class="marketing marketing2">
	<div class="container">
		<div class="marketing_info">
 <img src="/local/templates/jvas/img/gradus.svg" alt="">
			<h2>Результаты эффективного маркетинга в цифрах</h2>
			<p>
				 Наглядно демонстрируем результаты кейсов наших клиентов решаем внештатные ситуации через профессионализм и гибкий подход к процессам Поэтому достигаем высоких результатов для каждого
			</p>
		</div>
		<div class="marketing_slider marketing_slider2">
			<div class="swiper marketingSlider2">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="item">
 <img src="/local/templates/jvas/img/marketing2-img1.png" alt="" class="item_img"> <img src="/local/templates/jvas/img/marketing2-img-mob1.png" alt="" class="item_img-mob">
							<div class="item_top">
								<h3>Как повысить конверсии на сайте без бюджета</h3>
								<p>
									 Партизанский маркетинг в Девелоперской компании
								</p>
							</div>
							<div class="item_bottom">
 <a href="new.html">
								читать </a>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="item">
 <img src="/local/templates/jvas/img/marketing2-img2.png" alt="" class="item_img"> <img src="/local/templates/jvas/img/marketing2-img-mob2.png" alt="" class="item_img-mob">
							<div class="item_top">
								<h3>Как повысить конверсии на сайте без бюджета</h3>
								<p>
									 Партизанский маркетинг в Девелоперской компании
								</p>
							</div>
							<div class="item_bottom">
 <a href="new2.html">
								смотреть </a>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="item">
 <img src="/local/templates/jvas/img/marketing2-img3.png" alt="" class="item_img"> <img src="/local/templates/jvas/img/marketing2-img-mob3.png" alt="" class="item_img-mob">
							<div class="item_top">
								<h3>Как повысить конверсии на сайте без бюджета</h3>
								<p>
									 Партизанский маркетинг в Девелоперской компании
								</p>
							</div>
							<div class="item_bottom">
 <a href="new.html">
								читать </a>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="item">
 <img src="/local/templates/jvas/img/marketing2-img1.png" alt="" class="item_img"> <img src="/local/templates/jvas/img/marketing2-img-mob1.png" alt="" class="item_img-mob">
							<div class="item_top">
								<h3>Как повысить конверсии на сайте без бюджета</h3>
								<p>
									 Партизанский маркетинг в Девелоперской компании
								</p>
							</div>
							<div class="item_bottom">
 <a href="new2.html">
								смотреть </a>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
 <a href="#" class="marketing_slider2-btn">Смотреть все</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="partner">
	<div class="container">
		<div class="partner_info">
 <img src="/local/templates/jvas/img/logo2.svg" alt="">
			<h2>РАНГ - официальный партнер</h2>
		</div>
	</div>
	 <?php 
	$dataBrands=Functions::getBrands();
	?>
	<div class="count-block count-block3">
		<div class="count-content">
			<div class="swiper partnerSlider">
				<div class="swiper-wrapper">
					 <? foreach ($dataBrands as $branditem): ?>
					<div class="swiper-slide">
						<div class="count-item">
 							<a target="_blank" class="brand-url" href="<?=$branditem['URL']?>"> <img src="<?=$branditem['PREVIEW_IMAGE']?>" alt=""> </a>
						</div>
					</div>
					 <? endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="available available2">
 <img src="/local/templates/jvas/img/avi2_bg2.png" alt="" class="avi_bg-mob"> <img src="/local/templates/jvas/img/avi2_bg3.png" alt="" class="avi_bg-mob2">
	<div class="container">
		<div class="available_block">
			<div class="title">
 				<img src="/local/templates/jvas/img/logo.svg" alt="">
				<h2>Слово бизнесу:</h2>
				<h3>отзывы и рекомендации</h3>
			</div>
			<div class="item_all no-scrollbar">
				<div class="item">
					<h3>Ближе к звЁздам</h3>
					<p>Личные связи для безграничных возможностей с представителями шоу бизнеса и звездами блогинга главными редакторами отраслевых и федеральных СМИ</p>
 					<a href="#">читать <img src="/local/templates/jvas/img/Vector1.svg" alt=""></a>
				</div>
				<div class="item">
					<h3>Создание сайтов интернет магазинов</h3>
					<p>
						 Личные связи для безграничных возможностей с представителями шоу бизнеса и звездами блогинга главными редакторами отраслевых и федеральных СМИ
					</p>
 <a href="#">читать <img src="/local/templates/jvas/img/Vector1.svg" alt=""></a>
				</div>
				<div class="item">
					<h3>Ближе к звЁздам</h3>
					<p>
						 Личные связи для безграничных возможностей с представителями шоу бизнеса и звездами блогинга главными редакторами отраслевых и федеральных СМИ
					</p>
 <a href="#">читать <img src="/local/templates/jvas/img/Vector1.svg" alt=""></a>
				</div>
				<div class="item">
					<h3>Ближе к звЁздам</h3>
					<p>
						 Личные связи для безграничных возможностей с представителями шоу бизнеса и звездами блогинга главными редакторами отраслевых и федеральных СМИ
					</p>
 <a href="#">читать <img src="/local/templates/jvas/img/Vector1.svg" alt=""></a>
				</div>
 <a href="#" class="available_card-btn">все кейсы</a>
			</div>
		</div>
	</div>
	<div class="gradient_one">
 <img src="/local/templates/jvas/img/gradient1.png" alt="">
	</div>
</div>
<div class="marketing marketing2">
	<div class="container">
		<div class="marketing_info">
 <img src="/local/templates/jvas/img/gradus.svg" alt="">
			<h2>Библиотека рекламщика - новости из мира рекламы и маркетинга</h2>
			<p>
				 Авторский контент для пользы вашему бизнесу и конверсионных продаж
			</p>
		</div>
		<div class="marketing_slider marketing_slider2">
			<div class="swiper marketingSlider2">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="item">
 <img src="/local/templates/jvas/img/marketing2-img3.png" alt="" class="item_img"> <img src="/local/templates/jvas/img/marketing2-img-mob1.png" alt="" class="item_img-mob">
							<div class="item_top">
								<h3>Как повысить конверсии на сайте без бюджета</h3>
								<p>
									 Партизанский маркетинг в Девелоперской компании
								</p>
							</div>
							<div class="item_bottom">
 <a href="new.html">
								читать </a>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="item">
 <img src="/local/templates/jvas/img/marketing2-img2.png" alt="" class="item_img"> <img src="/local/templates/jvas/img/marketing2-img-mob2.png" alt="" class="item_img-mob">
							<div class="item_top">
								<h3>Как повысить конверсии на сайте без бюджета</h3>
								<p>
									 Партизанский маркетинг в Девелоперской компании
								</p>
							</div>
							<div class="item_bottom">
 <a href="new2.html">
								смотреть </a>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="item">
 <img src="/local/templates/jvas/img/marketing2-img1.png" alt="" class="item_img"> <img src="/local/templates/jvas/img/marketing2-img-mob3.png" alt="" class="item_img-mob">
							<div class="item_top">
								<h3>Как повысить конверсии на сайте без бюджета</h3>
								<p>
									 Партизанский маркетинг в Девелоперской компании
								</p>
							</div>
							<div class="item_bottom">
 								<a href="new.html">читать</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="item">
 							<img src="/local/templates/jvas/img/marketing2-img1.png" alt="" class="item_img"> <img src="/local/templates/jvas/img/marketing2-img-mob1.png" alt="" class="item_img-mob">
							<div class="item_top">
								<h3>Как повысить конверсии на сайте без бюджета</h3>
								<p>
									 Партизанский маркетинг в Девелоперской компании
								</p>
							</div>
							<div class="item_bottom">
 								<a href="new2.html">смотреть </a>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
 						<a href="#" class="marketing_slider2-btn">Смотреть все</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 </main><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>