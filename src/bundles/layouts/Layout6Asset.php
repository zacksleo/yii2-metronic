<?php

namespace zacksleo\yii2\metronic\bundles\layouts;

use yii\web\AssetBundle;

/**
 * @author zacksleo <zacks.leo@gmail.com>
 */
class Layout6Asset extends AssetBundle
{
    public $sourcePath = '@vendor/zacksleo/metronic';

    public $css = [
        'layouts/layout6/css/layout.min.css',
        'layouts/layout6/css/themes/default.min.css',
        'layouts/layout6/css/custom.min.css'
    ];
    public $js = [
        'layouts/layout6/scripts/layout.min.js',
        'layouts/layout6/scripts/demo.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
        'zacksleo\yii2\metronic\bundles\basics\MetronicAsset'
    ];
}
