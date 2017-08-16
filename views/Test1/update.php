<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\crud1\Test1 */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Test1',
]) . $model->campoa;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Test1s'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->campoa, 'url' => ['view', 'id' => $model->campoa]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="test1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
