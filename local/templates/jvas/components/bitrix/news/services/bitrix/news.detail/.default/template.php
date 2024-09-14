<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?php
//echo "<pre style='color:white;'>";
//print_r($arResult);
//echo "<pre>";

	//$val=Functions::isService($APPLICATION->GetCurPage());
	//echo "<pre style='color:red;'>";
	//print_r($val);
	//echo "</pre>";

?>
<style>
	.marketing-pad-bot{
		display: none !important;
	}
</style>
<div class="hero hero_services" style="background-image: url(<?=$arResult['DETAIL_PICTURE']['SRC']?>);background-size: cover;background-position: center;">
    <div class="container">
	<?
	//echo "<pre style='color:white;'>";
	//print_r($arResult);
	//echo "</pre>";
   /* // Получаем массив хлебных крошек
    $arBreadcrumbs = $APPLICATION->GetCurDir();
    $breadcrumbs = $APPLICATION->GetNavChain();

    // Формируем текстовый путь
    $breadcrumbText = '';
    foreach ($breadcrumbs as $breadcrumb) {
        $breadcrumbText .= $breadcrumb['NAME'] . ' > ';
    }

    // Удаляем последний разделитель
    $breadcrumbText = rtrim($breadcrumbText, ' > ');
*/
    // Выводим текстовый путь
  ?>
		<div class="breadcrumb_block">
 			<nav aria-label="breadcrumb" class="breadcrumb_block-nav">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/">Главная </a></li>
					<li class="breadcrumb-item"><a href="/services">Услуги </a></li>
					<? if (array_key_exists('SECTION',$arResult)):?>
						<li class="breadcrumb-item"><a href="<?=$arResult['SECTION']['PATH'][0]['SECTION_PAGE_URL']?>"><?=$arResult['SECTION']['PATH'][0]['NAME']?></a></li>
					<? endif; ?>
					<li class="breadcrumb-item active" aria-current="page"><?=$arResult['NAME']?></li>
				</ol>
 			</nav>
		</div>
        <div class="hero_block">
            <div class="title_hero">
				<h3><?=$arResult['PREVIEW_TEXT']?></h3>
				<h1><?=$arResult['NAME']?></h1>
            </div>
        </div>
		<?php echo html_entity_decode($arResult['DETAIL_TEXT']);?>
		<div class="marketing marketing1">
			<div class="container">
				<div class="marketing_info">
 					<img src="/local/templates/jvas/img/gradus.svg" alt="">
					<h2>Комплексные решения для роста вашего бизнеса</h2>
					<p>от разработки стратегии до маркетинга 360°</p>
				</div>
				<?php
					$k = 0;
					$services = Functions::GetServices();
					$numbers = Functions::generateNumbers(count($services));
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
									<span><?=$numbers[$k]?></span>
					 				<div class="market-block">
					 					<a class="market-block-text" href="<?=$servItem['DETAIL_PAGE_URL']?>">Подробнее</a> 
					 						<svg class="arrow" width="15" height="7" viewBox="0 0 15 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        						<path d="M1 0.5L7.5365 6.5M14 0.5L7.4635 6.5" stroke="white"/>
                    						</svg>
									</div> 
								</div>
								<img src="<?=$servItem['PREVIEW_IMAGE']?>" alt="" class="item_img">
							</div>
						</div>
						<?
						$k+=1;
							}
						?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>