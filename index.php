<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=500">
    <title>Фонд профилактики рака</title>
    <link rel="icon" type="image/png" href="favicon.ico">
    <link rel="stylesheet" href="build/style.min.css">
</head>
<body>
<?php include "blocks/header.php"; ?>
<div id="offcanvas" class="main-offcanvas-overlay">
    <nav class="main-offcanvas">
        <div class="main-offcanvas-padding">
            <div class="main-offcanvas-user">
                <a href="#" class="link-dotted">Вход</a> / <a href="#" class="link-dotted">Регистрация</a>
            </div>
        </div>

        <ul class="main-offcanvas-menu">
            <li>
                <a href="#">Фонд</a>
            </li>
            <li>
                <a href="#">Проекты</a>
            </li>
            <li>
                <a href="#">Как помочь?</a>
            </li>
            <li>
                <a href="#">Публикации</a>
            </li>
            <li class="active">
                <a href="#">Партнеры</a>

                <ul>
                    <li><a href="#">Доноры</a></li>
                    <li><a href="#">Клиники и научные организации</a></li>
                    <li><a href="#">Информационные партнеры</a></li>
                    <li><a href="#">Инфраструктурные партнеры</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Контакты</a>
            </li>
            <li>
                <a href="#">Помочь прямо сейчас</a>
            </li>
        </ul>

        <div class="main-offcanvas-padding">
            <div class="social-buttons">
                <a href="#" target="_blank" title="Вконтакте">
                    <?php include "images/icon-social-vk.svg"; ?>
                </a>
                <a href="#" target="_blank" title="Facebook">
                    <?php include "images/icon-social-facebook.svg"; ?>
                </a>
                <a href="#" target="_blank" title="Twitter">
                    <?php include "images/icon-social-twitter.svg"; ?>
                </a>
            </div>
        </div>
    </nav>
</div>

