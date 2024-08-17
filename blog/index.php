<?php 
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
<main>
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumb_block">
                <nav aria-label="breadcrumb" class="breadcrumb_block-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Главная</a></li>
                        <li class="breadcrumb-item"><a href="#">Блог</a></li>
                        <li class="breadcrumb-item blog_tab-value active" aria-current="page"></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="blog">
        <div class="container">
            <div class="blog_info">
                <div class="blog_navigator-wrap">
                    <div class="blog_navigator">
                        <h4>Навигатор</h4>
                        <button class="blog_tab active"><span>Все статьи</span></button>
                        <button class="blog_tab"><span>Кейсы</span></button>
                        <button class="blog_tab"><span>Отзывы</span></button>
                        <button class="blog_tab"><span>База знаний</span></button>
                        <button class="blog_tab"><span>Сми о нас</span></button>
                    </div>
                </div>

                <div class="blog_cards">
                    <div class="blog_card active">
                        <div class="blog_item">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/blog_item-img1.png" alt="" class="blog_item-img" />
                            <div class="blog_item-info">
                                <div class="blog_item-title">
                                    <h3>Почему одни пашут за гроши, а другие получают все?</h3>
                                    <p>Про страхи и соблазны Мира. Владимир Шуппо</p>
                                </div>
                                <div class="blog_item-date">
                                    <span>30 августа 2024</span>
                                    <a href="new2.html">
                                        смотреть
                                        <svg width="15" height="7" viewBox="0 0 15 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 0.5L7.5365 6.5M14 0.5L7.4635 6.5" stroke="white" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="blog_item">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/blog_item-img2.png" alt="" class="blog_item-img" />
                            <div class="blog_item-info">
                                <div class="blog_item-title">
                                    <h3>Как повысить конверсии на сайте без бюджета</h3>
                                    <p>Партизанский маркетинг в Девелоперской компании</p>
                                </div>
                                <div class="blog_item-date">
                                    <span>30 августа 2024</span>
                                    <a href="new.html">
                                        читать
                                        <svg width="15" height="7" viewBox="0 0 15 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 0.5L7.5365 6.5M14 0.5L7.4635 6.5" stroke="white" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="blog_item">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/blog_item-img3.png" alt="" class="blog_item-img" />
                            <div class="blog_item-info">
                                <div class="blog_item-title">
                                    <h3>Продали 500 домов на Бали за 5 дней</h3>
                                    <p>Как вложить 1 млн., а заработать 100 млрд. расскажем в статье</p>
                                </div>
                                <div class="blog_item-date">
                                    <span>30 августа 2024</span>
                                    <a href="new.html">
                                        читать
                                        <svg width="15" height="7" viewBox="0 0 15 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 0.5L7.5365 6.5M14 0.5L7.4635 6.5" stroke="white" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="blog_item">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/blog_item-img4.png" alt="" class="blog_item-img" />
                            <div class="blog_item-info">
                                <div class="blog_item-title">
                                    <h3>упаковка для крио клиник</h3>
                                    <p>Владимир Петрович Шуппо</p>
                                </div>
                                <div class="blog_item-date">
                                    <span>30 августа 2024</span>
                                    <a href="new2.html">
                                        смотреть
                                        <svg width="15" height="7" viewBox="0 0 15 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 0.5L7.5365 6.5M14 0.5L7.4635 6.5" stroke="white" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="blog_item">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/blog_item-img5.png" alt="" class="blog_item-img" />
                            <div class="blog_item-info">
                                <div class="blog_item-title">
                                    <h3>Как повысить конверсии на сайте без бюджета</h3>
                                    <p>Партизанский маркетинг в Девелоперской компании</p>
                                </div>
                                <div class="blog_item-date">
                                    <span>30 августа 2024</span>
                                    <a href="new.html">
                                        читать
                                        <svg width="15" height="7" viewBox="0 0 15 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 0.5L7.5365 6.5M14 0.5L7.4635 6.5" stroke="white" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="blog_item">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/blog_item-img6.png" alt="" class="blog_item-img" />
                            <div class="blog_item-info">
                                <div class="blog_item-title">
                                    <h3>Как повысить конверсии на сайте без бюджета</h3>
                                    <p>Партизанский маркетинг в Девелоперской компании</p>
                                </div>
                                <div class="blog_item-date">
                                    <span>30 августа 2024</span>
                                    <a href="new.html">
                                        читать
                                        <svg width="15" height="7" viewBox="0 0 15 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 0.5L7.5365 6.5M14 0.5L7.4635 6.5" stroke="white" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="blog_item">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/blog_item-img7.png" alt="" class="blog_item-img" />
                            <div class="blog_item-info">
                                <div class="blog_item-title">
                                    <h3>популярность и доверие к бренду</h3>
                                    <p>Партизанский маркетинг в Девелоперской компании</p>
                                </div>
                                <div class="blog_item-date">
                                    <span>30 августа 2024</span>
                                    <a href="new2.html">
                                        смотреть
                                        <svg width="15" height="7" viewBox="0 0 15 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 0.5L7.5365 6.5M14 0.5L7.4635 6.5" stroke="white" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog_card">
                        <div class="blog_item">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/blog_item-img1.png" alt="" class="blog_item-img" />
                            <div class="blog_item-info">
                                <div class="blog_item-title">
                                    <h3>Почему одни пашут за гроши, а другие получают все?</h3>
                                    <p>Про страхи и соблазны Мира. Владимир Шуппо</p>
                                </div>
                                <div class="blog_item-date">
                                    <span>30 августа 2024</span>
                                    <a href="new2.html">
                                        смотреть
                                        <svg width="15" height="7" viewBox="0 0 15 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 0.5L7.5365 6.5M14 0.5L7.4635 6.5" stroke="white" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="blog_item">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/blog_item-img4.png" alt="" class="blog_item-img" />
                            <div class="blog_item-info">
                                <div class="blog_item-title">
                                    <h3>упаковка для крио клиник</h3>
                                    <p>Владимир Петрович Шуппо</p>
                                </div>
                                <div class="blog_item-date">
                                    <span>30 августа 2024</span>
                                    <a href="new2.html">
                                        смотреть
                                        <svg width="15" height="7" viewBox="0 0 15 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 0.5L7.5365 6.5M14 0.5L7.4635 6.5" stroke="white" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="blog_item">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/blog_item-img7.png" alt="" class="blog_item-img" />
                            <div class="blog_item-info">
                                <div class="blog_item-title">
                                    <h3>популярность и доверие к бренду</h3>
                                    <p>Партизанский маркетинг в Девелоперской компании</p>
                                </div>
                                <div class="blog_item-date">
                                    <span>30 августа 2024</span>
                                    <a href="new2.html">
                                        смотреть
                                        <svg width="15" height="7" viewBox="0 0 15 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 0.5L7.5365 6.5M14 0.5L7.4635 6.5" stroke="white" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
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