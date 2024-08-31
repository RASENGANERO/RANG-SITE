<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true){
	die();
}
global $APPLICATION;
require_once($_SERVER['DOCUMENT_ROOT'] . '/local/templates/jvas/functions/functions.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/resotho" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/kharkiv-tone" rel="stylesheet">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/fonts/kharkiv-tone/stylesheet.css">
    <link href="https://fonts.cdnfonts.com/css/soyuz-grotesk" rel="stylesheet">-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/resotho" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/kharkiv-tone" rel="stylesheet">
    <link rel="stylesheet" href="fonts/kharkiv-tone/stylesheet.css">
    <link href="https://fonts.cdnfonts.com/css/soyuz-grotesk" rel="stylesheet">


	<?$APPLICATION->ShowHead();?>
	<title><?$APPLICATION->ShowTitle();?></title>
	<?$APPLICATION->ShowPanel();?>
	<?$APPLICATION->ShowMeta("keywords");?>
	<?$APPLICATION->ShowMeta("description");?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/bootstrap.css");?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/main.css");?>
	
</head>
<body>
	<div class="wrapper">
        <header>
            <div class="container">
                <div class="header_block">
                    <div class="logo">
                        <?php
                            $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                    "AREA_FILE_SHOW" => "file", 
                                    "PATH" => "/local/templates/jvas/components/include/header/inc_logo.php",
                                    "EDIT_TEMPLATE"=>"" 
                                )
                            );
                        ?>
                    </div>
                    <div class="social_menu">
                        <?php
                            $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => "/local/templates/jvas/components/include/header/inc_socialtext.php",
                                    "EDIT_TEMPLATE" => "",
                                )
                            );
                        ?>
                        <?php
                            $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => "/local/templates/jvas/components/include/header/inc_socials.php",
                                    "EDIT_TEMPLATE" => "",
                                )
                            );
                        ?>
                    </div>
                    <div class="menu_child">
                        <?php
                            $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => "/local/templates/jvas/components/include/header/inc_connection.php",
                                    "EDIT_TEMPLATE" => "",
                                )
                            );
                        ?>
                        <button class="menu-btn">Меню</button>
                    </div>
                </div>
            </div>
            <?php
            	$APPLICATION->IncludeComponent("bitrix:menu", "services_menu", Array(
                        "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                        "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                        "DELAY" => "N",	// Откладывать выполнение шаблона меню
                        "MAX_LEVEL" => "2",	// Уровень вложенности меню
                        "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                            0 => "",
                        ),
                        "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                        "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                        "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                        "ROOT_MENU_TYPE" => "services",	// Тип меню для первого уровня
                        "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                    ),
                    false
                );
                $APPLICATION->IncludeComponent("bitrix:menu", "main_menu", Array(
	                "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		            "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		            "DELAY" => "N",	// Откладывать выполнение шаблона меню
		            "MAX_LEVEL" => "2",	// Уровень вложенности меню
		            "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			            0 => "",
		            ),
		            "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		            "MENU_CACHE_TYPE" => "N",	// Тип кеширования
		            "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		            "ROOT_MENU_TYPE" => "main",	// Тип меню для первого уровня
		            "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	                ),
	            false
                );
            ?>
            <!--< <div class="header_menu">
                <div class="container">
                   <div class="menu_accordion">
                        <button class="accordion_btn">
                            услуги 
                            <svg width="15" height="7" viewBox="0 0 15 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 0.5L7.5365 6.5M14 0.5L7.4635 6.5" stroke="white"/>
                            </svg>
                        </button>
                        <div class="accordion_body">
                            <a href="#">
                                <span>[ 01 ]</span>
                                <span>Комплексные решения</span>
                            </a>
                            <a href="#">
                                <span>[ 02 ]</span>
                                <span>Создать свой бренд</span>
                            </a>
                            <a href="#">
                                <span>[ 03 ]</span>
                                <span>Магазин сайтов</span>
                            </a>
                            <a href="#">
                                <span>[ 04 ]</span>
                                <span>Построить отдел маркетинга и продаж</span>
                            </a>
                        </div>
                    </div>-->
                   
                     <!--<div class="header_menu-links">
                        <a href="#" class="header_menu-link">о компании</a>
                        <a href="#" class="header_menu-link">Резиденты</a>
                        <a href="#" class="header_menu-link">Технологии AI</a>
                        <a href="#" class="header_menu-link">Кейсы</a>
                        <a href="#" class="header_menu-link">Блог</a>
                        <a href="#" class="header_menu-link">контакты</a>
                        <a href="#" class="header_menu-link contact-btn">связь с нами</a>
                        <div class="header_menu-social">
                            <a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/menu-tg.svg" alt=""></a>
                            <a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/menu-wk.svg" alt=""></a>
                            <a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/menu-yt.svg" alt=""></a>
                            <a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/menu-x.svg" alt=""></a>
                            <a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/menu-chat.svg" alt=""></a>
                            <a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/menu-dzen.svg" alt=""></a>
                            <a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/menu-vcru.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>-->
        </header>
        <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/local/templates/jvas/modals/modals.php'); ?>
    