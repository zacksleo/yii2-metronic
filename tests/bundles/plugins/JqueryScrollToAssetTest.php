<?php

namespace tests\bundles\pages;

use zacksleo\yii2\metronic\bundles\plugins\JqueryScrollToAsset;
use Yii;
use yii\web\AssetBundle;
use tests\TestCase;

/**
 * MetronicAssetTest
 */
class JqueryScrollToAssetTest extends TestCase
{
    public function testAsset()
    {
        $view = $this->getView();
        $this->assertEmpty($view->assetBundles);
        JqueryScrollToAsset::register($view);
        $this->assertEquals(2, count($view->assetBundles));
        $this->assertArrayHasKey('zacksleo\\yii2\\metronic\\bundles\\plugins\\JqueryScrollToAsset', $view->assetBundles);
        $this->assertTrue($view->assetBundles['zacksleo\\yii2\\metronic\\bundles\\plugins\\JqueryScrollToAsset'] instanceof AssetBundle);
        $content = $view->renderFile('@tests/data/views/layout.php');
        $this->assertContains('jquery.scrollTo.min.js', $content);
    }
}
