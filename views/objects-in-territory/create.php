<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ObjectsInTerritory */

$this->title = 'Create Objects In Territory';
$this->params['breadcrumbs'][] = ['label' => 'Objects In Territories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="objects-in-territory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
