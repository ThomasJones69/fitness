<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FitSchedule */

$this->title = 'Update Fit Schedule: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Fit Schedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->idFitSchedule]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fit-schedule-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
