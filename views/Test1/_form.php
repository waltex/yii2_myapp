<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\crud1\Test1 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="test1-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'campoa')->textInput() ?>

    <?= $form->field($model, 'campob')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'campod')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'campoe')->textInput() ?>

    <!--?= $form->field($model, 'id_test2')->textInput(['maxlength' => true]) ?-->
    <?=
    $form->field($model, 'id_test2')->textInput(['maxlength' => true])->dropdownList([
        1 => 'item 1',
        2 => 'item 2'
            ], ['prompt' => Yii::t('app', 'Select category')]);
    ?>

<?= $form->field($model, 'campof')->textInput() ?>

    <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

        <?php ActiveForm::end(); ?>

</div>
