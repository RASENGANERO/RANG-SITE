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
	$k = 0;
	$numbers = Functions::generateNumbers(count($arResult["ITEMS"])); 
?>
<div class="container">
	
<div class="marketing solution_marketing">

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
					 <a href="<?=$arItem['CODE']?>/">подробнее</a> 
					 <svg width="15" height="7" viewBox="0 0 15 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 0.5L7.5365 6.5M14 0.5L7.4635 6.5" stroke="white"/>
                    </svg> 
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