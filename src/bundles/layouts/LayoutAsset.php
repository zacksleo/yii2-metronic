<?php

namespace zacksleo\yii2\metronic\bundles\layouts;

use yii\web\AssetBundle;

/**
 * @author zacksleo <zacks.leo@gmail.com>
 */
class LayoutAsset extends AssetBundle
{
    public $sourcePath = '@vendor/zacksleo/metronic';

    public $css = [
        'layouts/layout/css/layout.min.css',
        'layouts/layout/css/themes/darkblue.min.css',
        'layouts/layout/css/custom.min.css'
    ];
    public $js = [
        'layouts/layout/scripts/layout.min.js',
        'layouts/layout/scripts/demo.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
        'zacksleo\yii2\metronic\bundles\basics\MetronicAsset'
    ];
}
