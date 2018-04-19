<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 16.04.2018
 * Time: 10:44
 */
$config =  [
  'id' => 'crmapp',
  // Оба эти пути указывают на корень проекта а не на папку скрипта!!!
  //'basePath' => realpath(__DIR__.'/../'),
  'basePath' => dirname(__DIR__),
  'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
  //'basePath' => dirname(__DIR__),
  'components' => [
      'request' => [
        'cookieValidationKey' => '34jfjff44jffr75hrhdsfdsf',
      ],
      'errorHandler' => [
      'errorAction' => 'site/error',
      ],
      'log' => [
          'traceLevel' => YII_DEBUG ? 3 : 0,
          'targets' => [
              [
                  'class' => 'yii\log\FileTarget',
                  'levels' => ['error', 'warning'],
              ],
          ],
      ],
      'db' => require(__DIR__ . '/db.php'),
      'urlManager' => [
          'enablePrettyUrl' => true,
          'showScriptName' => false,
      ],
      'view' => [
          'renderers' => [
              'md' => [
                  'class' => 'app\utilities\MarkdownRenderer'
              ]
          ]
      ]
    ],
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;