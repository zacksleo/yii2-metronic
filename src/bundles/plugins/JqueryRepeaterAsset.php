<?php
namespace zacksleo\yii2\metronic\bundles\plugins;

use yii\web\AssetBundle;
use yii\web\View;

class JqueryRepeaterAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery.repeater';
    public $js = [
        'jquery.repeater.min.js'
    ];
    public $publishOptions = [
        'except'=>[
            'src',
            'test'
        ]
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    public $jsOptions = [
        'position' => View::POS_END
    ];
}