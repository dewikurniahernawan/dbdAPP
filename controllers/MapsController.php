<?php

namespace app\controllers;

use yii\web\controller;
use app\models\maps;

class MapsController extends Controller{
    public function actionIndex(){
        $query = maps::find();

        return $this->render('index');
    }
}