<?php

namespace zacksleo\yii2\metronic\bundles\plugins;

use yii\web\AssetBundle;
use yii\web\View;

class JqueryScrollToAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery.scrollTo';
    public $js = [
        'jquery.scrollTo.min.js'
    ];
    
    public $jsOptions = [
        'position' => View::POS_END
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}