<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Accounts */

$this->title = $model->idAccount;
$this->params['breadcrumbs'][] = ['label' => 'Accounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="accounts-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idAccount], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idAccount], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Weet u zeker dat u dit lid wilt verwijderen?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idAccount',
            'email:email',
            'Password',
            'FirstName',
            'LastName',
            'Address',
            'City',
            'Postcode',
            'Telephone',
        ],
    ]) ?>

</div>
