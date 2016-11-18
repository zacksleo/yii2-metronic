<?php

namespace zacksleo\yii2\metronic\bundles;

use yii\web\AssetBundle;
use yii\web\View;

class JqueryBackstretchAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-backstretch-hugoj';
    public $js = [
        'jquery.backstretch.min.js'
    ];
    public $publishOptions = [
        'only' => [
            'jquery.backstretch.min.js'
        ]
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    public $jsOptions = [
        'position' => View::POS_END
    ];
}