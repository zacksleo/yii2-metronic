<?php

namespace zacksleo\yii2\metronic\bundles\plugins;

use yii\web\AssetBundle;
use yii\web\View;

class JqueryValidationAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-validation/dist';
    public $js = [
        'jquery.validate.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    public $jsOptions = [
        'position' => View::POS_END
    ];
}