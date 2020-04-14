# Jingdong-api
京东接口

> 本接口基于 hvenus/Jingdong-api修改 ，版权归原作者所有，增加了一些功能，修复了一些BUG。

## 安装

composer require scpzc/jingdong-api

## 使用

示例

```php

// 创建实例
$jd = new JD();

// 设置系统参数
$jd->setConfig([
    'AppKey' => 'YOUR_APP_KEY',
    'AppSecret' => 'YOUR_APP_SECRET',
    'Url' => 'https://api.jd.com',
    'Uri' => 'routerjson',
    'Version' => '2.0',
    'Format' => 'json',
    'deptNos' => '事业部编号',
]);

// 设置应用参数
$jd->setParams([
    'access_token' => 'YOUR_ACCESS_TOKEN'
]);

// 获取京东快递运单号
$jd->ExpressGetWaybillCode([
    'preNum' => 1,
    'customerCode' => '商家编码',
    'orderType' => 0
]);

// 返回值(JSON)：
{
    "jingdong_etms_waybillcode_get_responce": {
        "resultInfo": {
            "message": "成功",
            "code": "100",
            "deliveryIdList": [
                {
                    "deliveryIdList": "这里是快递号"
                }
            ]
        }
    }
}


```

## 注意:

以上面示例为例。

京东的接口文档里返回值写明是 "jingdong_etms_waybillcode_get_response"，可实际返回的是"jingdong_etms_waybillcode_get_responce"，"response"拼成了"responce"。

京东所有接口的返回值里 "response" 都拼成了 "responce"。

别问我怎么知道的！！！


## 已完成接口

* ACCOUNT 子账号API
* ADDRESS 京东地址库API
* ECLP ECLP仓海API
* EXPRESS 京东快递API
* CATEGORY 类目API
* DSP 京准通-快车API
* SHOP 店铺API
* ORDER 订单API

## 其它

PHP函数不允许以数字开头，所以所有数字开头的前面都多加个“jd_”前缀以示区别.

## 刷新授权Token

京东的授权Token正式环境下是一年的有效期，可以写个定时任务每天去检查下token的过期时间，根据需要来自动刷新。

示例
```php
$jd = new JD();
    $config = [
        'app_key'       => config('jd.express.app_key'),
        'app_secret'    => config('jd.express.app_secret'),
        'refresh_token' => $refreshToken,
    ];
    $result = $jd->refreshToken($config);
```

## License

MIT