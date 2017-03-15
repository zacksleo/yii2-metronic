<?php

namespace zacksleo\yii2\metronic\bundles\pages;

use yii\web\AssetBundle;

class LoginAsset extends AssetBundle
{
    public $sourcePath = '@vendor/zacksleo/metronic';

    public $css = [
        'pages/css/login.min.css',
    ];
    public $depends = [
        'zacksleo\yii2\metronic\bundles\plugins\JqueryValidationAsset',
        'zacksleo\yii2\metronic\bundles\basics\MetronicAsset',
    ];
}