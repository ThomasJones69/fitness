<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Trainers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trainers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nameTrainer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emailTrainer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telTrainer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dicipline')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
