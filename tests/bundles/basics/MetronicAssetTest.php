<?php

namespace tests\bundles\basics;

use zacksleo\yii2\metronic\bundles\basics\MetronicAsset;
use Yii;
use yii\web\AssetBundle;
use tests\TestCase;

/**
 * MetronicAssetTest
 */
class MetronicAssetTest extends TestCase
{
    public function testAsset()
    {
        $view = $this->getView();
        $this->assertEmpty($view->assetBundles);
        MetronicAsset::register($view);
        $this->assertEquals(8, count($view->assetBundles));
        $this->assertArrayHasKey('zacksleo\\yii2\\metronic\\bundles\\basics\\MetronicAsset', $view->assetBundles);
        $this->assertTrue($view->assetBundles['zacksleo\\yii2\\metronic\\bundles\\basics\\MetronicAsset'] instanceof AssetBundle);
        $this->assertTrue($view->assetBundles['yii\\bootstrap\\BootstrapPluginAsset'] instanceof AssetBundle);
        $this->assertTrue($view->assetBundles['zacksleo\\yii2\\metronic\\bundles\\plugins\\FontAwesomeAsset'] instanceof AssetBundle);
        $this->assertTrue($view->assetBundles['zacksleo\\yii2\\metronic\\bundles\\plugins\\JquerySlimscrollAsset'] instanceof AssetBundle);
        $this->assertTrue($view->assetBundles['zacksleo\\yii2\\metronic\\bundles\\plugins\\JsCookieAsset'] instanceof AssetBundle);
        $this->assertTrue($view->assetBundles['zacksleo\\yii2\\metronic\\bundles\\plugins\\SimpleLineIconsAsset'] instanceof AssetBundle);
        $content = $view->renderFile('@tests/data/views/layout.php');
        $this->assertContains('global/css/components-md.min.css', $content);
        $this->assertContains('global/css/plugins-md.min.css', $content);
        $this->assertContains('global/scripts/app.min.js', $content);
        $this->assertContains('layouts/global/scripts/quick-sidebar.min.js', $content);
    }
}
