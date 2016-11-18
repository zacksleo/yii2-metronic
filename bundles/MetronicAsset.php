<?php

namespace zacksleo\yii2\metronic\bundles;

use yii\web\AssetBundle;

/**
 * @author zacksleo <zacksleo@gmail.com>
 */
class MetronicAsset extends AssetBundle
{
    public $layout = null;
    public $pages = null;

    public $sourcePath = '@vendor/zacksleo/metronic';

    public $css = [
        'global/css/components-md.min.css',
        'global/css/plugins-md.min.css',
    ];

    public $js = [
        'global/scripts/app.min.js',
        'layouts/global/scripts/quick-sidebar.min.js'
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
        'zacksleo\yii2\metronic\bundles\FontAwesomeAsset',
        'zacksleo\yii2\metronic\bundles\JquerySlimscrollAsset',
        'zacksleo\yii2\metronic\bundles\JsCookieAsset',
        'zacksleo\yii2\metronic\bundles\SimpleLineIconsAsset',
    ];
}
