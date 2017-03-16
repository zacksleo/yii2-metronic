<?php
namespace zacksleo\yii2\metronic\bundles\plugins;

use yii\web\AssetBundle;

class Animate extends AssetBundle
{
    public $sourcePath = '@bower/animate.css';

    public $css = [
        'animate.min.css',
    ];
}