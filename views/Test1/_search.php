<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\crud1\Test1Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="test1-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'campoa') ?>

    <?= $form->field($model, 'campob') ?>

    <?= $form->field($model, 'campod') ?>

    <?= $form->field($model, 'campoe') ?>

    <?= $form->field($model, 'id_test2') ?>

    <?= $form->field($model, 'campof') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
