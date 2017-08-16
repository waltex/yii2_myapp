<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\crud1\Test1 */

$this->title = Yii::t('app', 'Create Test1');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Test1s'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
