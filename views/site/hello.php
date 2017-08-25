<h1>Welcom to site Walter</h1>
<?= $name."kjhkjh"."<br>"; ?>
<?php  echo "my name: ".  $name ."<br>"; ?>
<?= $name ?>

<?php

use yii\bootstrap\Alert;
use yii\bootstrap\Button;
use yii\helpers\Html;

echo Alert::widget([
    'options' => [
    'class' => 'alert-danger',
    ],
    'body' => 'Say hello...',
    'closeButton' => false
]);

echo Button::widget([
    'label' => 'Action',
    'options' => ['class' => 'btn-lg'],
]);
 echo Html::a('label', ['/controller/action'], ['class' => 'btn btn-primary']);

echo CHtml::button('Delete', array('submit' => array('user/delete', 'id' => $model->usId),
    'name' => 'btnDelete',
    'confirm' => 'Are you sure you want to delete?',
    'class' => 'btn btn-large btn-danger',
    'style' => 'width:160px;'
));
?>