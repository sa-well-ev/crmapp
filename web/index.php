<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 16.04.2018
 * Time: 10:27
 */
defined('YII_DEBUG') or define('YII_DEBUG', true);
// Включаем сам фреймворк Vii (1)
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';
// Получаем конфигурацию (2)
$config = require __DIR__ . '/../config/web.php';
// Соэдаём и немедленно выполняем приложение (3)
(new yii\web\Application($config))->run();