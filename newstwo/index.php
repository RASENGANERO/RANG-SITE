<?php 
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
<main>
    <div class="new">
        <div class="container">
            <div class="new_block">
                <div class="breadcrumb_block">
                    <nav aria-label="breadcrumb" class="breadcrumb_block-nav">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Главная </a></li>
                            <li class="breadcrumb-item"><a href="#">Блог </a></li>
                            <li class="breadcrumb-item active" aria-current="page">Кейсы <span> /</span></li>
                        </ol>
                        <p>Почему одни пашут за гроши, а другие получают всё?</p>
                    </nav>
                </div>
                <div class="new_title">
                    <h2>Почему одни пашут за гроши, а другие получают все?</h2>
                    <p>Про страхи и соблазны Мира. Владимир Шуппо</p>
                    <b>Автор: Ангелина Мартовская, основатель агентства и автор сервиса</b>
                </div>

                <div class="new_video">
                    <div class="new_video-wrap">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/new_video-img.png" alt="" class="new_video-img" />
                        <button class="new_video-play"><img src="<?=SITE_TEMPLATE_PATH?>/img/play.svg" alt="" /></button>
                    </div>
                    <div class="new_video-info">
                        <div class="new_video-text">
                            <p>Новый подкаст и гость, которого многие ждали - Владимир Шуппо. Входит в ТОП-30 одних из самых влиятельных бизнесменов Москвы. Основатель Крио Клиник, инвестор, общественный деятель и бизнесмен.</p>
                            <p>В нашем подкасте Владимир поделился своим жизненным опытом и отношением к большим деньгам.</p>
                        </div>
                        <div class="new_video-link">
                            <span>Смотреть:</span>
                            <a href="https://youtu.be/zV7lrWumc7U?si=H_x6_ze2UeCMB19b">https://youtu.be/zV7lrWumc7U?si=H_x6_ze2UeCMB19b</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php 
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>