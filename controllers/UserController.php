<?php

namespace app\controllers;

use app\models\User;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionUser()
    {
        $dataProvider = new ActiveDataProvider(['query' => User::find()]);
        return $this->render('user', ['dataProvider' => $dataProvider]);
    }

    public function actionCreate()
    {
        $model = new User();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['user/user', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionUpdate()
    {
        return $this->render('update');
    }

    public function actionDelete()
    {
        return $this->render('index');
    }

    public function actionAuthorization()
    {
        return $this->render('authorization');
    }
}