<?php

namespace zacksleo\yii2\metronic\bundles\plugins;

use yii\web\AssetBundle;
use yii\web\View;

class BootstrapMarkdownAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap-markdown';
    public $js = [
        'js/bootstrap-markdown.js'
    ];
    public $css = [
        'bootstrap-markdown.min.css'
    ];
    public $publishOptions = [
        'only' => [
            'css/*',
            'js/*'
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
