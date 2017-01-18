<?php

namespace zacksleo\yii2\metronic\bundles\plugins;


use yii\web\AssetBundle;

class SimpleLineIconsAsset extends AssetBundle
{
    public $sourcePath = '@bower/simple-line-icons';
    public $css = [
        'css/simple-line-icons.css'
    ];
    /**
     * @inheritdoc
     */
    public $publishOptions = [
        'only' => [
            'fonts/*',
            'css/*'
        ]
    ];


}