<?php

namespace zacksleo\yii2\metronic\bundles\plugins;

use yii\web\AssetBundle;

class CountdownAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery.countdown';

    public $css = [
        'dist/jquery.countdown.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
