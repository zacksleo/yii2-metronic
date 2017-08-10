<?php

namespace tests\bundles\pages;

use zacksleo\yii2\metronic\bundles\plugins\BootstrapDatepickerAsset;
use Yii;
use yii\web\AssetBundle;
use tests\TestCase;

/**
 * MetronicAssetTest
 */
class BootstrapDatepickerAssetTest extends TestCase
{
    public function testAsset()
    {
        $view = $this->getView();
        $this->assertEmpty($view->assetBundles);
        BootstrapDatepickerAsset::register($view);
        $this->assertEquals(4, count($view->assetBundles));
        $this->assertArrayHasKey('zacksleo\\yii2\\metronic\\bundles\\plugins\\BootstrapDatepickerAsset', $view->assetBundles);
        $this->assertTrue($view->assetBundles['zacksleo\\yii2\\metronic\\bundles\\plugins\\BootstrapDatepickerAsset'] instanceof AssetBundle);
        $content = $view->renderFile('@tests/data/views/layout.php');
        $this->assertContains('dist/js/bootstrap-datepicker.min.js', $content);
        $this->assertContains('dist/locales/bootstrap-datepicker.zh-CN.min.js', $content);
        $this->assertContains('dist/css/bootstrap-datepicker3.min.css', $content);
    }
}
