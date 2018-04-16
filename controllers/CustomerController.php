<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 17.04.2018
 * Time: 9:55
 */

namespace app\controllers;


use yii\web\Controller;

class CustomerController extends Controller
{
    public function actionIndex()
    {
        $records = $this->findRecordsByQuery();
        return $this->render('index', compact('records'));
    }

}