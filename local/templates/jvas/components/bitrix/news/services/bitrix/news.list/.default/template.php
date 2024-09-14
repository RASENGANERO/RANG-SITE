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
	$val=Functions::isService($APPLICATION->GetCurPage());
//	echo "<pre style='color:white;'>";
//	print_r($val);
//	echo "</pre>";
?>
<? if ($val['status'] == 1):?>
	<?php 
		$k = 0;
		$numbers = Functions::generateNumbers(count($arResult["ITEMS"])); 
	?>
	<div class="container">
	
	<div class="marketing solution_marketing marketing-pad-top">

	<div class="marketing_cards">
		<?php 
			foreach($arResult["ITEMS"] as $arItem) 
			{
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
				<div class="item">
					<div class="item_top">
						<h3><?=$arItem['NAME']?></h3>
						<p><?=$arItem['PREVIEW_TEXT']?></p>
					</div>
				
					<div class="item_bottom">
						 <span><?=$numbers[$k]?></span>
					 	<div class="market-block">
					 		<a class="market-block-text" href="<?=$arItem['DETAIL_PAGE_URL']?>">Подробнее</a> 
					 		<svg class="arrow" width="15" height="7" viewBox="0 0 15 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        		<path d="M1 0.5L7.5365 6.5M14 0.5L7.4635 6.5" stroke="white"/>
                    		</svg>
						</div> 
					</div>
					<img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="" class="item_img">
				</div>
			<?php 
				$k += 1;
			} 
			?>
		</div>
	</div>
	</div>
<? endif; ?>
<? if ($val['status'] == 2):?>
	<?$dats=$val['data'][0];
	?>
	<div class="hero hero_services" style="background-image: url(<?=$val['data'][0]['DETAIL_PICTURE']?>);background-size: cover;background-position: center;">
    <div class="container">
		<div class="breadcrumb_block">
 			<nav aria-label="breadcrumb" class="breadcrumb_block-nav">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/">Главная </a></li>
					<li class="breadcrumb-item"><a href="/services">Услуги </a></li>
					<li class="breadcrumb-item active" aria-current="page"><?=$val['data'][0]['NAME']?></li>
				</ol>
 			</nav>
		</div>
        <div class="hero_block">
            <div class="title_hero">
				<h3><?=$val['data'][0]['PREVIEW_TEXT']?></h3>
				<h1><?=$val['data'][0]['NAME']?></h1>
            </div>
        </div>
		<?php echo html_entity_decode($val['data'][0]['DETAIL_TEXT']);?>
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
<? endif; ?>
<? if ($val['status'] == 3):?>

	<?php 
		$k = 0;
		$services = Functions::GetServices();
		$numbers = Functions::generateNumbers(count($services));
	?>
	<div class="container">
	
	<div class="marketing solution_marketing marketing-pad-top">
		<div class="marketing_info">
 			<img src="/local/templates/jvas/img/gradus.svg" alt="">
			<h2>Комплексные решения</h2>
			<p>от разработки стратегии до маркетинга 360°</p>
		</div>
		<div class="marketing_cards">
		<?php 
			foreach($services as $arItem) 
			{
			?>
				<div class="item">
					<div class="item_top">
						<h3><?=$arItem['NAME']?></h3>
						<p><?=$arItem['PREVIEW_TEXT']?></p>
					</div>
				
					<div class="item_bottom">
						 <span><?=$numbers[$k]?></span>
					 	<div class="market-block">
					 		<a class="market-block-text" href="<?=$arItem['DETAIL_PAGE_URL']?>">Подробнее</a> 
					 		<svg class="arrow" width="15" height="7" viewBox="0 0 15 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        		<path d="M1 0.5L7.5365 6.5M14 0.5L7.4635 6.5" stroke="white"/>
                    		</svg>
						</div> 
					</div>
					<img src="<?=$arItem['PREVIEW_IMAGE']?>" alt="" class="item_img">
				</div>
			<?php 
				$k += 1;
			} 
			?>
		</div>
	</div>
	</div>

<? endif; ?>

