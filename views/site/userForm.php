<?php
  use yii\yii\helpers\Html;
  use yii\widgets\ActiveForm;
 ?>


<?php $form=ActiveForm::begin(); ?>
<?= $form->filed($model,'name'); ?>
<?= $form->filed($model,'email'); ?>

<?= Html::submitButton('Submit',['class'=>'btn btn-success']); ?>
