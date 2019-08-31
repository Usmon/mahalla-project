<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'External Migrations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="external-migrations-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create External Migrations', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'neighborhood_id',
            'going_abroad_mens',
            'going_abroad_womens',
            'no_contact',
            //'emigrants_mens',
            //'emigrants_womens',
            //'deported',
            //'public_interview',
            //'employed',
            //'medical_exam',
            //'disease_count',
            //'lost_pass',
            //'renewed_pass',
            //'country_rus',
            //'country_usa',
            //'country_pol',
            //'country_eng',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
