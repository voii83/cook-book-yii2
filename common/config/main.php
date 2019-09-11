<?php

use common\components\cart\storage\SessionsStorage;

Yii::$container->setSingleton('common\components\cart\ShoppingCart');
Yii::$container->set('common\components\cart\storage\StorageInterface', function () {
        return new SessionsStorage(Yii::$app->session, 'primary-cart');
    });
$params = require( __DIR__ . '/params.php' );

return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
