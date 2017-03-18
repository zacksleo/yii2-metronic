<?php

namespace zacksleo\yii2\metronic\bundles\pages;

use yii\web\AssetBundle;

class Invoice2Asset extends AssetBundle
{
    public $sourcePath = '@vendor/zacksleo/metronic';

    public $css = [
        'pages/css/invoice-2.min.css',
    ];

    public $depends = [
        'zacksleo\yii2\metronic\bundles\basics\MetronicAsset',
    ];
}
