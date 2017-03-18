<?php

namespace zacksleo\yii2\metronic\bundles\pages;

use yii\web\AssetBundle;

class Portfolio2Asset extends AssetBundle
{
    public $sourcePath = '@vendor/zacksleo/metronic';

    public $css = [
        'global/plugins/cubeportfolio/css/portfolio.min.css',
    ];

    public $js = [
        'pages/scripts/portfolio-2.min.js',
        'global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
