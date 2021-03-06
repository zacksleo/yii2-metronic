<?php

namespace zacksleo\yii2\metronic\bundles\layouts;

use yii\web\AssetBundle;

/**
 * @author zacksleo <zacks.leo@gmail.com>
 */
class Layout3Asset extends AssetBundle
{
    public $sourcePath = '@vendor/zacksleo/metronic';

    public $css = [
        'layouts/layout3/css/layout.min.css',
        'layouts/layout3/css/themes/default.min.css',
        'layouts/layout3/css/custom.min.css'
    ];
    public $js = [
        'layouts/layout3/scripts/layout.min.js',
        'layouts/layout3/scripts/demo.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
        'zacksleo\yii2\metronic\bundles\basics\MetronicAsset'
    ];
}
