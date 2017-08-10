<?php

namespace tests\bundles\pages;

use zacksleo\yii2\metronic\bundles\pages\Login3Asset;
use yii\web\AssetBundle;
use tests\TestCase;

/**
 * MetronicAssetTest
 */
class Login3AssetTest extends TestCase
{
    public function testAsset()
    {
        $view = $this->getView();
        $this->assertEmpty($view->assetBundles);
        Login3Asset::register($view);
        $this->assertEquals(10, count($view->assetBundles));
        $this->assertArrayHasKey('zacksleo\\yii2\\metronic\\bundles\\pages\\Login3Asset', $view->assetBundles);
        $this->assertTrue($view->assetBundles['zacksleo\\yii2\\metronic\\bundles\\pages\\Login3Asset'] instanceof AssetBundle);
        $content = $view->renderFile('@tests/data/views/layout.php');
        $this->assertContains('pages/css/login-3.min.css', $content);
    }
}
