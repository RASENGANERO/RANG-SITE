<?php 
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
<main>
    <div class="agency">
        <div class="container">
            <div class="agency_block">
                <? $APPLICATION->IncludeComponent("bitrix:breadcrumb", 
                        "breadchain", 
                        Array(
	                        "PATH" => "",
		                    "SITE_ID" => "s1",
		                    "START_FROM" => "0",
	                    ),
	                    false
                );?>
                <div class="agency_info">
                    <h2>РЕЗИДЕНТЫ АГЕНТСТВА</h2>
                    <p>Люди которые работают над успехом вашего бренда</p>
                </div>

                <div class="agency_cards">
                    <?php 
                        $data = Functions::GetResidents();
                        foreach($data as $item) {
                    ?>
                    <div class="agency_card"> 
                             <img src="<?=$item['DETAIL_IMAGE']?>" alt="" class="agency_card-img" />
                        <div class="agency_card-info">
                            <div class="card_info-top">
                                <h3><?=$item['NAME']?></h3>
                                <b><?=$item['PROPERTIES']['SPECIAL_CODE'][0]?></b>
                            </div>
                            <div class="agency_card-body">
                                <div class="agency_card-box">
                                    <p><?=$item['PROPERTIES']['TYPE_CODE'][0]?></p>
                                </div>
                                <div class="agency_card-box">
                                    <span>Образование</span>
                                    <div class="agency_card-elements">
                                        <?php 
                                            foreach($item['PROPERTIES']['EDUCATION_CODE'] as $value) {
                                        ?>
                                            <p><?=$value?></p>    
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="agency_card-box">
                                    <span>Опыт работы</span>
                                    <div class="agency_card-elements">
                                        <?php 
                                            foreach($item['PROPERTIES']['WORKEXPIRIENCE_CODE'] as $value) {
                                        ?>
                                            <p><?=$value?></p>    
                                        <?php } ?>    
                                    </div>
                                </div>
                                <div class="agency_card-box">
                                    <span>Достижения</span>
                                    <div class="agency_card-elements">
                                        <?php 
                                            foreach($item['PROPERTIES']['ACHIVMENTS_CODE'] as $value) {
                                        ?>
                                            <p><?=$value?></p>    
                                        <?php } ?>    
                                    </div>
                                </div>
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
</main>
<?php 
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>