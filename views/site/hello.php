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
    'autoIdPrefix' => 'bt',
    'label' => 'Action',
    'options' => ['class' => 'btn-lg'],
]);
 echo Html::a('label', ['/controller/action'], ['class' => 'btn btn-primary']);
?>