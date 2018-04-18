<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Trainers */

$this->title = 'Update Trainers: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Trainers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idTrainers, 'url' => ['view', 'id' => $model->idTrainers]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="trainers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
