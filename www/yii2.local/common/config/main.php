<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\MemCache',
            'useMemcached' => true,
            'servers' => [
                [
                    'host' => 'memcached',
                    'port' => 11211,
                ],
            ]
        ],
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
    ],
];