<main class="main-content">
    <section class="header-slider-wrapper">
        <div class="header-slider js-header-slider">
            <div class="header-slider-item" style="background-image: url('images/slider/slider-image-1.jpg');"></div>
            <div class="header-slider-item" style="background-image: url('images/slider/slider-image-1.jpg');"></div>
        </div>

        <a href="#" class="header-slider-prev js-header-slider-prev">
            <?php include "images/slider-arrow-left.svg"; ?>
        </a>
        <a href="#" class="header-slider-next js-header-slider-next">
            <?php include "images/slider-arrow-right.svg"; ?>
        </a>

        <div class="wrapper header-slider-about-wrapper">
            <div class="header-slider-about">
                <div class="header-slider-about-column header-slider-about-column-logo">
                    <div class="header-slider-about-title">Screen</div>
                    <a href="#">О проекте</a>
                </div>
                <div class="header-slider-about-column header-slider-about-column-point">
                    <div class="header-slider-about-num">1</div>
                    Пройдите простой
                    тест и узнайте свой
                    риск рака
                </div>
                <div class="header-slider-about-column header-slider-about-column-point">
                    <div class="header-slider-about-num">2</div>
                    Получите
                    индивидуальный
                    график обследований
                </div>
                <div class="header-slider-about-column header-slider-about-column-point">
                    <div class="header-slider-about-num">3</div>
                    Запишитесь в один
                    клик в проверенную
                    клинику
                </div>
                <div class="header-slider-about-column header-slider-about-column-point">
                    <div class="header-slider-about-num">4</div>
                    Получайте регулярные
                    напоминания
                    о необходимых
                    обследованиях
                </div>
                <div class="header-slider-about-column header-slider-about-column-button">
                    <a href="#" class="button button-orange button-round">Пройти тест</a>
                </div>
            </div>

            <div class="header-slider-about-slider">
                <div class="js-header-about-slider">
                    <div class="header-slider-about-slider-item">
                        <div class="header-slider-about-num">1</div>
                        Пройдите простой
                        тест и узнайте свой
                        риск рака
                    </div>
                    <div class="header-slider-about-slider-item">
                        <div class="header-slider-about-num">2</div>
                        Получите
                        индивидуальный
                        график обследований
                    </div>
                    <div class="header-slider-about-slider-item">
                        <div class="header-slider-about-num">3</div>
                        Запишитесь в один
                        клик в проверенную
                        клинику
                    </div>
                    <div class="header-slider-about-slider-item">
                        <div class="header-slider-about-num">4</div>
                        Получайте регулярные
                        напоминания
                        о необходимых
                        обследованиях
                    </div>
                </div>

                <a href="#" class="button button-orange button-round">Пройти тест</a>
            </div>
        </div>
    </section>

    <section class="about-fund b-gray">
        <div class="wrapper">
            <div class="block-title">
                <span>О фонде</span>
            </div>

            <div class="about-fund-blocks">
                <div class="about-fund-blocks-col">
                    <a href="#" class="about-fund-block b-green">
                        <div class="about-fund-block-icon">
                            <?php include "images/icon-about-fund-1.svg"; ?>
                        </div>
                        <div class="about-fund-block-text">
                            Что такое Фонд
                            профилактики рака
                            и зачем ему помощь?
                        </div>
                        <div href="#" class="about-fund-block-arrow">
                            <?php include "images/about-fund-arrow.svg"; ?>
                        </div>
                    </a>
                </div>
                <div class="about-fund-blocks-col">
                    <a href="#" class="about-fund-block b-blue">
                        <div class="about-fund-block-icon">
                            <?php include "images/icon-about-fund-2.svg"; ?>
                        </div>
                        <div class="about-fund-block-text">
                            Как можно помочь
                            деятельности Фонда?
                        </div>
                        <div href="#" class="about-fund-block-arrow">
                            <?php include "images/about-fund-arrow.svg"; ?>
                        </div>
                    </a>
                </div>
                <div class="about-fund-blocks-col">
                    <a class="about-fund-block b-orange">
                        <div class="about-fund-block-icon">
                            <?php include "images/icon-about-fund-3.svg"; ?>
                        </div>
                        <div class="about-fund-block-text">
                            Куда будут потрачены
                            собранные средства?
                        </div>
                        <div href="#" class="about-fund-block-arrow">
                            <?php include "images/about-fund-arrow.svg"; ?>
                        </div>
                    </a>
                </div>
                <div class="about-fund-blocks-col">
                    <a class="about-fund-block b-red">
                        <div class="about-fund-block-icon">
                            <?php include "images/icon-about-fund-4.svg"; ?>
                        </div>
                        <div class="about-fund-block-text">
                            Где можно увидеть отчет
                            о деятельности Фонда?
                        </div>
                        <div href="#" class="about-fund-block-arrow">
                            <?php include "images/about-fund-arrow.svg"; ?>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="projects-block p-t-xxl p-b-xxl b-gray">
        <div class="wrapper">
            <div class="block-title">
                <span>Проекты</span>
            </div>

            <div class="projects-block-items">
                <div class="projects-block-items-col">
                    <div class="projects-block-item">
                        <div class="projects-block-item-image">
                            <img src="http://placekitten.com/370/220" width="370" height="220" alt="">
                        </div>
                        <div class="projects-block-item-padding">
                            <div class="projects-block-item-title">
                                Ранее выявление рака
                            </div>
                            <div class="projects-block-item-desc">
                                В понимании многих (и даже большинства врачей) достаточно просто массово заниматься ранним выявлением рака - это и будет скрининг рака. Это вовсе не так, и история развития профилактики рака в России тому живое подтверждение…
                            </div>
                        </div>
                        <div class="projects-block-item-donate">
                            <div class="projects-block-item-donate-bar">
                                <div class="projects-block-item-donate-bar-active" style="width: 20%;"></div>
                            </div>
                            <div class="projects-block-item-donate-collected">
                                <div class="projects-block-item-donate-title">Собрано</div>
                                <b>367 533 Р.</b>
                            </div>
                            <div class="projects-block-item-donate-goal">
                                <div class="projects-block-item-donate-title">Цель проекта</div>
                                <b>1 000 000 Р.</b>
                            </div>
                            <div class="projects-block-item-donate-button">
                                <a href="#" class="button button-small button-round button-orange">Поддержать</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="projects-block-items-col">
                    <div class="projects-block-item">
                        <div class="projects-block-item-image">
                            <img src="http://placekitten.com/370/220" width="370" height="220" alt="">
                        </div>
                        <div class="projects-block-item-padding">
                            <div class="projects-block-item-title">
                                Ранее выявление рака
                            </div>
                            <div class="projects-block-item-desc">
                                В понимании многих (и даже большинства врачей) достаточно просто массово заниматься ранним выявлением рака - это и будет скрининг рака. Это вовсе не так, и история развития профилактики рака в России тому живое подтверждение…
                            </div>
                        </div>
                        <div class="projects-block-item-donate">
                            <div class="projects-block-item-donate-bar">
                                <div class="projects-block-item-donate-bar-active" style="width: 20%;"></div>
                            </div>
                            <div class="projects-block-item-donate-collected">
                                <div class="projects-block-item-donate-title">Собрано</div>
                                <b>367 533 Р.</b>
                            </div>
                            <div class="projects-block-item-donate-goal">
                                <div class="projects-block-item-donate-title">Цель проекта</div>
                                <b>1 000 000 Р.</b>
                            </div>
                            <div class="projects-block-item-donate-button">
                                <a href="#" class="button button-small button-round button-orange">Поддержать</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="projects-block-items-col">
                    <div class="projects-block-item">
                        <div class="projects-block-item-image">
                            <img src="http://placekitten.com/370/220" width="370" height="220" alt="">
                        </div>
                        <div class="projects-block-item-padding">
                            <div class="projects-block-item-title">
                                Ранее выявление рака
                            </div>
                            <div class="projects-block-item-desc">
                                В понимании многих (и даже большинства врачей) достаточно просто массово заниматься ранним выявлением рака - это и будет скрининг рака. Это вовсе не так, и история развития профилактики рака в России тому живое подтверждение…
                            </div>
                        </div>
                        <div class="projects-block-item-donate">
                            <div class="projects-block-item-donate-bar">
                                <div class="projects-block-item-donate-bar-active" style="width: 20%;"></div>
                            </div>
                            <div class="projects-block-item-donate-collected">
                                <div class="projects-block-item-donate-title">Собрано</div>
                                <b>367 533 Р.</b>
                            </div>
                            <div class="projects-block-item-donate-goal">
                                <div class="projects-block-item-donate-title">Цель проекта</div>
                                <b>1 000 000 Р.</b>
                            </div>
                            <div class="projects-block-item-donate-button">
                                <a href="#" class="button button-small button-round button-orange">Поддержать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="project-block-load-more">
                <a href="#" class="button button-gray-hollow button-round" style="width: 240px;">Ещё проекты</a>
            </div>
        </div>
    </section>

    <section class="news-block p-b-xxl b-gray">
        <div class="wrapper">
            <div class="block-title">
                <span>Новости и события</span>
            </div>

            <div class="news-block-items">
                <div class="news-block-items-col">
                    <a href="#" class="news-block-item">
                        <div class="news-block-item-image">
                            <img src="images/tmp/news-1.jpg" alt="">
                        </div>
                        <div class="news-block-item-content">
                            <div class="news-block-item-date">27 июля</div>

                            <div class="news-block-item-title">
                                Система SCREEN на Alfa Future People
                            </div>
                        </div>
                    </a>
                </div>
                <div class="news-block-items-col">
                    <a href="#" class="news-block-item">
                        <div class="news-block-item-image">
                            <img src="images/tmp/news-2.jpg" alt="">
                        </div>
                        <div class="news-block-item-content">
                            <div class="news-block-item-date">27 июля</div>

                            <div class="news-block-item-title">
                                Тестирование на риски рака
                                на фестивале науки
                                и технологий
                            </div>
                        </div>
                    </a>
                </div>
                <div class="news-block-items-col">
                    <a href="#" class="news-block-item">
                        <div class="news-block-item-image">
                            <img src="images/tmp/news-3.jpg" alt="">
                        </div>
                        <div class="news-block-item-content">
                            <div class="news-block-item-date">27 июля</div>

                            <div class="news-block-item-title">
                                Большой благотворительный
                                концерт
                            </div>
                        </div>
                    </a>
                </div>
                <div class="news-block-items-col">
                    <a href="#" class="news-block-item">
                        <div class="news-block-item-image">
                            <img src="images/tmp/news-4.jpg" alt="">
                        </div>
                        <div class="news-block-item-content">
                            <div class="news-block-item-date">27 июля</div>

                            <div class="news-block-item-title">
                                Пресс-конференция,
                                посвященная запуску SCREEN
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="project-block-load-more">
                <a href="#" class="button button-gray-hollow button-round" style="width: 240px;">Ещё новости и события</a>
            </div>
        </div>
    </section>
    <section class="publications-block p-t-xxl p-b-xxl">
        <div class="wrapper">
            <div class="block-title">
                <span>Публикации</span>
            </div>

            <div class="publications-block-items">
                <div class="publications-block-item-large">
                    <div class="publications-block-item-large-image">
                        <div class="publications-block-item-large-image-wrap">
                            <a href="#">
                                <img src="http://placekitten.com/270/180" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="publications-block-item-large-content">
                        <div class="publications-block-item-large-date">
                            27 июля
                        </div>
                        <div class="publications-block-item-large-title">
                            <a href="#">
                                Акция по раннему выявлению
                                рака МЖ в Ставрополе
                            </a>
                        </div>
                        <div class="publications-block-item-large-text">
                            Тестирование на риски рака на фестивале науки и технологий
                        </div>
                    </div>
                </div>
                <div class="publications-block-item-large">
                    <div class="publications-block-item-large-image">
                        <div class="publications-block-item-large-image-wrap">
                            <a href="#">
                                <img src="http://placekitten.com/270/180" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="publications-block-item-large-content">
                        <div class="publications-block-item-large-date">
                            27 июля
                        </div>
                        <div class="publications-block-item-large-title">
                            <a href="#">
                                Тестирование на риски рака
                                на фестивале науки и технологий
                                GEEK PICNIC
                            </a>
                        </div>
                        <div class="publications-block-item-large-text">
                            Тестирование на риски рака на фестивале науки и технологий
                        </div>
                    </div>
                </div>
            </div>
            <div class="publications-block-items">
                <div class="publications-block-item-small">
                    <div class="publications-block-item-small-image">
                        <div class="publications-block-item-small-image-wrap">
                            <a href="#">
                                <img src="http://placekitten.com/90/90" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="publications-block-item-small-content">
                        <div class="publications-block-item-small-date">
                            27 июля
                        </div>
                        <div class="publications-block-item-small-title">
                            <a href="#">
                                Система SCREEN
                                на Alfa Future People
                            </a>
                        </div>
                    </div>
                </div>
                <div class="publications-block-item-small">
                    <div class="publications-block-item-small-image">
                        <div class="publications-block-item-small-image-wrap">
                            <a href="#">
                                <img src="http://placekitten.com/90/90" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="publications-block-item-small-content">
                        <div class="publications-block-item-small-date">
                            27 июля
                        </div>
                        <div class="publications-block-item-small-title">
                            <a href="#">
                                Тестирование на риски
                                рака на фестивале
                                науки и технологий
                            </a>
                        </div>
                    </div>
                </div>
                <div class="publications-block-item-small">
                    <div class="publications-block-item-small-image">
                        <div class="publications-block-item-small-image-wrap">
                            <a href="#">
                                <img src="http://placekitten.com/90/90" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="publications-block-item-small-content">
                        <div class="publications-block-item-small-date">
                            27 июля
                        </div>
                        <div class="publications-block-item-small-title">
                            <a href="#">
                                Большой
                                благотворительный
                                концерт
                            </a>
                        </div>
                    </div>
                </div>
                <div class="publications-block-item-small">
                    <div class="publications-block-item-small-image">
                        <div class="publications-block-item-small-image-wrap">
                            <a href="#">
                                <img src="http://placekitten.com/90/90" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="publications-block-item-small-content">
                        <div class="publications-block-item-small-date">
                            27 июля
                        </div>
                        <div class="publications-block-item-small-title">
                            <a href="#">
                                Пресс-конференция,
                                посвященная запуску
                                SCREEN
                            </a>
                        </div>
                    </div>
                </div>

                <div class="publications-block-item-small">
                    <div class="publications-block-item-small-image">
                        <div class="publications-block-item-small-image-wrap">
                            <a href="#">
                                <img src="http://placekitten.com/90/90" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="publications-block-item-small-content">
                        <div class="publications-block-item-small-date">
                            27 июля
                        </div>
                        <div class="publications-block-item-small-title">
                            <a href="#">
                                Система SCREEN
                                на Alfa Future People
                            </a>
                        </div>
                    </div>
                </div>
                <div class="publications-block-item-small">
                    <div class="publications-block-item-small-image">
                        <div class="publications-block-item-small-image-wrap">
                            <a href="#">
                                <img src="http://placekitten.com/90/90" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="publications-block-item-small-content">
                        <div class="publications-block-item-small-date">
                            27 июля
                        </div>
                        <div class="publications-block-item-small-title">
                            <a href="#">
                                Тестирование на риски
                                рака на фестивале
                                науки и технологий
                            </a>
                        </div>
                    </div>
                </div>
                <div class="publications-block-item-small">
                    <div class="publications-block-item-small-image">
                        <div class="publications-block-item-small-image-wrap">
                            <a href="#">
                                <img src="http://placekitten.com/90/90" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="publications-block-item-small-content">
                        <div class="publications-block-item-small-date">
                            27 июля
                        </div>
                        <div class="publications-block-item-small-title">
                            <a href="#">
                                Большой
                                благотворительный
                                концерт
                            </a>
                        </div>
                    </div>
                </div>
                <div class="publications-block-item-small">
                    <div class="publications-block-item-small-image">
                        <div class="publications-block-item-small-image-wrap">
                            <a href="#">
                                <img src="http://placekitten.com/90/90" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="publications-block-item-small-content">
                        <div class="publications-block-item-small-date">
                            27 июля
                        </div>
                        <div class="publications-block-item-small-title">
                            <a href="#">
                                Пресс-конференция,
                                посвященная запуску
                                SCREEN
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="publications-block-load-more">
                <a href="#" class="button button-gray-hollow button-round" style="width: 240px;">Все публикации</a>
            </div>
        </div>
    </section>
    <section class="cancer-directory-block p-t-xl p-b-xl">
        <div class="wrapper">
            <div class="cancer-directory-block-header">
                <div class="cancer-directory-block-title">
                    Справочник по видам рака
                </div>
                <form action="#" method="GET" class="cancer-directory-block-search">
                    <input class="cancer-directory-block-search-input" type="text" name="search" placeholder="Поиск по названию">
                    <button class="cancer-directory-block-search-button" type="submit">
                        <?php include "images/icon-magnifying-glass.svg"; ?>
                    </button>
                </form>
            </div>

            <div class="cancer-directory-block-columns">
                <div class="cancer-directory-block-column">
                    <div class="cancer-directory-block-section">
                        <div class="cancer-directory-block-letter">A</div>
                        <ul class="cancer-directory-block-list">
                            <li>
                                <a href="#">Acute Lymphoblastic Leukemia</a>
                            </li>
                            <li>
                                <a href="#">Acute Myeloid Leukemia</a>
                            </li>
                            <li>
                                <a href="#">Adolescents</a>
                            </li>
                            <li>
                                <a href="#">Adrenocortical Carcinoma</a>
                            </li>
                        </ul>
                    </div>
                    <div class="cancer-directory-block-section">
                        <div class="cancer-directory-block-letter">Б</div>
                        <ul class="cancer-directory-block-list">
                            <li>
                                <a href="#">БAcute Lymphoblastic Leukemia</a>
                            </li>
                            <li>
                                <a href="#">БAcute Myeloid Leukemia</a>
                            </li>
                            <li>
                                <a href="#">БAdolescents</a>
                            </li>
                            <li>
                                <a href="#">БAdrenocortical Carcinoma</a>
                            </li>
                        </ul>
                    </div>

                    <div class="cancer-directory-block-section">
                        <div class="cancer-directory-block-letter">В</div>
                        <ul class="cancer-directory-block-list">
                            <li>
                                <a href="#">ВAcute Lymphoblastic Leukemia</a>
                            </li>
                            <li>
                                <a href="#">ВAcute Myeloid Leukemia</a>
                            </li>
                            <li>
                                <a href="#">ВAdolescents</a>
                            </li>
                            <li>
                                <a href="#">ВAdrenocortical Carcinoma</a>
                            </li>
                            <li>
                                <a href="#">ВAdrenocortical Carcinoma</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="cancer-directory-block-column">
                    <div class="cancer-directory-block-section">
                        <ul class="cancer-directory-block-list">
                            <li>
                                <a href="#">Acute Lymphoblastic Leukemia</a>
                            </li>
                            <li>
                                <a href="#">Acute Myeloid Leukemia</a>
                            </li>
                            <li>
                                <a href="#">Adolescents</a>
                            </li>
                            <li>
                                <a href="#">Adrenocortical Carcinoma</a>
                            </li>
                        </ul>
                    </div>
                    <div class="cancer-directory-block-section">
                        <div class="cancer-directory-block-letter">Г</div>
                        <ul class="cancer-directory-block-list">
                            <li>
                                <a href="#">БAcute Lymphoblastic Leukemia</a>
                            </li>
                            <li>
                                <a href="#">БAcute Myeloid Leukemia</a>
                            </li>
                            <li>
                                <a href="#">БAdolescents</a>
                            </li>
                        </ul>
                    </div>

                    <div class="cancer-directory-block-section">
                        <div class="cancer-directory-block-letter">Д</div>
                        <ul class="cancer-directory-block-list">
                            <li>
                                <a href="#">ВAcute Lymphoblastic Leukemia</a>
                            </li>
                            <li>
                                <a href="#">ВAcute Myeloid Leukemia</a>
                            </li>
                            <li>
                                <a href="#">ВAdolescents</a>
                            </li>
                            <li>
                                <a href="#">ВAdrenocortical Carcinoma</a>
                            </li>
                            <li>
                                <a href="#">ВAdrenocortical Carcinoma</a>
                            </li>
                            <li>
                                <a href="#">ВAdolescents</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="cancer-directory-block-column">
                    <div class="cancer-directory-block-section">
                        <div class="cancer-directory-block-letter">A</div>
                        <ul class="cancer-directory-block-list">
                            <li>
                                <a href="#">Acute Lymphoblastic Leukemia</a>
                            </li>
                            <li>
                                <a href="#">Acute Myeloid Leukemia</a>
                            </li>
                            <li>
                                <a href="#">Adolescents</a>
                            </li>
                            <li>
                                <a href="#">Adrenocortical Carcinoma</a>
                            </li>
                        </ul>
                    </div>
                    <div class="cancer-directory-block-section">
                        <div class="cancer-directory-block-letter">Б</div>
                        <ul class="cancer-directory-block-list">
                            <li>
                                <a href="#">БAcute Lymphoblastic Leukemia</a>
                            </li>
                            <li>
                                <a href="#">БAcute Myeloid Leukemia</a>
                            </li>
                            <li>
                                <a href="#">БAdolescents</a>
                            </li>
                            <li>
                                <a href="#">БAdrenocortical Carcinoma</a>
                            </li>
                        </ul>
                    </div>

                    <div class="cancer-directory-block-section">
                        <div class="cancer-directory-block-letter">В</div>
                        <ul class="cancer-directory-block-list">
                            <li>
                                <a href="#">ВAcute Lymphoblastic Leukemia</a>
                            </li>
                            <li>
                                <a href="#">ВAcute Myeloid Leukemia</a>
                            </li>
                            <li>
                                <a href="#">ВAdolescents</a>
                            </li>
                            <li>
                                <a href="#">ВAdrenocortical Carcinoma</a>
                            </li>
                            <li>
                                <a href="#">ВAdrenocortical Carcinoma</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="cancer-directory-block-column">
                    <div class="cancer-directory-block-section">
                        <div class="cancer-directory-block-letter">A</div>
                        <ul class="cancer-directory-block-list">
                            <li>
                                <a href="#">Acute Lymphoblastic Leukemia</a>
                            </li>
                            <li>
                                <a href="#">Acute Myeloid Leukemia</a>
                            </li>
                            <li>
                                <a href="#">Adolescents</a>
                            </li>
                            <li>
                                <a href="#">Adrenocortical Carcinoma</a>
                            </li>
                        </ul>
                    </div>
                    <div class="cancer-directory-block-section">
                        <div class="cancer-directory-block-letter">Б</div>
                        <ul class="cancer-directory-block-list">
                            <li>
                                <a href="#">БAcute Lymphoblastic Leukemia</a>
                            </li>
                            <li>
                                <a href="#">БAcute Myeloid Leukemia</a>
                            </li>
                            <li>
                                <a href="#">БAdolescents</a>
                            </li>
                            <li>
                                <a href="#">БAdrenocortical Carcinoma</a>
                            </li>
                        </ul>
                    </div>

                    <div class="cancer-directory-block-section">
                        <div class="cancer-directory-block-letter">В</div>
                        <ul class="cancer-directory-block-list">
                            <li>
                                <a href="#">ВAcute Lymphoblastic Leukemia</a>
                            </li>
                            <li>
                                <a href="#">ВAcute Myeloid Leukemia</a>
                            </li>
                            <li>
                                <a href="#">ВAdolescents</a>
                            </li>
                            <li>
                                <a href="#">ВAdrenocortical Carcinoma</a>
                            </li>
                            <li>
                                <a href="#">ВAdrenocortical Carcinoma</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="cancer-directory-block-load-more">
                <a href="#" class="button button-gray-hollow button-round" style="width: 240px;">Подробнее</a>
            </div>
        </div>
    </section>
    <?php include "blocks/donate-block.php"; ?>
</main>
<footer class="main-footer">
    &copy; Фонд профилактики рака, 2017
</footer>
<script src="build/scripts.js"></script>
</body>
</html>