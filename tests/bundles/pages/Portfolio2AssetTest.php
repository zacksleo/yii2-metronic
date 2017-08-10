<?php

namespace tests\bundles\pages;

use zacksleo\yii2\metronic\bundles\pages\Portfolio2Asset;
use yii\web\AssetBundle;
use tests\TestCase;

/**
 * MetronicAssetTest
 */
class Portfolio2AssetTest extends TestCase
{
    public function testAsset()
    {
        $view = $this->getView();
        $this->assertEmpty($view->assetBundles);
        Portfolio2Asset::register($view);
        $this->assertEquals(2, count($view->assetBundles));
        $this->assertArrayHasKey('zacksleo\\yii2\\metronic\\bundles\\pages\\Portfolio2Asset', $view->assetBundles);
        $this->assertTrue($view->assetBundles['zacksleo\\yii2\\metronic\\bundles\\pages\\Portfolio2Asset'] instanceof AssetBundle);
        $content = $view->renderFile('@tests/data/views/layout.php');
        $this->assertContains('global/plugins/cubeportfolio/css/portfolio.min.css', $content);
        $this->assertContains('pages/scripts/portfolio-2.min.js', $content);
        $this->assertContains('global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js', $content);
    }
}
