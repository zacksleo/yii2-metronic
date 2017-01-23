<?php

namespace zacksleo\yii2\metronic\bundles\pages;

use yii\web\AssetBundle;

class Login4Asset extends AssetBundle
{
    public $sourcePath = '@vendor/zacksleo/metronic';

    public $css = [
        'pages/css/login-4.min.css',
    ];
    public $js = [
        // 'pages/scripts/login-4.min.js'
    ];
    public $depends = [
        'zacksleo\yii2\metronic\bundles\plugins\JqueryBackstretchAsset',
        'zacksleo\yii2\metronic\bundles\plugins\JqueryValidationAsset',
        'zacksleo\yii2\metronic\bundles\basics\MetronicAsset',
    ];
}