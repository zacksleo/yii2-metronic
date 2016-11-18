<?php

namespace zacksleo\yii2\metronic\bundles;


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
        'app\assets\Select2Asset',
    ];
}