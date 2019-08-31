<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Neighborhoods */

$this->title = 'Update Neighborhoods: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Neighborhoods', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="neighborhoods-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
