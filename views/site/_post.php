

<?php
/* @var $model \app\models\Posts */
use yii\bootstrap4\Html;
?>

<div class="col-md-4">
    <div class="panel panel-default">
        <div class="panel-body">
            <h2 class="truncate text-center"><?=Html::a($model->title,['post\view', 'slug'=>$model->slug])?></h2>
            <hr>
            <p><?=$model->preview?></p>
            <hr>
            <div class="text-right">
                <time class="timeago badge" datetime="<?=$model->updatedat?>"></time>
            </div>
            
        </div>
    </div>
</div>