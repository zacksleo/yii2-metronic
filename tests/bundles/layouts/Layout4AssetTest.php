<?php

namespace tests\bundles\basics;

use zacksleo\yii2\metronic\bundles\layouts\Layout4Asset;
use yii\web\AssetBundle;
use tests\TestCase;

/**
 * LayoutAssetTest
 */
class Layout4AssetTest extends TestCase
{
    public function testAsset()
    {
        $view = $this->getView();
        $this->assertEmpty($view->assetBundles);
        Layout4Asset::register($view);
        $this->assertEquals(9, count($view->assetBundles));
        $this->assertArrayHasKey('zacksleo\\yii2\\metronic\\bundles\\layouts\\Layout4Asset', $view->assetBundles);
        $this->assertTrue($view->assetBundles['zacksleo\\yii2\\metronic\\bundles\\layouts\\Layout4Asset'] instanceof AssetBundle);
        $content = $view->renderFile('@tests/data/views/layout.php');
        $this->assertContains('layouts/layout4/css/layout.min.css', $content);
        $this->assertContains('layouts/layout4/css/themes/darkblue.min.css', $content);
        $this->assertContains('layouts/layout4/css/custom.min.css', $content);
        $this->assertContains('layouts/layout4/scripts/layout.min.js', $content);
        $this->assertContains('layouts/layout4/scripts/demo.min.js', $content);
    }
}
