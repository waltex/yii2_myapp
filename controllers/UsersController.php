<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 26.07.15
 * Time: 11:39
 */

namespace app\controllers;

use yii\web\Controller;
use app\models\Users;

class UsersController extends Controller
{
    public function actionIndex()
    {
        //$users = [1, 2, 3]; //Users::find()->all();
        //$users = Users::find()->all();
        $connection = \Yii::$app->db;
        $model = $connection->createCommand('SELECT * FROM users');
        $users = $model->queryAll();


//        print_r($users);
        return $this->render('index',['users' => $users]);
    }
}
