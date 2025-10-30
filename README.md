<p align="center">
<img src="https://user-images.githubusercontent.com/2666735/30651452-58ae6c88-9deb-11e7-9e13-6beae3f6c54c.png" alt="Meting">
</p>

# meting-api-qijiefix
- 修改内容 [MetingApi一些小改动](https://qijieya.cn/archives/metingapifix)
## Descriptions
- 前置项目 [祈杰修改的前置项目为](https://github.com/injahow/meting-api)
- 这是基于 [Meting](https://github.com/metowolf/Meting) 创建的 APlayer API
- 灵感源于 [https://api.fczbl.vip/163/](https://api.fczbl.vip/163/)
- 部分参考 [Meting-API](https://github.com/metowolf/Meting-API)

## Build Setup

```bash
# 克隆仓库
$ git clone https://github.com/qijie233/MetingApi-qijie.git

$ cd meting-api

# 安装依赖
$ composer install

# 或者使用中国镜像
$ composer config -g repo.packagist composer https://packagist.phpcomposer.com

$ composer install
```

或者下载打包文件

或者直接使用 Meting.php

```php
// include __DIR__ . '/vendor/autoload.php';
include __DIR__ . '/src/Meting.php';
```

修改代码参数

```php
<?php
// 设置API路径（可默认）
define('API_URI', api_uri());
// 设置中文歌词
define('TLYRIC', true);
// 设置歌单文件缓存及时间
define('CACHE', false);
define('CACHE_TIME', 86400);
// 设置短期缓存-需要安装apcu
define('APCU_CACHE', false);
// 设置AUTH密钥-更改'meting-secret'
define('AUTH', false);
define('AUTH_SECRET', 'meting-secret');

......
```

## Demo

API-Demo:
 https://api.qijieya.cn/meting/?type=url&id=1969519579
 https://api.qijieya.cn/meting/?type=url&id=416892104
 https://api.qijieya.cn/meting/?type=song&id=591321
 https://api.qijieya.cn/meting/?type=playlist&id=2619366284

## Thanks
- [injahow](https://github.com/injahow/meting-api)
- [APlayer](https://github.com/MoePlayer/APlayer)
- [Meting](https://github.com/metowolf/Meting)
- [MetingJS](https://github.com/metowolf/MetingJS)

## Requirement

PHP 5.4+ and BCMath, Curl, OpenSSL extension installed.

## License

[MIT](https://github.com/injahow/meting-api/blob/master/LICENSE) license.

Copyright (c) 2025 Nishikigi Qijie
