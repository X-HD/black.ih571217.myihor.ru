<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

?>


<!-- если у нас есть сообщение с ключем success  тогда мы выводим алерт с одним оформлением-->
<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('success'); ?>
    </div>
<?php endif; ?>
<!-- если у нас есть сообщение с ключем error  тогда мы выводим алерт c другим оформлением-->
<?php if (Yii::$app->session->hasFlash('error')): ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('error'); ?>
    </div>
<?php endif; ?>

<?php if (!empty($session['cart'])): ?>


    <div class="cart_form_orders container">
        <div class="in_bag">
            <h1>Your selections for buy (<?= $session['cart.qty'] ?>)</h1>
        </div>
        <div class="all_table_orders container">
            <div class="row">
                <div class="col-md-9">
                    <?php foreach ($session['cart'] as $id => $item): ?>
                        <div class="product_orders col-md-12">
                            <div class="col-md-4">
                                <?= Html::img($item['img'], ['height' => 200]) ?>
                            </div>
                            <div class="col-md-6">
                                <div class="orders_name">
                                    <a href="<?= Url::to(['product/view', 'id' => $id]) ?>"><?= $item['name'] ?></a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="orders_price">
                                    <h1>$ <?= $item['qty'] * $item['price'] ?></h1>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="orders_item">
                                    <h2>Per product: $ <?= $item['price'] ?></h2>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="orders_qty">
                                    <h2>Qty: <?= $item['qty'] ?></h2>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>

                <div class="col-md-3">
                    <div class="all_price_orders">
                        <div class="order_list">
                            <h1>Order list</h1>
                        </div>

                        <?php $form = ActiveForm::begin(); ?>

                        <?= $form->field($order, 'name')->textInput() ?>
                        <?= $form->field($order, 'email')->input('email') ?>
                        <?= $form->field($order, 'phone')->textInput() ?>
                        <?= $form->field($order, 'address')->textInput() ?>

                        <div class="price1 col-md-6">
                            <div class="total_price1 pull-left">
                                <h1>Total price:</h1>
                            </div>
                        </div>
                        <div class="price2 col-md-6">
                            <div class="total_price2 pull-right">
                                <h2>$ <?= $session['cart.sum'] ?></h2>
                            </div>
                        </div>
                        <div class="button_checkout col-md-12">
                            <div class="button-container-2">
                                <span class="mas">Checkout</span>
                                <?= Html::submitButton('Checkout') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php ActiveForm::end() ?>
<?php else: ?>
    <h3>Bag empty</h3>
<?php endif; ?>
