<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

?>


<section>
    <?php
    $mainImg = $product->getImage();
    $gallery = $product->getImages();
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-details">
                    <!--product-details-->
                    <div class="item-left-block col-md-6">
                        <div id="similar-product" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <?php $count = count($gallery);
                                $i = 0;
                                foreach ($gallery as $img): ?>
                                    <?php if ($i % 1 == 0): ?>
                                        <div class="item <?php if ($i == 0) echo ' active' ?>">
                                    <?php endif; ?>
                                    <a href=""><?= Html::img($img->getUrl('1000x1000'), ['alt' => '']) ?></a>
                                    <?php $i++;
                                    if ($i % 1 == 0 || $i == $count): ?>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                            <!-- Controls -->
                            <a class="left item-control" href="#similar-product" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right item-control" href="#similar-product" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="item-right-block col-md-6">
                        <div class="product-information">
                            <!--/product-information-->
                            <h2>
                                <?= $product->name ?>
                            </h2>

                            <h1>ID :
                                <?= $product->id ?>
                            </h1>

                            <div class="type">
                                <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $product->category->id]) ?> ">
                                    <?= $product->category->name ?>
                                </a>
                            </div>

                            <div class="price-bag">
                                <span>$<?= $product->price ?></span>
                                <a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $product->id]) ?>"
                                   data-id="<?= $product->id ?>" class="btn btn-fefault addcart">Add to bag</a>
                            </div>

                            <div class="content-info-detail">
                                <div class="accordion">
                                    <div class="accordion-item">
                                        <a href="#" class="heading">
                                            <div class="icon"></div>
                                            <div class="title_detail">About product</div>
                                        </a>
                                        <div class="content-about-item">
                                            <p><?= $product->content ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/product-information-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="recommended_items">
                <!--recommended_items-->
                <h2 class="title text-center">Hit product</h2>
                <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php $count = count($news); $i = 0; foreach($news as $new): ?>
                            <?php $mainImg = $new->getImage(); ?>
                            <?php if($i % 4 == 0): ?>
                                <div class="item <?php if($i == 0) echo 'active' ?>">
                            <?php endif; ?>
                            <div class="col-md-3">
                                <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $new->id]) ?>"
                                   class="nameproduct">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <?= Html::img($mainImg->getUrl('1000x1000'), ['alt' => $new->name]) ?>
                                                <p><a><?= $new->name?></a></p>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <?php $i++; if($i % 4 == 0 || $i == $count): ?>
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
</section>
