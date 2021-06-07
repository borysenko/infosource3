<?php

namespace app\controllers;

use app\models\News;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


class NewsController extends Controller
{
    public function actionCreate()
    {
        $model = new News();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->goBack();
        } else {
            $model->loadContent();
        }

        return $this->render('create', [
            'model' => $model
        ]);
    }

    public function actionView($id) {
        if(!$model = News::findOne($id)) {
            throw new NotFoundHttpException('Новости нет!');
        }

        $model->last_visit_time = time();
        $model->save(false);

        return $this->render('view', [
            'model' => $model
        ]);
    }

    public function actionRandom() {
        $model = News::find()->orderBy('last_visit_time DESC')->one();
        $model->randomContent();
        $model->save(false);
        return $this->goBack();
    }
}
