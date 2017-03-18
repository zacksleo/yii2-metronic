<?php


namespace zacksleo\yii2\metronic\bundles\plugins;

use yii\web\AssetBundle;

class BackstretchAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery/backstretch';

    public $js = [
        'jquery.backstretch.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
