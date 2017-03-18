<?php

namespace zacksleo\yii2\metronic\bundles\pages;

use yii\web\AssetBundle;

class InboxAsset extends AssetBundle
{
    public $sourcePath = '@vendor/zacksleo/metronic';

    public $css = [
        'app/css/inbox.min.css',
    ];

    public $js = [
        'app/scripts/inbox.min.js'
    ];

    public $depends = [
        'zacksleo\yii2\metronic\bundles\basics\MetronicAsset',
    ];
}
