<?php
namespace zacksleo\yii2\metronic\bundles\plugins;

use yii\web\AssetBundle;
use yii\web\View;

class MultiSelectAsset extends AssetBundle
{
    public $sourcePath = '@bower/multiselect';
    public $publishOptions = [
        'only' => [
            'css/*',
            'img/*',
            'js/*'
        ]
    ];
    public $css = [
        'css/multi-select.css'
    ];
    public $js = [
        'js/jquery.multi-select.js'
    ];
    public $jsOptions = [
        'position' => View::POS_END
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}