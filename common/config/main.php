<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        // 'authManager' => [
        //     'class' => 'yii\rbac\DbManager', // or use 'yii\rbac\PhpManager'
        // ],
        // 'user' => [
        //     'class' => 'mdm\backend\models\User',
        //     'identityClass' => 'mdm\backend\models\User',
        //     'loginUrl' => ['admin/user/login'],
        // ],
    ],
];
