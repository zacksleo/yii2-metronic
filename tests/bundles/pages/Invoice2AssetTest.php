<?php

namespace tests\bundles\pages;

use zacksleo\yii2\metronic\bundles\pages\Invoice2Asset;
use yii\web\AssetBundle;
use tests\TestCase;

/**
 * MetronicAssetTest
 */
class Invoice2AssetTest extends TestCase
{
    public function testAsset()
    {
        $view = $this->getView();
        $this->assertEmpty($view->assetBundles);
        Invoice2Asset::register($view);
        $this->assertEquals(9, count($view->assetBundles));
        $this->assertArrayHasKey('zacksleo\\yii2\\metronic\\bundles\\pages\\Invoice2Asset', $view->assetBundles);
        $this->assertTrue($view->assetBundles['zacksleo\\yii2\\metronic\\bundles\\pages\\Invoice2Asset'] instanceof AssetBundle);
        $content = $view->renderFile('@tests/data/views/layout.php');
        $this->assertContains('pages/css/invoice-2.min.css', $content);
    }
}
