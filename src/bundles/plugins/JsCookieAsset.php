<?php

namespace zacksleo\yii2\metronic\bundles\plugins;

use yii\web\AssetBundle;
use yii\web\View;

class JsCookieAsset extends AssetBundle
{
    public $sourcePath = '@bower/js-cookie';
    public $js = [
        'src/js.cookie.js'
    ];
    public $publishOptions = [
        'only' => [
            'src/*'
        ]
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    public $jsOptions = [
        'position' => View::POS_END
    ];
}
