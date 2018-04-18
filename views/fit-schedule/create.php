<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FitSchedule */

$this->title = 'Create Fit Schedule';
$this->params['breadcrumbs'][] = ['label' => 'Fit Schedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fit-schedule-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
