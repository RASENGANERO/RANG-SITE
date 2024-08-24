<footer class="footer_main">
    <div class="container">
        <div class="footer_block">
            <div class="footer_top">
                <?php
                    $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/local/templates/jvas/components/include/footer/inc_logo.php",
                            "EDIT_TEMPLATE" => "",
                        )
                    );
                ?>
                <div class="footer_social">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/local/templates/jvas/components/include/footer/inc_phonenumber.php",
                            "EDIT_TEMPLATE" => "",
                        )
                    );?>
                    <div class="social_info">
                        <span>Мы онлайн</span>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => "/local/templates/jvas/components/include/footer/inc_socials.php",
                                "EDIT_TEMPLATE" => "",
                            )
                        );?>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/local/templates/jvas/components/include/footer/inc_copyright.php",
                        "EDIT_TEMPLATE" => "",
                    )
                );?>
                <div class="footer_bottom-info">
                    <div class="footer-inn-info">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => "/local/templates/jvas/components/include/footer/inc_nameorg.php",
                                "EDIT_TEMPLATE" => "",
                            )
                        );?>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => "/local/templates/jvas/components/include/footer/inc_inn.php",
                                "EDIT_TEMPLATE" => "",
                            )
                        );?>
                    </div>
                    <button class="privacy_open">Публичная оферта</button>
                    <button class="spn2 privacy_open2">Политика конфиденциальности</button>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH.'/js/main.js');?>"></script>
</div>
</body>
</html>