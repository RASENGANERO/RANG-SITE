    <!-- Modal form -->
    <div class="modal_form">
        <div class="modal_wrap">
            <div class="modal_top">
                <button class="modal-close"><img src="<?=SITE_TEMPLATE_PATH?>/img/close.svg" alt=""></button>
            </div>
            <h2 class="modal_title">Оставьте Ваши данные и мы перезвоним</h2>
            <form class="form_boxs">
                <div class="modal_form-box">
                    <label for="formInp1">Как к Вам обращаться? *</label>
                    <input type="text" id="formInp1" placeholder="Заполните Ваши ФИО" required>
                </div>
                <div class="modal_form-box">
                    <label for="formInp2">Ваш контактный номер телефона *</label>
                    <input type="number" id="formInp2" placeholder="Укажите Ваш номер телефона" required>
                </div>
                <div class="modal_form-box">
                    <label for="formInp3">Ваш контактный электронный адрес *</label>
                    <input type="text" id="formInp3" placeholder="Укажите Ваш электронный адрес" required>
                </div>
                <div class="modal_form-box">
                    <label for="formInp4">Какую компанию Вы представляете?</label>
                    <input type="text" id="formInp4" placeholder="Указать наименование компании  ">
                </div>
                <button class="modal_form-btn thank_open" type="submit">отправить</button>
                <p class="modal_text">Нажимая на кнопку «отправить», вы соглашаетесь с обработкой персональных данных
                </p>
            </form>
        </div>
        <div class="modal_bg"></div>
    </div>
    <!-- Modal form -->

    <!-- Modal Thank -->
    <div class="modal_thank">
        <div class="modal_wrap">
            <div class="modal_top">
                <button class="modal-close"><img src="<?=SITE_TEMPLATE_PATH?>/img/close.svg" alt=""></button>
                <h2 class="modal_title">спасибо за обращение</h2>
                <h3 class="modal_text">Мы свяжемся с Вами в ближайшее время</h3>
            </div>
            <img src="<?=SITE_TEMPLATE_PATH?>/img/modal-thank-img.png" alt="" class="thank_img">
            <img src="<?=SITE_TEMPLATE_PATH?>/img/modal-thank-mob.png" alt="" class="thank_img-mob">
            <img src="<?=SITE_TEMPLATE_PATH?>/img/modal-thank-mob-414.png" alt="" class="thank_img-mob2">
        </div>
        <div class="modal_bg"></div>
    </div>
    <!-- Modal Thank -->

    <!-- Modal Privacy -->
    <div class="modal_privacy modal_privacy1">
        <div class="modal_wrap">
            <div class="modal_top">
                <a href="#" class="modal_privacy-logo"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" alt=""></a>
                <button class="modal-close"><img src="<?=SITE_TEMPLATE_PATH?>/img/close.svg" alt=""></button>
            </div>
            <h2 class="modal_title">публичная оферта</h2>
            <div class="privacy_texts">
                <?php
                    $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/local/templates/jvas/components/include/forms/inc_public.php",
                            "EDIT_TEMPLATE" => "",
                        )
                    );
                ?>
            </div>
        </div>
        <div class="modal_bg"></div>
    </div>

    <div class="modal_privacy modal_privacy2">
        <div class="modal_wrap">
            <div class="modal_top">
                <a href="/" class="modal_privacy-logo"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" alt=""></a>
                <button class="modal-close"><img src="<?=SITE_TEMPLATE_PATH?>/img/close.svg" alt=""></button>
            </div>
            <h2 class="modal_title">Политика конфиденциальности</h2>
            <div class="privacy_texts">
                <?php
                    $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/local/templates/jvas/components/include/forms/inc_politic.php",
                            "EDIT_TEMPLATE" => "",
                        )
                    );
                ?>
            </div>
        </div>
        <div class="modal_bg"></div>
    </div>
    <!-- Modal Privacy -->