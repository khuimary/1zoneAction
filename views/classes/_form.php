<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Location;
use yii\helpers\ArrayHelper;
use app\models\Teachers;


/* @var $this yii\web\View */
/* @var $model app\models\Classes */
/* @var $form yii\widgets\ActiveForm */
?>


<head> 
        <meta charset="UTF-8">
        <title>1 Zonemma-Mixed Marital Action </title>
        <meta name="vieport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/form.css">
        <link rel="stylesheet" href="css/main.css">
        
      
        <!-- CSS only -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
<div class="classes-form">
   
<div class="main">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'locationid')->dropDownList(
         ArrayHelper::map(Location::find()->all(),'id', function($model){
             return 'Country:'.$model->country.' City:'.$model->city.' State:'.$model->state;
         }),['class'=>'form-control'])->label('LocationID',['class'=>'label-class'],
            ['prompt'=>'select location'] )?>

    <?= $form->field($model, 'teachersid')->dropDownList(
         ArrayHelper::map(Teachers::find()->all(),'id', function($model){
             return 'name:'.$model->name;
         }),['class'=>'form-control'])->label('TeachersID',['class'=>'label-class'],
            ['prompt'=>'select teacher'] )?>

    <?= $form->field($model, 'starttime')->textInput(['class'=>'form-control'])->label('Starttime',['class'=>'label-class']) ?>

    <?= $form->field($model, 'about')->textInput(['class'=>'form-control'])->label('About',['class'=>'label-class']) ?>

    <?= $form->field($model, 'alias')->textInput(['class'=>'form-control'])->label('Alias',['class'=>'label-class']) ?>

    <?= $form->field($model, 'endtime')->textInput(['class'=>'form-control'])->label('Endtime',['class'=>'label-class']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success button']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
</div>
