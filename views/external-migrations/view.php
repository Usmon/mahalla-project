<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ExternalMigrations */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'External Migrations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="external-migrations-view">

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
            'going_abroad_mens',
            'going_abroad_womens',
            'no_contact',
            'emigrants_mens',
            'emigrants_womens',
            'deported',
            'public_interview',
            'employed',
            'medical_exam',
            'disease_count',
            'lost_pass',
            'renewed_pass',
            'country_rus',
            'country_usa',
            'country_pol',
            'country_eng',
        ],
    ]) ?>

</div>
