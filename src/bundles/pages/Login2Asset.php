<?php

namespace zacksleo\yii2\metronic\bundles\pages;

use yii\web\AssetBundle;

class Login2Asset extends AssetBundle
{
    public $sourcePath = '@vendor/zacksleo/metronic';

    public $css = [
        'pages/css/login-2.min.css',
    ];
    public $depends = [
        'zacksleo\yii2\metronic\bundles\plugins\JqueryValidationAsset',
        'zacksleo\yii2\metronic\bundles\basics\MetronicAsset',
    ];
}
