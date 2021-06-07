<?php

?>
<h1>Новость # <?=$model->id?></h1>
<p>Дата и время последнего просмотра: <?=Yii::$app->formatter->asTime($model->last_visit_time, "php:d M Y H:i");?></p>
<p><?=$model->content?></p>