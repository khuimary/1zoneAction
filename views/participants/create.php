<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Participants */

$this->title = 'Create Participants';
$this->params['breadcrumbs'][] = ['label' => 'Participants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="participants-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
