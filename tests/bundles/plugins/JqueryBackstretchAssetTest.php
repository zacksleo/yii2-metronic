<?php

namespace tests\bundles\pages;

use zacksleo\yii2\metronic\bundles\plugins\JqueryBackstretchAsset;
use Yii;
use yii\web\AssetBundle;
use tests\TestCase;

/**
 * MetronicAssetTest
 */
class JqueryBackstretchAssetTest extends TestCase
{
    public function testAsset()
    {
        $view = $this->getView();
        $this->assertEmpty($view->assetBundles);
        JqueryBackstretchAsset::register($view);
        $this->assertEquals(2, count($view->assetBundles));
        $this->assertArrayHasKey('zacksleo\\yii2\\metronic\\bundles\\plugins\\JqueryBackstretchAsset', $view->assetBundles);
        $this->assertTrue($view->assetBundles['zacksleo\\yii2\\metronic\\bundles\\plugins\\JqueryBackstretchAsset'] instanceof AssetBundle);
        $content = $view->renderFile('@tests/data/views/layout.php');
        $this->assertContains('jquery.backstretch.min.js', $content);
    }
}
