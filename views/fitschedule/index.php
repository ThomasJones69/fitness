<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FitscheduleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fit Schedules';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fit-schedule-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Fit Schedule', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idFitSchedule',
            'idCategories',
            'Name',
            'Description:ntext',
            'DatePosted',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
