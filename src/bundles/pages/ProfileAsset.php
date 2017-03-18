<?php

namespace zacksleo\yii2\metronic\bundles\layouts;

use yii\web\AssetBundle;

class ProfileAsset extends AssetBundle
{
    public $sourcePath = '@vendor/zacksleo/metronic';

    public $css = [
        'pages/css/profile.min.css',
    ];
}
