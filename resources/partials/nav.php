<?php

$uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
$url = 'http://' . $_SERVER['HTTP_HOST'] . $uri_parts[0];
?>
<nav class="top-navigation">
    <div class="nav-inner">
        <div class="ct nav-inner__ct">
            <div class="ctr">
                <div class="hamburger__wrapper">
                    <div class="hamburger" id="hamburger">
                        <span class="hamburger__title"><?= $langFile[$locale]['nav']['menu'] ?></span>
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </div>
                <div class="fx-16 top-navigation__logo-wrapper">
                    <div class="top-navigation__logo">
                        <a href="/index.php?lang=<?= $locale ?>">
                            <img src="/resources/img/logo.svg" alt="Redmi 4A">
                        </a>
                    </div>
                </div>
                <div class="fx-83 top-navigation__list-wrapper">
                    <ul class="top-navigation__list">
                        <li class="top-navigation__list-item"><a href="/about.php?lang=<?= $locale ?>"
                                                                 class="top-navigation__list-item-link"><?= $langFile[$locale]['nav']['about'] ?>
                            </a></li>
                        <li class="top-navigation__list-item"><a href="/photo.php?lang=<?= $locale ?>"
                                                                 class="top-navigation__list-item-link"><?= $langFile[$locale]['nav']['photo'] ?></a>
                        </li>
                        <li class="top-navigation__list-item"><a href="/review.php?lang=<?= $locale ?>"
                                                                 class="top-navigation__list-item-link"><?= $langFile[$locale]['nav']['review'] ?></a>
                        </li>
                        <li class="top-navigation__list-item"><a href="/features.php?lang=<?= $locale ?>"
                                                                 class="top-navigation__list-item-link"><?= $langFile[$locale]['nav']['features'] ?></a>
                        </li>
                        <li class="top-navigation__list-item"><a href="/contact.php?lang=<?= $locale ?>"
                                                                 class="top-navigation__list-item-link"><?= $langFile[$locale]['nav']['contact'] ?></a>
                        </li>
                        <?php if ($locale == 'en') { ?>
                            <li class="top-navigation__list-item"><a class="top-navigation__list-item-link"
                                                                     href=<?= $url . '?lang=sk' ?>>SK</a></li>
                        <?php } else { ?>
                            <li class="top-navigation__list-item"><a class="top-navigation__list-item-link"
                                                                     href=<?= $url . '?lang=en' ?>>EN</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>