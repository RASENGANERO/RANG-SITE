<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
			<div class="header_menu-links">
			<?
				$k=0;
				$cnt=count($arResult);
				foreach($arResult as $arItem){
					$k+=1;
					if($k !== $cnt){
				?>		
					<a class="header_menu-link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
				<?	}
					else{
				?>
					<a class="header_menu-link contact-btn"><?=$arItem["TEXT"]?></a>

				<?	}
				}
				$APPLICATION->IncludeComponent(
					"bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/local/templates/jvas/components/include/header/inc_socials_mobile.php",
                        "EDIT_TEMPLATE" => "",
                    )
                );
			?>
			</div>
		</div>
	</div>
<?endif?>