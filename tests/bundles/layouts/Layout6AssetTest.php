<?php

namespace tests\bundles\basics;

use zacksleo\yii2\metronic\bundles\layouts\Layout6Asset;
use yii\web\AssetBundle;
use tests\TestCase;

/**
 * LayoutAssetTest
 */
class Layout6AssetTest extends TestCase
{
    public function testAsset()
    {
        $view = $this->getView();
        $this->assertEmpty($view->assetBundles);
        Layout6Asset::register($view);
        $this->assertEquals(9, count($view->assetBundles));
        $this->assertArrayHasKey('zacksleo\\yii2\\metronic\\bundles\\layouts\\Layout6Asset', $view->assetBundles);
        $this->assertTrue($view->assetBundles['zacksleo\\yii2\\metronic\\bundles\\layouts\\Layout6Asset'] instanceof AssetBundle);
        $content = $view->renderFile('@tests/data/views/layout.php');
        $this->assertContains('layouts/layout6/css/layout.min.css', $content);
        $this->assertContains('layouts/layout6/css/themes/default.min.css', $content);
        $this->assertContains('layouts/layout6/css/custom.min.css', $content);
        $this->assertContains('layouts/layout6/scripts/layout.min.js', $content);
        $this->assertContains('layouts/layout6/scripts/demo.min.js', $content);
    }
}
