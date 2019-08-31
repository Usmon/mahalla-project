<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ObjectsInTerritory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="objects-in-territory-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'neighborhood_id')->textInput() ?>

    <?= $form->field($model, 'guzar')->textInput() ?>

    <?= $form->field($model, 'stores')->textInput() ?>

    <?= $form->field($model, 'weddings')->textInput() ?>

    <?= $form->field($model, 'catering')->textInput() ?>

    <?= $form->field($model, 'internet_club')->textInput() ?>

    <?= $form->field($model, 'training_center')->textInput() ?>

    <?= $form->field($model, 'hospital')->textInput() ?>

    <?= $form->field($model, 'family_polyclinic')->textInput() ?>

    <?= $form->field($model, 'farms')->textInput() ?>

    <?= $form->field($model, 'playground')->textInput() ?>

    <?= $form->field($model, 'sports_ground')->textInput() ?>

    <?= $form->field($model, 'mosques')->textInput() ?>

    <?= $form->field($model, 'other_religious')->textInput() ?>

    <?= $form->field($model, 'pilgrim')->textInput() ?>

    <?= $form->field($model, 'cemeteries')->textInput() ?>

    <?= $form->field($model, 'markets')->textInput() ?>

    <?= $form->field($model, 'bread_production')->textInput() ?>

    <?= $form->field($model, 'beauty_salon')->textInput() ?>

    <?= $form->field($model, 'mastering')->textInput() ?>

    <?= $form->field($model, 'sights')->textInput() ?>

    <?= $form->field($model, 'libraries')->textInput() ?>

    <?= $form->field($model, 'pharmacy')->textInput() ?>

    <?= $form->field($model, 'bathrooms')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
