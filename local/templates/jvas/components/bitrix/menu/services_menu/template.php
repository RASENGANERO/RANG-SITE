<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult)): ?>
    <div class="header_menu">
        <div class="container">
            <div class="menu_accordion">
                <?php
                for ($i = 0; $i < count($arResult); $i++) {
                    if ($i == 0) {
                        ?>
                        <button class="accordion_btn">
                            <?= htmlspecialchars($arResult[$i]['TEXT']); ?>
                            <svg width="15" height="7" viewBox="0 0 15 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 0.5L7.5365 6.5M14 0.5L7.4635 6.5" stroke="white"/>
                            </svg>
                        </button>
                        <div class="accordion_body">
                        <?php
                    } else {
                        ?>
                        <a href="<?= htmlspecialchars($arResult[$i]['LINK']) ?>">
                            <span>[ 0<?= $i?> ]</span>
                            <span><?= htmlspecialchars($arResult[$i]['TEXT']) ?></span>
                        </a>
                        <?php
                    }
                }
                ?>
                </div>
            </div>
<?php endif; ?>
