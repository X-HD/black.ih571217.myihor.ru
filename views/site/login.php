<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'My Account';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-login container">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

    <?= $form->field($model, 'username',
        ['template' => ' <div class="input-group"><span class="input-group-addon">
    <span class="glyphicon glyphicon-user"></span></span>{input}</div>{error}'])->
    textInput(['maxlength' => 16, 'placeholder' => 'Username']) ?>

    <?= $form->field($model, 'password',
        ['template' => ' <div class="input-group"><span class="input-group-addon">
    <span class="glyphicon glyphicon-lock"></span></span>{input}</div>{error}'])->
    passwordInput(['maxlength' => 36, 'placeholder' => 'Password', 'type' => 'password']) ?>

    <?= $form->field($model, 'rememberMe')->checkbox([
        'template' => "<div class=\"col-md-12\">{input} {label}</div>",
    ]) ?>

    <div class="button-container-1">
        <span class="mas">Login</span>
        <button <?= Html::submitButton('Login', ['name' => 'login-button', 'type' => 'button']) ?> >Login</button>
    </div>
</div>


<?php ActiveForm::end(); ?>
</div>
