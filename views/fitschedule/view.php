<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\FitSchedule */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Fit Schedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fit-schedule-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idFitSchedule], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idFitSchedule], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Weet u zeker dat u dit schema wilt verwijderen?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idFitSchedule',
            'idCategories',
            'Name',
            'Description:ntext',
            'DatePosted',
        ],
    ]) ?>

</div>
