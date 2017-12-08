<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\AppAssetie;

AppAsset::register($this);
AppAssetie::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <?= Html::csrfMetaTags() ?>
        <title>
            <?= Html::encode($this->title) ?>
        </title>
        <?php $this->head() ?>
    </head>
    <!--/head-->
    <body>
    <?php $this->beginBody() ?>
    <header id="header">
        <!--header-->

        <!--TopLineContact-->
        <div class="container">
            <div class="row">
                <div class="TopLine">
                    <div class="col-md-6">
                        <div class="welcome pull-left">
                            <p class="welcome_text">Welcome to Blackstallion.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="sign-in-user pull-right">
                            <ul class="nav navbar-nav">
                                <?php if (!Yii::$app->user->isGuest): ?>
                                    <li><a><?= Yii::$app->user->identity['username'] ?></a>
                                    </li>
                                <?php endif; ?>
                                <li><a class="faq" href="<?= \yii\helpers\Url::to(['site/about']) ?>">Faq</a>
                                </li>
                                <li><a href="<?= \yii\helpers\Url::to(['/admin']) ?>">My Account</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--TopLineContact (END)-->

        <div class="container">
            <div class="background-top">
                <div class="row">


                    <!--TopLineLogo-->
                    <div class="container">
                        <div class="TopLineLogo">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="box">
                                        <div class="container-1">
                                            <form method="get"
                                                  action="<?= \yii\helpers\Url::to(['category/search']) ?>">
                                                <span class="icon"><i class="fa fa-search"></i></span><input
                                                        type="search"
                                                        id="search"
                                                        placeholder=" Search Product"
                                                        name="q">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="logo">
                                        <a href="http://black.ih571217.myihor.ru">
                                            <h7 class="logo_text">Blackstallion</h7>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="shop-menu pull-right">
                                        <ul>
                                            <li><a href="" onclick="return getCart()"><i
                                                            class="fa fa-shopping-bag"
                                                            aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--TopLineLogo (END)-->

                    <!--TopLineCategory-->
                    <div class="category-border container">
                        <div class="TopLineCategory">
                            <div class="col-sm-12 col-md-12 text-center">
                                <div id='cssmenu'>
                                    <ul>
                                        <li class='active has-sub'>
                                            <?= \app\components\MWidget::widget(['tmp' => 'menu']) ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--TopLineCategory (END)-->

                </div>
            </div>
        </div>
    </header>
    <!--/header-->

    <?= $content ?>

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="footer-logo">
                        <h2 class="footer-logo-text">Blackstallion</h2>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <div class="footer-text-sub">
                        <p class="footer-text">Want to get updates? sign up for our newsletter!</p>
                    </div>
                </div>

                <div class="col-md-12 text-center">
                    <div class="container__item">
                        <form class="form">
                            <input type="email" class="form__field" placeholder="Your E-Mail Address"/>
                            <a href="#">
                                <button type="button" class="btn-send btn-send--primary btn-send--inside uppercase">
                                    Send
                                </button>
                            </a>
                        </form>
                    </div>
                </div>

                <div class="col-md-12 text-center">
                    <div class="wrapper">
                        <i class="fa fa-5x fa-facebook-square"></i>
                        <i class="fa fa-5x fa-twitter-square"></i>
                        <i class="fa fa-5x fa-github-square"></i>
                        <i class="fa fa-5x fa-snapchat-square"></i>
                    </div>
                </div>

                <div class="col-md-12 text-center">
                    <div class="footer-info-text">
                        <ul class="ul-footer">
                            <li><a href="#" class="footer-info-page">faq</a></li>
                            <li><a href="#" class="footer-info-page">terms of use</a></li>
                            <li><a href="#" class="footer-info-page">privacy policy</a></li>
                            <li><a href="#" class="footer-info-page">contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/Footer-->


    <?php
    \yii\bootstrap\Modal::begin([
        'header' => '<h2>Bag</h2>',
        'id' => 'cart',
        'size' => 'modal-lg',
        'footer' => '
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="button-modal">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Continue</button>
        
                            <a href="' . \yii\helpers\Url::to(['cart/view']) . '" class="btn btn-success">Purchase</a>
        
                        <button type="button" class="btn btn-danger" onclick="clearCart()">Clear</button>
                    </div>
                </div>
            </div>
        </div>
        '
    ]);

    \yii\bootstrap\Modal::end();
    ?>


    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>