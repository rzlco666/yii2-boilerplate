<?php

use yii\caching\FileCache;

return [
    'timeZone' => 'Asia/Jakarta',
    'language' => 'id',
    'name' => 'Yii2 Boilerplate',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => FileCache::class,
        ],
    ],
];
