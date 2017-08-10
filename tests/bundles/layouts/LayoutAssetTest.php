<?php

namespace tests\bundles\basics;

use zacksleo\yii2\metronic\bundles\layouts\LayoutAsset;
use yii\web\AssetBundle;
use tests\TestCase;

/**
 * LayoutAssetTest
 */
class LayoutAssetTest extends TestCase
{
    public function testAsset()
    {
        $view = $this->getView();
        $this->assertEmpty($view->assetBundles);
        LayoutAsset::register($view);
        $this->assertEquals(9, count($view->assetBundles));
        $this->assertArrayHasKey('zacksleo\\yii2\\metronic\\bundles\\layouts\\LayoutAsset', $view->assetBundles);
        $this->assertTrue($view->assetBundles['zacksleo\\yii2\\metronic\\bundles\\layouts\\LayoutAsset'] instanceof AssetBundle);
        $content = $view->renderFile('@tests/data/views/layout.php');
        $this->assertContains('layouts/layout/css/layout.min.css', $content);
        $this->assertContains('layouts/layout/css/themes/default.min.css', $content);
        $this->assertContains('layouts/layout/css/custom.min.css', $content);
        $this->assertContains('layouts/layout/scripts/layout.min.js', $content);
        $this->assertContains('layouts/layout/scripts/demo.min.js', $content);
    }
}
