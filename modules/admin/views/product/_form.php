<?php
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
mihaildev\elfinder\Assets::noConflict($this);

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

    <div class="product-form">
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

        <div class="form-group field-product-category_id has-success">
            <label class="control-label" for="product-category_id">Parent category</label>
            <select id="product-category_id" class="form-control" name="Product[category_id]">
                <?= \app\components\MWidget::widget(['tmp' => 'select_product','model' => $model])?>
            </select>
        </div>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?php
    echo $form->field($model, 'content')->widget(CKEditor::className(), [
  'editorOptions' => ElFinder::ckeditorOptions('elfinder',[
      'preset' => 'basic', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
        'inline' => false, //по умолчанию false
  ]),
]);
    ?>

                <?= $form->field($model, 'price')->textInput() ?>

                    <?= $form->field($model, 'image')->fileInput() ?>

                        <?= $form->field($model, 'gallery[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

                            <?= $form->field($model, 'hit')->checkbox([ '0', '1', ]) ?>

                                <?= $form->field($model, 'new')->checkbox([ '0', '1', ]) ?>

                                    <?= $form->field($model, 'sale')->checkbox([ '0', '1', ]) ?>

                                        <div class="form-group">
                                            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                                        </div>

                                        <?php ActiveForm::end(); ?>

    </div>
