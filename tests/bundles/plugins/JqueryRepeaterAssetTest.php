<?php

namespace tests\bundles\pages;

use zacksleo\yii2\metronic\bundles\plugins\JqueryRepeaterAsset;
use Yii;
use yii\web\AssetBundle;
use tests\TestCase;

/**
 * MetronicAssetTest
 */
class JqueryRepeaterAssetTest extends TestCase
{
    public function testAsset()
    {
        $view = $this->getView();
        $this->assertEmpty($view->assetBundles);
        JqueryRepeaterAsset::register($view);
        $this->assertEquals(2, count($view->assetBundles));
        $this->assertArrayHasKey('zacksleo\\yii2\\metronic\\bundles\\plugins\\JqueryRepeaterAsset', $view->assetBundles);
        $this->assertTrue($view->assetBundles['zacksleo\\yii2\\metronic\\bundles\\plugins\\JqueryRepeaterAsset'] instanceof AssetBundle);
        $content = $view->renderFile('@tests/data/views/layout.php');
        $this->assertContains('jquery.repeater.min.js', $content);
    }
}
