<?php 
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
<main>
    <section class="contact">
        <div class="container">
            <div class="contact_block">
                <div class="breadcrumb_block">
                    <nav aria-label="breadcrumb" class="breadcrumb_block-nav">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Контакты</li>
                        </ol>
                    </nav>
                </div>

                <div class="contact_title">
                    <h2>Контакты</h2>
                    <h3>Мы на связи</h3>
                </div>

                <div class="contact_wrap">
                    <div class="contact_info">
                        <div class="contact_box">
                            <div class="contact_box-title">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/phone-contact.svg" alt="" />
                                <h3>позвонить:</h3>
                            </div>
                            <a href="#" class="contact_phone">8 800 777 77 77</a>
                        </div>
                        <div class="contact_box">
                            <div class="contact_box-title">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/message.svg" alt="" />
                                <h3>написать:</h3>
                            </div>
                            <div class="contact_socicial">
                                <a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/whatsapp_contact.svg" alt="" /></a>
                                <a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/telegram_contact.svg" alt="" /></a>
                                <a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/vk.svg" alt="" /></a>
                            </div>
                        </div>
                        <div class="contact_box">
                            <div class="contact_box-title">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/email.svg" alt="" class="email_icon" />
                                <h3>отправить предложение:</h3>
                            </div>
                            <a href="mailto:info@range.com" class="contact_email">info@range.com</a>
                        </div>
                        <div class="contact_box">
                            <div class="contact_box-title">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/location.svg" alt="" />
                                <h3>Офис:</h3>
                            </div>
                            <a href="#" class="contact_location">г. Москва, БЦ «НЕО ГЕО», ул. Бутлерова, 17</a>
                        </div>
                    </div>
                    <div class="contact_map">
                        <div style="position: relative; overflow: hidden;">
                            <a href="https://yandex.uz/maps/213/moscow/?utm_medium=mapframe&utm_source=maps" style="color: #eee; font-size: 12px; position: absolute; top: 0px;">Москва</a>
                            <a
                                href="https://yandex.uz/maps/213/moscow/?feedback=map%2Fedit&feedback-context=map.controls&ll=37.540883%2C55.650270&utm_medium=mapframe&utm_source=maps&z=15.4"
                                style="color: #eee; font-size: 12px; position: absolute; top: 14px;"
                            >
                                Яндекс Карты
                            </a>
                            <iframe
                                src="https://yandex.uz/map-widget/v1/?feedback=map%2Fedit&feedback-context=map.controls&ll=37.540883%2C55.650270&z=15.4"
                                width="100%"
                                height="530"
                                frameborder="0"
                                allowfullscreen="true"
                                style="position: relative;"
                            ></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="requis">
        <div class="container">
            <div class="requis_block">
                <div class="requis_title">
                    <h2>Реквизиты</h2>
                    <div class="requis_texts">
                        <a class="requis_text">ООО “РАНГ МАРКЕТИНГ ВОРЛД”</a>
                        <a class="requis_text">ИНН 1111111111</a>
                        <a class="requis_text">КПП 111111111</a>
                        <a class="requis_text">ОГРН 1111111111111</a>
                        <a class="requis_text">Юридический адрес: г. Москва, БЦ «НЕО ГЕО», ул. Бутлерова, 17</a>
                        <a class="requis_text">Почтовый адрес: г. Москва, БЦ «НЕО ГЕО», ул. Бутлерова, 17</a>
                    </div>
                </div>

                <div class="subscribe">
                    <h2 class="subscribe_title">Подпишитесь на рассылку</h2>
                    <p class="subscribe_text">и узнавайте полезные новости из мира рекламы и маркетинга</p>
                    <input type="text" placeholder="Укажите Ваш электронный адрес" class="subscribe_inp" />
                    <button class="subscribe_btn">подписаться</button>
                    <p class="subscribe_text2">Нажимая на кнопку «подписаться», вы соглашаетесь с обработкой персональных данных</p>
                </div>
            </div>
        </div>
    </section>

    <div class="contact_social">
        <div class="container">
            <div class="contact_social-wrap">
                <a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/menu-tg.svg" alt="" /></a>
                <a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/menu-wk.svg" alt="" /></a>
                <a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/menu-yt.svg" alt="" /></a>
                <a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/menu-x.svg" alt="" /></a>
                <a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/menu-chat.svg" alt="" /></a>
                <a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/menu-dzen.svg" alt="" /></a>
                <a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/menu-vcru.svg" alt="" /></a>
            </div>
        </div>
    </div>
</main>
<?php 
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>