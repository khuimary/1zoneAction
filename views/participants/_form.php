<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Location;

/* @var $this yii\web\View */
/* @var $model app\models\Participants */
 /*@var $form yii\widgets\ActiveForm*/
?>
<?php 
if(Yii::$app->session->hasFlash('success'))
    {
    echo Yii::$app->session->getFlash('success');
}
?>
<head> 
        <meta charset="UTF-8">
        <title>CREATE PARTICIPANT </title>
        <meta name="vieport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/form.css">

        <!-- CSS only -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>

<div class="participants-form">

    <?php $form = ActiveForm::begin(); ?>

   

    <?= $form->field($model, 'userid')->hiddenInput(['value'=>yii::$app->user->id])->label(false) ?>


    <?= $form->field($model, 'academy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cityofresidence')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dateofbirth')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fullsizephoto')->fileInput() ?>

    <?= $form->field($model, 'gender')->dropDownList([ 'male' => 'Male', 'female' => 'Female', 'other' => 'Other', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'givenname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'handreach')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'handsize')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'height')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instagramlink')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'losses')->textInput() ?>

    <?= $form->field($model, 'mmarecord')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'totalfights')->textInput() ?>

    <?= $form->field($model, 'videourllink')->fileInput() ?>
    <p style="color: black"><b>(NOTE: APPLICATIONS WITH VIDEO PRESENTATION LINKS WILL BE PRIORITIZED)</b></p>

    <?= $form->field($model, 'weight')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wins')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Submit Application', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
