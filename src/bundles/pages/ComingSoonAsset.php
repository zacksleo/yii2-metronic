<?php


namespace zacksleo\yii2\metronic\bundles\pages;

use yii\web\AssetBundle;

class ComingSoonAsset extends AssetBundle
{
    public $sourcePath = '@vendor/zacksleo/metronic';

    public $css = [
        'pages/css/coming-soon.min.css',
    ];

    public $depends = [
        'zacksleo\yii2\metronic\bundles\basics\MetronicAsset',
    ];
}
