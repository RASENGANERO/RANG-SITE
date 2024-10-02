<?php 
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тарифы");
?>
<main>
    <section class="tarriff-section">
        <div class="tarriff-section-mainall">
            <div class="breadcrumb_block">
                <nav aria-label="breadcrumb" class="breadcrumb_block-nav-tarrif">
				    <li class="breadcrumb-item-tarrif"><a href="#">Главная</a></li>
				    <li class="breadcrumb-item-tarrif"><a href="#">Услуги</a></li>
				    <li class="breadcrumb-item-tarrif"><a href="#">Комплексные решения</a></li>
                    <li class="breadcrumb-item-tarrif"><a href="#">Brandformance - marketing 360°</a></li>
                    <li class="breadcrumb-item-tarrif"><a href="#">Тариф</a></li>
                    <li class="breadcrumb-item-tarrif"><a href="#">Brandformance бренда B2B</a></li>
                </nav>
		    </div>
            <div class="tarriff-section-maincontainer">
                <div class="tarriff-section-container">
                    <span class="tarriff-section-firsttext">Тариф</span>
                    <h1 class="tarriff-section-maintext">BRANDFORMANCE бренда B2B</h1>
                    <ul class="tarriff-section-list">
                        <li class="tarriff-section-item">1. Анализ и разработка концепции продукта и рецептуры</li>
                        <li class="tarriff-section-item">2. Поиск поставщиков и запуск пилотной партии продукта</li>
                        <li class="tarriff-section-item">3. Вывод продукта на рынок</li>
                        <li class="tarriff-section-item">4. Сопровождение продукта по реализации и популярности</li>
                    </ul>
                </div>
                <span class="tarrif-section-textlast">От 250 000 в месяц + бюджет</span>
            </div>
        </div>
    </section>
    <section class="tarriff-form-section">
        <div class="tarriff-form-container">
            <div class="tarriff-form-text-container">
                <h2 class="tarriff-form-text-main">Не знаете какие услуги нужны именно вам?</h2>
                <span class="tarriff-form-text">Оставьте Ваши данные и получите бесплатную консультацию по набору услуг для Вашего бизнеса</span>
            </div>
            <form class="tarriff-form" onsubmit="return false;">
                <input class="tarriff-form-input" id="username-tarrif-text" type="text" placeholder="Заполните Ваши ФИО"/>
                <input class="tarriff-form-input" id="phone-tarrif-text" type="text" placeholder="Укажите Ваш номер телефона"/>
                <button class="tarriff-form-btn">Отправить</button>
                <span class="tarriff-form-text-privacy">Нажимая на кнопку «отправить», вы соглашаетесь с обработкой персональных данных</span>
                <span id="messform-tarrif" class="form-text-privacy-none tarriff-form-text-privacy"></span>
            </form>
        </div>
    </section>
    <section class="section-servey-tarriff">
        <div class="section-servey-container">
            <div class="section-servey-maincontainer">
                <img class="section-servey-img" src="/local/templates/jvas/img/logo.svg"/>
                <h2 class="section-servey-text">Соберите свой тариф</h2>
                <span class="section-servey-lasttext">Выберите необходимые услуги и мы пришлем расчет</span>
            </div>
            <div class="section-servey-items">
                <div class="section-servey-item">
                    <div class="section-servey-checkbox-mainitem">
                        <input class="maincheckbox" type="checkbox" value="ДИДЖИТАЛ РЕКЛАМА"/>
                        <label class="maincheckbox-text">ДИДЖИТАЛ РЕКЛАМА</label>
                    </div>
                    <div class="servey-selection-items">
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="ДИДЖИТАЛ РЕКЛАМА" value="СЕО"/>
                            <label class="selectcheckbox-text">СЕО</label>
                        </div>
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="ДИДЖИТАЛ РЕКЛАМА" value="Таргетированная реклама"/>
                            <label class="selectcheckbox-text">Таргетированная реклама</label>
                        </div>
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="ДИДЖИТАЛ РЕКЛАМА" value="Контекстная реклама"/>
                            <label class="selectcheckbox-text">Контекстная реклама</label>
                        </div>
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="ДИДЖИТАЛ РЕКЛАМА" value="РСЯ"/>
                            <label class="selectcheckbox-text">РСЯ</label>
                        </div>
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="ДИДЖИТАЛ РЕКЛАМА" value="Ретаргет"/>
                            <label class="selectcheckbox-text">Ретаргет</label>
                        </div>
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="ДИДЖИТАЛ РЕКЛАМА" value="Баннерная"/>
                            <label class="selectcheckbox-text">Баннерная</label>
                        </div>
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="ДИДЖИТАЛ РЕКЛАМА" value="Медийная"/>
                            <label class="selectcheckbox-text">Медийная</label>
                        </div>
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="ДИДЖИТАЛ РЕКЛАМА" value="Трафиковая"/>
                            <label class="selectcheckbox-text">Трафиковая</label>
                        </div>
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="ДИДЖИТАЛ РЕКЛАМА" value="Арбитраж"/>
                            <label class="selectcheckbox-text">Арбитраж</label>
                        </div>
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="ДИДЖИТАЛ РЕКЛАМА" value="BKG"/>
                            <label class="selectcheckbox-text">BKG</label>
                        </div>
                    </div>
                </div>
                <div class="section-servey-item">
                    <div class="section-servey-checkbox-mainitem">
                        <input class="maincheckbox" type="checkbox" value="НАРУЖНАЯ РЕКЛАМА"/>
                        <label class="maincheckbox-text">НАРУЖНАЯ РЕКЛАМА</label>
                    </div>
                    <div class="servey-selection-items">
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="НАРУЖНАЯ РЕКЛАМА" value="Outdoor реклама статичная"/>
                            <label class="selectcheckbox-text">Outdoor реклама статичная</label>
                        </div>
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="НАРУЖНАЯ РЕКЛАМА" value="Outdoor реклама динамичная"/>
                            <label class="selectcheckbox-text">Outdoor реклама динамичная</label>
                        </div>
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="НАРУЖНАЯ РЕКЛАМА" value="Поиск рекламных площадей"/>
                            <label class="selectcheckbox-text">Поиск рекламных площадей</label>
                        </div>
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="НАРУЖНАЯ РЕКЛАМА" value="Разработка рекламы"/>
                            <label class="selectcheckbox-text">Разработка рекламы</label>
                        </div>
                    </div>
                </div>
                <div class="section-servey-item">
                    <div class="section-servey-checkbox-mainitem">
                        <input class="maincheckbox" type="checkbox" value="ВНУТРЕННЯЯ РЕКЛАМА"/>
                        <label class="maincheckbox-text">ВНУТРЕННЯЯ РЕКЛАМА</label>
                    </div>
                    <div class="servey-selection-items">
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="ВНУТРЕННЯЯ РЕКЛАМА" value="Indoor реклама статичная"/>
                            <label class="selectcheckbox-text">Indoor реклама статичная</label>
                        </div>
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="ВНУТРЕННЯЯ РЕКЛАМА" value="Indoor реклама динамичная"/>
                            <label class="selectcheckbox-text">Indoor реклама динамичная</label>
                        </div>
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="ВНУТРЕННЯЯ РЕКЛАМА" value="Поиск рекламных площадей"/>
                            <label class="selectcheckbox-text">Поиск рекламных площадей</label>
                        </div>
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="ВНУТРЕННЯЯ РЕКЛАМА" value="Разработка рекламы"/>
                            <label class="selectcheckbox-text">Разработка рекламы</label>
                        </div>
                    </div>
                </div>
                <div class="section-servey-item">
                    <div class="section-servey-checkbox-mainitem">
                        <input class="maincheckbox" type="checkbox" value="МЕДИА РЕКЛАМА"/>
                        <label class="maincheckbox-text">МЕДИА РЕКЛАМА</label>
                    </div>
                    <div class="servey-selection-items">
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="МЕДИА РЕКЛАМА" value="Реклама на радио"/>
                            <label class="selectcheckbox-text">Реклама на радио</label>
                        </div>
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="МЕДИА РЕКЛАМА" value="Реклама на ТВ"/>
                            <label class="selectcheckbox-text">Реклама на ТВ</label>
                        </div>
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="МЕДИА РЕКЛАМА" value="Инфлюенс маркетинг"/>
                            <label class="selectcheckbox-text">Инфлюенс маркетинг</label>
                        </div>
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="МЕДИА РЕКЛАМА" value="Закупка реклама"/>
                            <label class="selectcheckbox-text">Закупка реклама</label>
                        </div>
                    </div>
                </div>
                <div class="section-servey-item">
                    <div class="section-servey-checkbox-mainitem">
                        <input class="maincheckbox" type="checkbox" value="Рассылки"/>
                        <label class="maincheckbox-text">Рассылки</label>
                    </div>
                    <div class="servey-selection-items">
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="Рассылки" value="E-mail"/>
                            <label class="selectcheckbox-text">E-mail</label>
                        </div>
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="Рассылки" value="SMS"/>
                            <label class="selectcheckbox-text">SMS</label>
                        </div>
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="Рассылки" value="WhatsApp"/>
                            <label class="selectcheckbox-text">WhatsApp</label>
                        </div>
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="Рассылки" value="TG"/>
                            <label class="selectcheckbox-text">TG</label>
                        </div>
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="Рассылки" value="VK"/>
                            <label class="selectcheckbox-text">VK</label>
                        </div>
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="Рассылки" value="Inst"/>
                            <label class="selectcheckbox-text">Inst</label>
                        </div>
                    </div>
                </div>
                <div class="section-servey-item">
                    <div class="section-servey-checkbox-mainitem">
                        <input class="maincheckbox" type="checkbox" value="SMM"/>
                        <label class="maincheckbox-text">SMM</label>
                    </div>
                    <div class="servey-selection-items">
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="SMM" value="TG"/>
                            <label class="selectcheckbox-text">TG</label>
                        </div>
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="SMM" value="VK"/>
                            <label class="selectcheckbox-text">VK</label>
                        </div>
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="SMM" value="Inst"/>
                            <label class="selectcheckbox-text">Inst</label>
                        </div>
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="SMM" value="YouTube"/>
                            <label class="selectcheckbox-text">YouTube</label>
                        </div>
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="SMM" value="RuTube"/>
                            <label class="selectcheckbox-text">RuTube</label>
                        </div>
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="SMM" value="TenChat"/>
                            <label class="selectcheckbox-text">TenChat</label>
                        </div>
                        <div class="selection-item">
                            <input class="selectcheckbox" type="checkbox" tarriff-type="SMM" value="LinkedIn"/>
                            <label class="selectcheckbox-text">LinkedIn</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-servey-checkbox-items">
                <div class="section-servey-checkbox-container">
                    <div class="section-servey-checkbox-mainitem">
                        <input class="maincheckbox" type="checkbox" value="Контент мейкинг"/>
                        <label class="maincheckbox-text">Контент мейкинг</label>
                    </div>
                    <div class="section-servey-checkbox-mainitem">
                        <input class="maincheckbox" type="checkbox" value="Копирайтинг"/>
                        <label class="maincheckbox-text">Копирайтинг</label>
                    </div>
                    <div class="section-servey-checkbox-mainitem">
                        <input class="maincheckbox" type="checkbox" value="Дизайн сопровождение"/>
                        <label class="maincheckbox-text">Дизайн сопровождение</label>
                    </div>
                    <div class="section-servey-checkbox-mainitem">
                        <input class="maincheckbox" type="checkbox" value="Событийный маркетинг"/>
                        <label class="maincheckbox-text">Событийный маркетинг</label>
                    </div>
                    <div class="section-servey-checkbox-mainitem">
                        <input class="maincheckbox" type="checkbox" value="Коллаборации"/>
                        <label class="maincheckbox-text">Коллаборации</label>
                    </div>
                    <div class="section-servey-checkbox-mainitem">
                        <input class="maincheckbox" type="checkbox" value="Кросс маркетинг"/>
                        <label class="maincheckbox-text">Кросс маркетинг</label>
                    </div>
                    <div class="section-servey-checkbox-mainitem">
                        <input class="maincheckbox" type="checkbox" value="Картографические сервисы"/>
                        <label class="maincheckbox-text">Картографические сервисы</label>
                    </div>
                    <div class="section-servey-checkbox-mainitem">
                        <input class="maincheckbox" type="checkbox" value="Агрегаторы"/>
                        <label class="maincheckbox-text">Агрегаторы</label>
                    </div>
                    <div class="section-servey-checkbox-mainitem">
                        <input class="maincheckbox" type="checkbox" value="Отзовики"/>
                        <label class="maincheckbox-text">Отзовики</label>
                    </div>
                    <div class="section-servey-checkbox-mainitem">
                        <input class="maincheckbox" type="checkbox" value="Отчетность"/>
                        <label class="maincheckbox-text">Отчетность</label>
                    </div>
                    <div class="section-servey-checkbox-mainitem">
                        <input class="maincheckbox" type="checkbox" value="Аналитика"/>
                        <label class="maincheckbox-text">Аналитика</label>
                    </div>
                </div>
                <button class="servey-checkbox-button">Получить предложение</button>
            </div>
        </div>
    </section>
</main>
<?php 
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>