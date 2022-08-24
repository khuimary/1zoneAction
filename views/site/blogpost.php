<?php 

/* @var $this yii\web\View */

/* @var $dt_posts yii\data\ActiveDataProvider */

$this ->title = 'my blog';

?>
<?php $this->beginContent('@app/views/layouts/bheader.php'); ?>
    <!-- You may need to put some content here -->
<?php $this->endContent(); ?>
<div class="container">
    <?= \yii\widgets\ListView::widget([
        'dataProvider'=>$dt_posts,
        'itemView'=>'_post',
        'layout'=>'<div class="row">{items}</div><div class="text-center">{pages}</div>',
    ])?>
</div>