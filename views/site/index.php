<?php

use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <p>
            <a class="btn btn-lg btn-success" href="<?=Url::to(['/news/create'])?>">Добавить новость</a>
            <a class="btn btn-lg btn-info" href="<?=Url::to(['/news/random'])?>">Поменять местами слова в первой новости</a>
        </p>
    </div>

    <div class="body-content">

       <?php foreach ($modelNews as $model):?>
        <div>
            <h2><a href="<?=Url::to(['/news/view', 'id' => $model->id])?>">Новость # <?=$model->id?></a></h2>
            <? if($model->last_visit_time):?>
            <p>Дата и время последнего просмотра: <?=Yii::$app->formatter->asTime($model->last_visit_time, "php:d M Y H:i");?></p>
            <?endif;?>
            <p><?=$model->content?></p>
        </div>
       <hr />
       <?php endforeach;?>
    </div>
</div>
