<?php

namespace tests\bundles\pages;

use zacksleo\yii2\metronic\bundles\pages\Portfolio4Asset;
use yii\web\AssetBundle;
use tests\TestCase;

/**
 * MetronicAssetTest
 */
class Portfolio4AssetTest extends TestCase
{
    public function testAsset()
    {
        $view = $this->getView();
        $this->assertEmpty($view->assetBundles);
        Portfolio4Asset::register($view);
        $this->assertEquals(2, count($view->assetBundles));
        $this->assertArrayHasKey('zacksleo\\yii2\\metronic\\bundles\\pages\\Portfolio4Asset', $view->assetBundles);
        $this->assertTrue($view->assetBundles['zacksleo\\yii2\\metronic\\bundles\\pages\\Portfolio4Asset'] instanceof AssetBundle);
        $content = $view->renderFile('@tests/data/views/layout.php');
        $this->assertContains('global/plugins/cubeportfolio/css/portfolio.min.css', $content);
        $this->assertContains('pages/scripts/portfolio-4.min.js', $content);
        $this->assertContains('global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js', $content);
    }
}
