<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ExternalMigrations */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="external-migrations-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'neighborhood_id')->textInput() ?>

    <?= $form->field($model, 'going_abroad_mens')->textInput() ?>

    <?= $form->field($model, 'going_abroad_womens')->textInput() ?>

    <?= $form->field($model, 'no_contact')->textInput() ?>

    <?= $form->field($model, 'emigrants_mens')->textInput() ?>

    <?= $form->field($model, 'emigrants_womens')->textInput() ?>

    <?= $form->field($model, 'deported')->textInput() ?>

    <?= $form->field($model, 'public_interview')->textInput() ?>

    <?= $form->field($model, 'employed')->textInput() ?>

    <?= $form->field($model, 'medical_exam')->textInput() ?>

    <?= $form->field($model, 'disease_count')->textInput() ?>

    <?= $form->field($model, 'lost_pass')->textInput() ?>

    <?= $form->field($model, 'renewed_pass')->textInput() ?>

    <?= $form->field($model, 'country_rus')->textInput() ?>

    <?= $form->field($model, 'country_usa')->textInput() ?>

    <?= $form->field($model, 'country_pol')->textInput() ?>

    <?= $form->field($model, 'country_eng')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
