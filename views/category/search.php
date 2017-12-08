<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
?>


<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="features_items">
                    <?php if (!empty($products)): ?>
                        <?php $i = 0;
                        foreach ($products
                                 as $product): ?>
                            <?php $mainImg = $product->getImage(); ?>
                            <div class="col-md-4">
                                <figure class="snip1268">
                                    <div class="image">
                                        <?= Html::img($mainImg->getUrl('1000x1000'), ['alt' => $product->name]) ?>
                                        <div class="icons">
                                            <a href="#"><i class="ion-star"></i></a>
                                            <a href="#"> <i class="ion-share"></i></a>
                                            <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $product->id]) ?>"><i class="ion-search"></i></a>
                                        </div>
                                        <a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $product->id])?>" data-id="<?= $product->id?>" class="add-to-cart addcart cart">Add to bag</a>
                                    </div>
                                    <figcaption>
                                        <h2><?= $product->name ?></h2>
                                        <h3>$ <?= $product->price ?></h3>
                                    </figcaption>
                                </figure>

                                <?php if ($product->new): ?>

                                    <?= Html::img("@web/images/home/new.png", ['class' => 'new']) ?>
                                <?php endif; ?>

                                <?php if ($product->sale): ?>

                                    <?= Html::img("@web/images/home/sale.png", ['class' => 'sale']) ?>
                                <?php endif; ?>

                                <?php if ($product->hit): ?>
                                    <?= Html::img("@web/images/home/hit.png", ['class' => 'hit']) ?>
                                <?php endif; ?>
                            </div>

                            <?php $i++ ?>

                            <?php if ($i % 3 == 0): ?>
                                <div class="clearfix"></div>

                            <?php endif; ?>

                        <?php endforeach; ?>

                        <div class="clearfix"></div>

                        <?php


                        echo \yii\widgets\LinkPager::widget([

                            'pagination' => $pages,


                        ]);


                        ?>

                    <?php else: ?>

                        <h2>Здесь товара нет!</h2>
                    <?php endif; ?>
                </div><!--features_items-->
            </div>
        </div>
    </div>
</section>