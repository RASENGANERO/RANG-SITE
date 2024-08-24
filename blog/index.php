<?php 
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
?><main>
<?$APPLICATION->IncludeComponent("bitrix:news", "blograng", Array(
	"ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DETAIL_DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DETAIL_FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",	// Показывать ссылку "Все"
		"DETAIL_PAGER_TEMPLATE" => "",	// Название шаблона
		"DETAIL_PAGER_TITLE" => "Страница",	// Название категорий
		"DETAIL_PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "15",	// Инфоблок
		"IBLOCK_TYPE" => "blog",	// Тип инфоблока
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"LIST_FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
		"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
		"NEWS_COUNT" => "20",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"SEF_MODE" => "N",	// Включить поддержку ЧПУ
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_STATUS_404" => "Y",	// Устанавливать статус 404
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела
		"USE_CATEGORIES" => "N",	// Выводить материалы по теме
		"USE_FILTER" => "N",	// Показывать фильтр
		"USE_PERMISSIONS" => "N",	// Использовать дополнительное ограничение доступа
		"USE_RATING" => "N",	// Разрешить голосование
		"USE_REVIEW" => "N",	// Разрешить отзывы
		"USE_RSS" => "N",	// Разрешить RSS
		"USE_SEARCH" => "N",	// Разрешить поиск
		"USE_SHARE" => "N",	// Отображать панель соц. закладок
		"VARIABLE_ALIASES" => array(
			"ELEMENT_ID" => "ELEMENT_ID",
			"SECTION_ID" => "SECTION_ID",
		)
	),
	false
);?>


<div class="breadcrumbs">
	<div class="container">
		<div class="breadcrumb_block">
 <nav aria-label="breadcrumb" class="breadcrumb_block-nav">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Главная</a></li>
				<li class="breadcrumb-item"><a href="#">Блог</a></li>
				<li class="breadcrumb-item blog_tab-value active" aria-current="page"></li>
			</ol>
 </nav>
		</div>
	</div>
</div>
<div class="blog">
	<div class="container">
		<div class="blog_info">
			<div class="blog_navigator-wrap">
				<div class="blog_navigator">
					<h4>Навигатор</h4>
 <button class="blog_tab active">Все статьи</button> <button class="blog_tab">Кейсы</button> <button class="blog_tab">Отзывы</button> <button class="blog_tab">База знаний</button> <button class="blog_tab">Сми о нас</button>
				</div>
			</div>
			<div class="blog_cards">
				<div class="blog_card active">
					<div class="blog_item">
 <img src="/local/templates/jvas/img/blog_item-img1.png" alt="" class="blog_item-img">
						<div class="blog_item-info">
							<div class="blog_item-title">
								<h3>Почему одни пашут за гроши, а другие получают все?</h3>
								<p>
									 Про страхи и соблазны Мира. Владимир Шуппо
								</p>
							</div>
							<div class="blog_item-date">
								 30 августа 2024 <a href="new2.html">
								смотреть </a>
							</div>
						</div>
					</div>
					<div class="blog_item">
 <img src="/local/templates/jvas/img/blog_item-img2.png" alt="" class="blog_item-img">
						<div class="blog_item-info">
							<div class="blog_item-title">
								<h3>Как повысить конверсии на сайте без бюджета</h3>
								<p>
									 Партизанский маркетинг в Девелоперской компании
								</p>
							</div>
							<div class="blog_item-date">
								 30 августа 2024 <a href="new.html">
								читать </a>
							</div>
						</div>
					</div>
					<div class="blog_item">
 <img src="/local/templates/jvas/img/blog_item-img3.png" alt="" class="blog_item-img">
						<div class="blog_item-info">
							<div class="blog_item-title">
								<h3>Продали 500 домов на Бали за 5 дней</h3>
								<p>
									 Как вложить 1 млн., а заработать 100 млрд. расскажем в статье
								</p>
							</div>
							<div class="blog_item-date">
								 30 августа 2024 <a href="new.html">
								читать </a>
							</div>
						</div>
					</div>
					<div class="blog_item">
 <img src="/local/templates/jvas/img/blog_item-img4.png" alt="" class="blog_item-img">
						<div class="blog_item-info">
							<div class="blog_item-title">
								<h3>упаковка для крио клиник</h3>
								<p>
									 Владимир Петрович Шуппо
								</p>
							</div>
							<div class="blog_item-date">
								 30 августа 2024 <a href="new2.html">
								смотреть </a>
							</div>
						</div>
					</div>
					<div class="blog_item">
 <img src="/local/templates/jvas/img/blog_item-img5.png" alt="" class="blog_item-img">
						<div class="blog_item-info">
							<div class="blog_item-title">
								<h3>Как повысить конверсии на сайте без бюджета</h3>
								<p>
									 Партизанский маркетинг в Девелоперской компании
								</p>
							</div>
							<div class="blog_item-date">
								 30 августа 2024 <a href="new.html">
								читать </a>
							</div>
						</div>
					</div>
					<div class="blog_item">
 <img src="/local/templates/jvas/img/blog_item-img6.png" alt="" class="blog_item-img">
						<div class="blog_item-info">
							<div class="blog_item-title">
								<h3>Как повысить конверсии на сайте без бюджета</h3>
								<p>
									 Партизанский маркетинг в Девелоперской компании
								</p>
							</div>
							<div class="blog_item-date">
								 30 августа 2024 <a href="new.html">
								читать </a>
							</div>
						</div>
					</div>
					<div class="blog_item">
 <img src="/local/templates/jvas/img/blog_item-img7.png" alt="" class="blog_item-img">
						<div class="blog_item-info">
							<div class="blog_item-title">
								<h3>популярность и доверие к бренду</h3>
								<p>
									 Партизанский маркетинг в Девелоперской компании
								</p>
							</div>
							<div class="blog_item-date">
								 30 августа 2024 <a href="new2.html">
								смотреть </a>
							</div>
						</div>
					</div>
				</div>
				<div class="blog_card">
					<div class="blog_item">
 <img src="/local/templates/jvas/img/blog_item-img1.png" alt="" class="blog_item-img">
						<div class="blog_item-info">
							<div class="blog_item-title">
								<h3>Почему одни пашут за гроши, а другие получают все?</h3>
								<p>
									 Про страхи и соблазны Мира. Владимир Шуппо
								</p>
							</div>
							<div class="blog_item-date">
								 30 августа 2024 <a href="new2.html">
								смотреть </a>
							</div>
						</div>
					</div>
					<div class="blog_item">
 <img src="/local/templates/jvas/img/blog_item-img4.png" alt="" class="blog_item-img">
						<div class="blog_item-info">
							<div class="blog_item-title">
								<h3>упаковка для крио клиник</h3>
								<p>
									 Владимир Петрович Шуппо
								</p>
							</div>
							<div class="blog_item-date">
								 30 августа 2024 <a href="new2.html">
								смотреть </a>
							</div>
						</div>
					</div>
					<div class="blog_item">
 <img src="/local/templates/jvas/img/blog_item-img7.png" alt="" class="blog_item-img">
						<div class="blog_item-info">
							<div class="blog_item-title">
								<h3>популярность и доверие к бренду</h3>
								<p>
									 Партизанский маркетинг в Девелоперской компании
								</p>
							</div>
							<div class="blog_item-date">
								 30 августа 2024 <a href="new2.html">
								смотреть </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 </main><?php 
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>