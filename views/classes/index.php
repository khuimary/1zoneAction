<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClassesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Classes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="classes-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Classes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            'locationid',
            'teachersid',
            'starttime',
            'endtime',
            //'about:ntext',
            //'alias',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
