<?php

namespace zacksleo\yii2\metronic\bundles\pages;

use yii\web\AssetBundle;

class LockAsset extends AssetBundle
{
    public $sourcePath = '@vendor/zacksleo/metronic';

    public $css = [
        'pages/css/lock.min.css',
    ];

    public $depends = [
        'zacksleo\yii2\metronic\bundles\basics\MetronicAsset',
    ];
}
