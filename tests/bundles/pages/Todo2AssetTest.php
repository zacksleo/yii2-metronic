<?php

namespace tests\bundles\pages;

use zacksleo\yii2\metronic\bundles\pages\Todo2Asset;
use yii\web\AssetBundle;
use tests\TestCase;

/**
 * MetronicAssetTest
 */
class Todo2AssetTest extends TestCase
{
    public function testAsset()
    {
        $view = $this->getView();
        $this->assertEmpty($view->assetBundles);
        Todo2Asset::register($view);
        $this->assertEquals(9, count($view->assetBundles));
        $this->assertArrayHasKey('zacksleo\\yii2\\metronic\\bundles\\pages\\Todo2Asset', $view->assetBundles);
        $this->assertTrue($view->assetBundles['zacksleo\\yii2\\metronic\\bundles\\pages\\Todo2Asset'] instanceof AssetBundle);
        $content = $view->renderFile('@tests/data/views/layout.php');
        $this->assertContains('app/css/todo-2.min.css', $content);
        $this->assertContains('app/scripts/todo-2.min.js', $content);
    }
}
