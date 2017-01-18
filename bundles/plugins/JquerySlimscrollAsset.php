<?php

namespace zacksleo\yii2\metronic\bundles\plugins;

use yii\web\AssetBundle;
use yii\web\View;

class JquerySlimscrollAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery.slimscroll';
    public $js = [
        'jquery.slimscroll.min.js'
    ];
    public $publishOptions = [
        'except' => [
            'examples'
        ]
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    public $jsOptions = [
        'position' => View::POS_END
    ];
}