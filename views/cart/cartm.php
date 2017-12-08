<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

?>


<?php if (!empty($session['cart'])): ?>
    <div class="container-fluid">
        <div class="row">
                <?php foreach ($session['cart'] as $id => $item): ?>
                    <div class="col-md-4">
                        <div class="cart-modal-items">
                            <div class="cart-modal-info">
                                <?= Html::img($item['img'], ['width' => 250]) ?>
                                <h1><?= $item['name'] ?></h1>
                                <h2>Qty: <?= $item['qty'] ?></h2>
                                <h3>$ <?= $item['price'] ?></h3>
                                <span data-id="<?= $id ?>" class="glyphicon glyphicon-remove text-danger del-item"
                                      aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
        </div>
    </div>

    <div class="col-md-12">
        <div class="total-price-modal">
            <h1>Total price: $ <?= $session['cart.sum'] ?></h1>
            <h2>Qty items: <?= $session['cart.qty'] ?></h2>
        </div>
    </div>


<?php else: ?>
    <h3>Bag empty</h3>
<?php endif; ?>

