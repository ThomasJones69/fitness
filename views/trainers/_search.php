<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TrainersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trainers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idTrainers') ?>

    <?= $form->field($model, 'nameTrainer') ?>

    <?= $form->field($model, 'emailTrainer') ?>

    <?= $form->field($model, 'telTrainer') ?>

    <?= $form->field($model, 'dicipline') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
