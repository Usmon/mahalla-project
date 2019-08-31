<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Districts */
/* @var $regions \app\models\Regions[]|array|\yii\db\ActiveRecord[] */

$this->title = 'Update Districts: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Districts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="districts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'regions' => $regions
    ]) ?>

</div>