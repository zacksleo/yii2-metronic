<?php

namespace tests\bundles\pages;

use zacksleo\yii2\metronic\bundles\plugins\MultiSelectAsset;
use Yii;
use yii\web\AssetBundle;
use tests\TestCase;

/**
 * MetronicAssetTest
 */
class MultiSelectAssetTest extends TestCase
{
    public function testAsset()
    {
        $view = $this->getView();
        $this->assertEmpty($view->assetBundles);
        MultiSelectAsset::register($view);
        $this->assertEquals(3, count($view->assetBundles));
        $this->assertArrayHasKey('zacksleo\\yii2\\metronic\\bundles\\plugins\\MultiSelectAsset', $view->assetBundles);
        $this->assertTrue($view->assetBundles['zacksleo\\yii2\\metronic\\bundles\\plugins\\MultiSelectAsset'] instanceof AssetBundle);
        $content = $view->renderFile('@tests/data/views/layout.php');
        $this->assertContains('css/multi-select.css', $content);
        $this->assertContains('js/jquery.multi-select.js', $content);
    }
}
