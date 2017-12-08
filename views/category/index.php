<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

?>
<div class="container">
    <div class="row">
        <section class="cd-slider">
            <ul>
                <li data-color="rgb(15, 66, 74)">
                    <div class="content" style="background-image: url('../images/product-details/voguerunway.jpg');">
                        <blockquote>
                            <p>New fashion collections of clothes of world brands and designers, trends, weeks of high fashion</p>
                        </blockquote>
                    </div>
                </li>
                <li data-color="rgb(103, 77, 62)">
                    <div class="content" style="background-image: url('../images/product-details/voguerunway2.jpg');">
                        <blockquote>
                            <p>New and actual collections of world brands - spring-summer: Gucci</p>
                        </blockquote>
                    </div>
                </li>
                <li data-color="rgb(103, 20, 62)">
                    <div class="content" style="background-image:url('../images/product-details/voguerunway3.jpg')">
                        <blockquote>
                            <p>Photos from collections from the world's brands Louis Vuitton</p>
                        </blockquote>
                    </div>
                </li>
            </ul>
            <nav>
                <div><a class="prev" href="#"></a></div>
                <div><a class="next" href="#"></a></div>
            </nav>
        </section>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="parallax-box">
                <div class="parallax">

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="recommended_items">
            <!--recommended_items-->
            <h2 class="title text-center">New collection</h2>
            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php $count = count($hits);
                    $i = 0;
                    foreach ($hits as $hit): ?>
                        <?php $mainImg = $hit->getImage(); ?>
                        <?php if ($i % 4 == 0): ?>
                            <div class="item <?php if ($i == 0) echo 'active' ?>">
                        <?php endif; ?>
                        <div class="col-md-3">
                            <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id]) ?>"
                               class="nameproduct">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <?= Html::img($mainImg->getUrl('1000x1000'), ['alt' => $hit->name]) ?>
                                            <p><a><?= $hit->name ?></a></p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <?php $i++;
                        if ($i % 4 == 0 || $i == $count): ?>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    </a>
                </div>
                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div><!--/recommended_items-->
    </div>
</div>
