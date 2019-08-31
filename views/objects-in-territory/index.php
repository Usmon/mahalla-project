<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Objects In Territories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="objects-in-territory-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Objects In Territory', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'neighborhood_id',
            'guzar',
            'stores',
            'weddings',
            //'catering',
            //'internet_club',
            //'training_center',
            //'hospital',
            //'family_polyclinic',
            //'farms',
            //'playground',
            //'sports_ground',
            //'mosques',
            //'other_religious',
            //'pilgrim',
            //'cemeteries',
            //'markets',
            //'bread_production',
            //'beauty_salon',
            //'mastering',
            //'sights',
            //'libraries',
            //'pharmacy',
            //'bathrooms',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
