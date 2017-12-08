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
            <title> Control Panel |
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
                                    <li><a class="faq" href="#">Faq</a>
                                    </li>
                                    <li><a href="<?= \yii\helpers\Url::to(['/site/logout'])?>">Sign Out</a></li>
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

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--TopLineLogo (END)-->

                        <!--TopLineCategory-->
                        <div class="container">
                            <div class="TopLineCategory">
                                <div class="col-sm-12 col-md-12 text-center">
                                    <div id='cssmenu'>
                                        <ul>
                                            <li><a href="<?=\yii\helpers\Url::to(['/admin'])?>">Orders</a></li>
                                            <li><a href="<?=\yii\helpers\Url::to(['category/index'])?>">Category</a></li>
                                            <li><a href="<?=\yii\helpers\Url::to(['product/index'])?>">Products</a></li>
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

        <div class="container">
           <?php if( Yii::$app->session->hasFlash('success') ): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->getFlash('success'); ?>
        </div>
    <?php endif;?>
            <?= $content ?>
        </div>

        <footer id="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="footer-logo">
                            <p class="footer-logo-text">Blackstallion</p>
                        </div>
                    </div>
                    <div class="col-sm-12 text-center">
                        <div class="footer-text-sub">
                            <p class="footer-text">Want to get updates? sign up for our newsletter!</p>
                        </div>
                    </div>

                    <div class="col-sm-12 text-center">
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

                    <div class="col-sm-12 text-center">
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

        <?php $this->endBody() ?>
    </body>

    </html>
    <?php $this->endPage() ?>