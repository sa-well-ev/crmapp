<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 16.04.2018
 * Time: 10:44
 */
return [
  'id' => 'crmapp',
  // Оба эти пути указывают на корень проекта а не на папку скрипта!!!
  'basePath' => realpath(__DIR__.'/../'),
  'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
  //'basePath' => dirname(__DIR__),
  'components' => [
      'request' => [
        'cookieValidationKey' => '34jfjff44jffr75hrhdsfdsf',
      ],
      'db' => require(__DIR__ . '/db.php'),
      'urlManager' => [
          'enablePrettyUrl' => true,
          'showScriptName' => false,
      ],
    ],
];