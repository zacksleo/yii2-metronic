<?php

namespace zacksleo\yii2\metronic\bundles\plugins;

use yii\web\AssetBundle;
use yii\web\View;


class Select2Asset extends AssetBundle
{
    public $sourcePath = '@bower/select2';
    public $js = [
        'dist/js/select2.js'
    ];
    public $publicOptions = [
        'only' => 'dist/*'
    ];
    public $css = [
        'dist/css/select2.min.css'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    public $jsOptions = [
        'position' => View::POS_END
    ];
}