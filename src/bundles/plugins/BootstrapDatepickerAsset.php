<?php

namespace zacksleo\yii2\metronic\bundles\plugins;

use yii\web\AssetBundle;
use yii\web\View;

class BootstrapDatepickerAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap-datepicker';
    public $js = [
        'dist/js/bootstrap-datepicker.min.js',
        'dist/locales/bootstrap-datepicker.zh-CN.min.js',

    ];
    public $css = [
        'dist/css/bootstrap-datepicker3.min.css'
    ];
    public $publishOptions = [
        'only' => [
            'dist/css/*',
            'dist/js/*',
            'dist/locales/*'
        ]
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset'
    ];

    public $jsOptions = [
        'position' => View::POS_END
    ];
}
