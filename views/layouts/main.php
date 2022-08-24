<?php
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
?>

<?php $this->beginContent('@app/views/layouts/header.php'); ?>
    <!-- You may need to put some content here -->
<?php $this->endContent(); ?>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

       
       <?php $this->beginContent('@app/views/layouts/footer.php'); ?>
    <!-- You may need to put some content here -->
<?php $this->endContent(); ?>