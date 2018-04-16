<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 16.04.2018
 * Time: 10:54
 */

namespace app\controllers;


use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
        return 'Hello';
    }
}