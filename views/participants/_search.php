<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ParticipantsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="participants-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'userid') ?>

    <?= $form->field($model, 'country') ?>

    <?= $form->field($model, 'academy') ?>

    <?= $form->field($model, 'username') ?>

    <?php // echo $form->field($model, 'cityofresidence') ?>

    <?php // echo $form->field($model, 'dateofbirth') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'fullsizephoto') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'givenname') ?>

    <?php // echo $form->field($model, 'handreach') ?>

    <?php // echo $form->field($model, 'handsize') ?>

    <?php // echo $form->field($model, 'height') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'instagramlink') ?>

    <?php // echo $form->field($model, 'losses') ?>

    <?php // echo $form->field($model, 'mmarecord') ?>

    <?php // echo $form->field($model, 'totalfights') ?>

    <?php // echo $form->field($model, 'videourllink') ?>

    <?php // echo $form->field($model, 'wins') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
