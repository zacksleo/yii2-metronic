<?php

namespace zacksleo\yii2\metronic\bundles\pages;

use yii\web\AssetBundle;

class Login3Asset extends AssetBundle
{
    public $sourcePath = '@vendor/zacksleo/metronic';

    public $css = [
        'pages/css/login-3.min.css',
    ];
    public $js = [
        // 'pages/scripts/login-4.min.js'
    ];
    public $depends = [
        'zacksleo\yii2\metronic\bundles\plugins\JqueryValidationAsset',
        'zacksleo\yii2\metronic\bundles\basics\MetronicAsset',
    ];
}
