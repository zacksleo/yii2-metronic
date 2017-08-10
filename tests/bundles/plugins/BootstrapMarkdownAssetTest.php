<?php

namespace tests\bundles\pages;

use zacksleo\yii2\metronic\bundles\plugins\BootstrapMarkdownAsset;
use Yii;
use yii\web\AssetBundle;
use tests\TestCase;

/**
 * MetronicAssetTest
 */
class BootstrapMarkdownAssetTest extends TestCase
{
    public function testAsset()
    {
        $view = $this->getView();
        $this->assertEmpty($view->assetBundles);
        BootstrapMarkdownAsset::register($view);
        $this->assertEquals(4, count($view->assetBundles));
        $this->assertArrayHasKey('zacksleo\\yii2\\metronic\\bundles\\plugins\\BootstrapMarkdownAsset', $view->assetBundles);
        $this->assertTrue($view->assetBundles['zacksleo\\yii2\\metronic\\bundles\\plugins\\BootstrapMarkdownAsset'] instanceof AssetBundle);
        $content = $view->renderFile('@tests/data/views/layout.php');
        $this->assertContains('js/bootstrap-markdown.js', $content);
        $this->assertContains('bootstrap-markdown.min.css', $content);
    }
}
