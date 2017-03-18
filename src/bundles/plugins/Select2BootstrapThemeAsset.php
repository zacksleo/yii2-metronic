<?php

namespace zacksleo\yii2\metronic\bundles\plugins;


use yii\web\AssetBundle;

class Select2BootstrapThemeAsset extends AssetBundle
{
    public $sourcePath = '@bower/select2-bootstrap-theme';
    public $css = [
        'dist/select2-bootstrap.min.css'
    ];
    public $publishOptions = [
        'only' => [
            'dist/*'
        ]
    ];
    public $depends = [
        'zacksleo\yii2\metronic\bundles\plugins\Select2Asset',
    ];
}
