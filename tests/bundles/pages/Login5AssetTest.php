<?php

namespace tests\bundles\pages;

use zacksleo\yii2\metronic\bundles\pages\Login5Asset;
use yii\web\AssetBundle;
use tests\TestCase;

/**
 * MetronicAssetTest
 */
class Login5AssetTest extends TestCase
{
    public function testAsset()
    {
        $view = $this->getView();
        $this->assertEmpty($view->assetBundles);
        Login5Asset::register($view);
        $this->assertEquals(11, count($view->assetBundles));
        $this->assertArrayHasKey('zacksleo\\yii2\\metronic\\bundles\\pages\\Login5Asset', $view->assetBundles);
        $this->assertTrue($view->assetBundles['zacksleo\\yii2\\metronic\\bundles\\pages\\Login5Asset'] instanceof AssetBundle);
        $content = $view->renderFile('@tests/data/views/layout.php');
        $this->assertContains('pages/css/login-5.min.css', $content);
    }
}
