<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ObjectsInTerritory */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Objects In Territories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="objects-in-territory-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'neighborhood_id',
            'guzar',
            'stores',
            'weddings',
            'catering',
            'internet_club',
            'training_center',
            'hospital',
            'family_polyclinic',
            'farms',
            'playground',
            'sports_ground',
            'mosques',
            'other_religious',
            'pilgrim',
            'cemeteries',
            'markets',
            'bread_production',
            'beauty_salon',
            'mastering',
            'sights',
            'libraries',
            'pharmacy',
            'bathrooms',
        ],
    ]) ?>

</div>
