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
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="shortcut icon" href="/favicon.png?v_01" type="image/ico" />
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
                <a class="logo" href="/"><img src="img/header_logo.png" /></a>
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
                <img src="img/author.png" title="Владимир Лищук" />
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
        </div>
    </div>
    <footer id="footer">
        <div class="inner_box"></div>
        <div class="container">
            <p class="pull-left">&copy; Denis Tikhonov <?= date('Y') ?></p>
            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
