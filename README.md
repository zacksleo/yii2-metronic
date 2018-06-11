# yii2 metronic asset bundles

[![Packagist](https://img.shields.io/packagist/v/zacksleo/yii2-metronic.svg)]()
[![Packagist](https://img.shields.io/packagist/dt/zacksleo/yii2-metronic.svg)]()
[![Travis](https://img.shields.io/travis/zacksleo/yii2-metronic.svg)]()
[![Scrutinizer](https://img.shields.io/scrutinizer/g/zacksleo/yii2-metronic.svg)]()
[![Scrutinizer Coverage](https://img.shields.io/scrutinizer/coverage/g/zacksleo/yii2-metronic.svg)]()


## Quick Start

### Config composer.json

```
  "repositories": {
    "asset-packagist": {
      "type": "composer",
      "url": "https://asset-packagist.org"
    }
  }
```

### Install

```
composer require zacksleo/yii2-metronic
```

### Usage

+ ** For Layout **

```
use zacksleo\yii2\metronic\bundles\layouts\LayoutAsset;
LayoutAsset::register($this);
```

+ ** For Plugins **

```
use zacksleo\yii2\metronic\bundles\plugins\AnimateAsset;
AnimateAsset::register($this);
```

+ ** For Pages **

```
use zacksleo\yii2\metronic\bundles\pages\AboutAsset;
AboutAsset::register($this);
```