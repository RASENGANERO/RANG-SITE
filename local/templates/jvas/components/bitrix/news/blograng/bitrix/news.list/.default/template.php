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

<!--<?php if (isset($arResult['SECTION_DATA']['CHILDS']) && !empty($arResult['SECTION_DATA']['CHILDS'])): ?>
    <ul class="blog-subsections">
    <?php foreach ($arResult['SECTION_DATA']['CHILDS'] as $arSection): ?>
        <li><a href="<?= htmlspecialchars($arSection['SECTION_PAGE_URL']) ?>"><?= htmlspecialchars($arSection['NAME']) ?></a></li>
    <?php endforeach; ?>
    </ul>
<?php endif; ?>-->



<div class="blog">
	<div class="container">
		<div class="blog_info">
			<div class="blog_navigator-wrap">
        		<div class="blog_navigator">
            		<h4>Навигатор</h4>
            		<button class="blog_tab active">Все статьи</button>
            		<?php foreach ($arResult['MAIN_SECTIONS'] as $arMainSection): ?>
                		<button class="blog_tab"><?= htmlspecialchars($arMainSection['NAME']) ?></button> 
            		<?php endforeach; ?>
        		</div>
    		</div>
			<div class="blog_cards">
				<div class="blog_card active">
					<?	foreach($arResult["ITEMS"] as $arItem) 
						{
							$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
							$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>
							<div class="blog_item">
 								<img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="" class="blog_item-img">
								<div class="blog_item-info">
									<div class="blog_item-title">
										<h3><?=$arItem['NAME']?></h3>
										<p><?=$arItem['PREVIEW_TEXT']?></p>
									</div>
									<div class="blog_item-date">
                                        <span><?=$arItem['DISPLAY_ACTIVE_FROM']?></span>
                                        <a href="<?=$arItem['CODE']?>/"><?=$arItem['PROPERTIES']['CHECK_READ']['VALUE'];?> 
                                            <svg width="15" height="7" viewBox="0 0 15 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 0.5L7.5365 6.5M14 0.5L7.4635 6.5" stroke="white"/>
                                            </svg>
                                        </a>
                                    </div>
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
					<!--<div class="blog_item">
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
					</div>-->

<!--<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<p class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
						class="preview_picture"
						border="0"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
						height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						style="float:left"
						/></a>
			<?else:?>
				<img
					class="preview_picture"
					border="0"
					src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
					width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
					height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					style="float:left"
					/>
			<?endif;?>
		<?endif?>
		<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
			<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
		<?endif?>
		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><b><?echo $arItem["NAME"]?></b></a><br />
			<?else:?>
				<b><?echo $arItem["NAME"]?></b><br />
			<?endif;?>
		<?endif;?>
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
			<?echo $arItem["PREVIEW_TEXT"];?>
		<?endif;?>
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div style="clear:both"></div>
		<?endif?>
		<?foreach($arItem["FIELDS"] as $code=>$value):?>
			<small>
			<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
			</small><br />
		<?endforeach;?>
		<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
			<small>
			<?=$arProperty["NAME"]?>:&nbsp;
			<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
			<?else:?>
				<?=$arProperty["DISPLAY_VALUE"];?>
			<?endif?>
			</small><br />
		<?endforeach;?>
	</p>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>-->