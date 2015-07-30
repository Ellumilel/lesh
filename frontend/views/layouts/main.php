<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html class="no-js" lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="frontend/web//apple-touch-icon.png">
    <link rel="shortcut icon" href="frontend/web//favicon.png?v_01" type="image/ico" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <?php $this->beginBody() ?>
    <div class="inner_layout">
        <header id="header">
            <div class="main_header">
                <div class="search">
                    <label for="search"></label>
                    <input type="text" name="search" id="search" />
                </div>
                <div class="sn_link justify">
                    <a href="/" class="ico_tw" target="_blank"></a>
                    <a href="/" class="ico_fb" target="_blank"></a>
                    <a href="/" class="ico_google" target="_blank"></a>
                    <a href="/" class="ico_p" target="_blank"></a>
                    <a href="/" class="ico_t" target="_blank"></a>
                    <a href="/" class="ico_l" target="_blank"></a>
                </div>
                <a class="enter" href="/">Войти<i></i></a>
                <a class="forum_link" href="/">Форум</a>
                <a class="logo" href="/"><img src="frontend/web/img/header_logo.png" /></a>
                <menu class="justify">
                    <a href="/" class="active">Домой</a>
                    <a href="/">Об авторе</a>
                    <a href="/">Публикации</a>
                    <a href="/">Лекции и презентации</a>
                    <a href="/">Вебинары</a>
                    <a href="/">Фото и Видео</a>
                    <a href="/">Контакты</a>
                </menu>
            </div>
            <div class="welcome_box">
                <img src="frontend/web/img/author.png" title="Владимир Лищук" />
                <div class="welcome align-center">
                    <h1>
                        ДОБРО ПОЖАЛОВАТЬ НА САЙТ ВЛАДИМИРА ЛИЩУКА<br/>
                        ПОМОЩЬ И СОТРУДНИЧЕСТВО - НАША ЦЕЛЬ
                    </h1>
                </div>
            </div>
        </header>

        <div id="body">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
            <section id="content" class="publication">
                <div class="item_publication first_item">
                    <div class="post_pic">
                        <img src="frontend/web/img/temp/first_post.png" />
                    </div>
                    <h2 class="title">ТЕОРИЯ И ТЕХНОЛОГИИ ЗДОРОВЬЯ</h2>
                    <p class="data"><span class="author">By Lischouk</span>&nbsp;/&nbsp;<span class="date"><i class="ico_datepicer"></i>Четверг, Июль 9, 2015</span></p>
                    <p class="text">Наука о здоровье - наиболее фундаментальное знание и наиболее нужное руководство к действию, т.е. знания и методы их использования в их органическом единстве. Я постараюсь обосновать и использовать это положение, опираясь на концептуальное определение здоровья как способности быть.
                        И отсюда следует, что здоровье - самое фундаментальное свойство всего сущего. Почему же тогда валеология не признаётся, почти не признаётся?</p>
                    <div class="full_text"><a href="post_page.html">Далее...</a></div>
                    <div class="sn_icons">
                        <a href="/" class="ico_tw" target="_blank"></a>
                        <a href="/" class="ico_fb" target="_blank"></a>
                        <a href="/" class="ico_google" target="_blank"></a>
                        <a href="/" class="ico_p" target="_blank"></a>
                        <a href="/" class="ico_t" target="_blank"></a>
                        <a href="/" class="ico_l" target="_blank"></a>
                    </div>
                </div>
                <div class="list_publication">
                    <div class="item_publication other_item">
                        <div class="post_pic">
                            <img src="frontend/web/img/temp/post_01.png" />
                        </div>
                        <h2 class="title">УЛУЧШЕНИЕ ВАШЕГО ЛИЧНОГО ЗДОРОВЬЯ</h2>
                        <p class="data"><span class="author">By Lischouk</span>&nbsp;/&nbsp;<span class="date"><i class="ico_datepicer"></i>Четверг, Июль 9, 2015</span></p>
                        <p class="text">Наука о здоровье - наиболее фундаментальное знание и наиболее нужное руководство к действию, т.е. знания и методы их использования в их органическом единстве...</p>
                        <div class="full_text"><a href="">Далее...</a></div>
                    </div>
                    <div class="item_publication other_item">
                        <div class="post_pic">
                            <img src="frontend/web/img/temp/post_02.png" />
                        </div>
                        <h2 class="title">УЛУЧШЕНИЕ ЗДОРОВЬЯ СЕМЬИ...</h2>
                        <p class="data"><span class="author">By Lischouk</span>&nbsp;/&nbsp;<span class="date"><i class="ico_datepicer"></i>Четверг, Июль 9, 2015</span></p>
                        <p class="text">За приоритетный национальный государственный проект ЗДОРОВЬЕ боролись насмерть (насмерть, без малейшего преувеличения) в течение 15 лет. Добились...традиционная медицина, которая устраняет следствия, а не причины заболеваний (например, устраняет аортальный стеноз, что жизненно важно, но коррекции обмена уделяется крайне мало внимания; см. раздел "Медицина").</p>
                        <div class="full_text"><a href="">Далее...</a></div>
                    </div>
                    <div class="item_publication other_item">
                        <div class="post_pic">
                            <img src="frontend/web/img/temp/post_03.png" />
                        </div>
                        <h2 class="title">УЛУЧШЕНИЕ ЗДОРОВЬЯ ОБЩЕСТВА И ГОСУДАРСТВА</h2>
                        <p class="data"><span class="author">By Lischouk</span>&nbsp;/&nbsp;<span class="date"><i class="ico_datepicer"></i>Четверг, Июль 9, 2015</span></p>
                        <p class="text">Здоровье - основная ценность. Выше здоровья может быть только здоровье любимого человека, детей, родных, друзей...</p>
                        <div class="full_text"><a href="">Далее...</a></div>
                    </div>
                    <div class="item_publication other_item">
                        <div class="post_pic">
                            <img src="frontend/web/img/temp/post_04.png" />
                        </div>
                        <h2 class="title">ПРИОРИТЕТНЫЙ ВСЕМИРНЫЙ ПРОЕКТ ЗДОРОВЬЕ</h2>
                        <p class="data"><span class="author">By Lischouk</span>&nbsp;/&nbsp;<span class="date"><i class="ico_datepicer"></i>Четверг, Июль 9, 2015</span></p>
                        <p class="text">Только реальное искреннее поведение в семье без показухи определит отношение ваших детей и супруга к здоровью, к добру и соучастию в вашей жизни сейчас...  будущем. Для этого нужно изучить валеологию, и не в меньшей степени, чем, скажем, геометрию или зоологию</p>
                        <div class="full_text"><a href="">Далее...</a></div>
                    </div>
                    <div class="item_publication other_item">
                        <div class="post_pic">
                            <img src="frontend/web/img/temp/post_05.png" />
                        </div>
                        <h2 class="title">ОБРАЗ И СОДЕРЖАНИЕ АКТИВНОГО ТВОРЧЕСКОГО И СЧАСТЛИВОГО ДОЛГОЛЕТИЯ</h2>
                        <p class="data"><span class="author">By Lischouk</span>&nbsp;/&nbsp;<span class="date"><i class="ico_datepicer"></i>Четверг, Июль 9, 2015</span></p>
                        <p class="text">Общие сведения. Персональное лечение всегда желательно. Мне, Вам, всем. Оно обязательно, если среднестатистические нормативы лечения не дают... </p>
                        <div class="full_text"><a href="">Далее...</a></div>
                    </div>
                    <div class="item_publication other_item">
                        <div class="post_pic">
                            <img src="frontend/web/img/temp/post_06.png" />
                        </div>
                        <h2 class="title">ДУХОВНОЕ ЗДОРОВЬЕ</h2>
                        <p class="data"><span class="author">By Lischouk</span>&nbsp;/&nbsp;<span class="date"><i class="ico_datepicer"></i>Четверг, Июль 9, 2015</span></p>
                        <p class="text">От поисков всеобщей адекватности к использованию конструктивных решений (исчисляющей силы) для актуальных жизненных задач. Математический аппарат...</p>
                        <div class="full_text"><a href="">Далее...</a></div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <footer id="footer">
        <div class="footer_01">
            <div class="inner_box">
                <div class="followers">
                    <h3 class="title">INTASGRAM ПОСЛЕДОВАТЕЛИ</h3>
                    <div class="photo_box">
                        <a href="/" target="_blank">
                            <img src="frontend/web/img/temp/followers_01.gif" />
                        </a>
                        <a href="/" target="_blank">
                            <img src="frontend/web/img/temp/followers_02.gif" />
                        </a>
                        <a href="/" target="_blank">
                            <img src="frontend/web/img/temp/followers_03.gif" />
                        </a>
                        <a href="/" target="_blank">
                            <img src="frontend/web/img/temp/followers_04.gif" />
                        </a>
                        <a href="/" target="_blank">
                            <img src="frontend/web/img/temp/followers_05.gif" />
                        </a>
                        <a href="/" target="_blank">
                            <img src="frontend/web/img/temp/followers_06.gif" />
                        </a>
                        <a href="/" target="_blank">
                            <img src="frontend/web/img/temp/followers_07.gif" />
                        </a>
                        <a href="/" target="_blank">
                            <img src="frontend/web/img/temp/followers_08.gif" />
                        </a>
                        <a href="/" target="_blank">
                            <img src="frontend/web/img/temp/followers_09.gif" />
                        </a>
                    </div>
                    <a class="more" href="">Смотреть больше</a>
                </div>
                <div class="about_me">
                    <h3 class="title">ОБО МНЕ</h3>
                    <p class="text">Автор проекта СТРАТЕГИЯ ЗДОРОВЬЯ. Председатель проблемных комиссий «Медицинская и биологическая информатика» и «Фундаментальные основы индивидуального и общественного здоровья» РАМН, консультант НЦССХ им. А.Н. Бакулева, руководитель лаборатории математического моделирования и мониторинга, вице-президент Академии медико-технических наук, профессор. Тел.:(495)414-75-52 раб. e-mail: Lischouk@rambler.ru. S:Lischouk.ru.
                        Обожаю жизнь на земле, в воде и в небе. Люблю супругу, дочерей, внучек, друзей, Родину. Отношусь с уважением к коллегам, даже когда не разделяю их взгляды.
                        Летом выезжаю на серфовую базу (это «Серфприют» на косе Должанская на Азовском море или на зарубежные «споты"). Там, пока нет  ветра, работаю (беру с собой всё нужное для  работы).</p>
                    <p class="more">
                        <a class="" href="">Далее</a>
                    </p>
                    <p class="sn_link">
                        <span>Поделится:</span>
                        <a href="/" class="ico_tw" target="_blank"></a>
                        <a href="/" class="ico_fb" target="_blank"></a>
                        <a href="/" class="ico_google" target="_blank"></a>
                        <a href="/" class="ico_p" target="_blank"></a>
                        <a href="/" class="ico_t" target="_blank"></a>
                        <a href="/" class="ico_l" target="_blank"></a>
                    </p>
                </div>
                <div class="last_news">
                    <h3 class="title">ПОСЛЕДНЕЕ НА САЙТЕ</h3>
                    <a href="post/01" class="nodecor">
                        <img src="frontend/web/img/temp/recent_05.png">
                        <div class="text">
                            <p>приоритетный всемирный проект ЗДОРОВЬЕ</p>
                            <p class="date"><i>5 Апреля 2015</i></p>
                        </div>
                    </a>
                    <a href="post/02" class="nodecor">
                        <img src="frontend/web/img/temp/recent_04.png">
                        <div class="text">
                            <p>Улучшение здоровья общества и государства </p>
                            <p class="date"><i>12 Мая 2015</i></p>
                        </div>
                    </a>
                    <a href="post/02" class="nodecor">
                        <img src="frontend/web/img/temp/recent_01.png">
                        <div class="text">
                            <p>Теория и технологии</p>
                            <p class="date"><i>9 Июля 2015</i></p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer_02">
            <div class="inner_box">
                <a class="mail" href="mailto:lischouk@rambler.ru" target="_blank"><i></i>Lischouk@rambler.ru</a>
                <span class="copy">&copy; <?= date('Y') ?> САЙТ ВЛАДИМИРА ЛИЩУКА</span>
            </div>
        </div>
    </footer>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
