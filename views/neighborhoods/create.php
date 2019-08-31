<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Neighborhoods */

$this->title = 'Create Neighborhoods';
$this->params['breadcrumbs'][] = ['label' => 'Neighborhoods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="neighborhoods-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
