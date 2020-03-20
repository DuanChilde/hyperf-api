## 一：env配置
1. debug 和 env配置
2. mysql, redis, jwt, elasticsearch等配置
3. 新建.env, .env.dev, .env.prod便于管理
```
#三个值：local, develop, production 
APP_DEBUG=true
APP_ENV=local
```
## 二：公共类
##### 1. 引入公共 并自动加载
```
#新建文件夹：辅助类, 性状, 工具类
app/common/Helpers 
app/common/Traits
app/common/Utils

#composer.json加入
"Common\\": "common"

composer dumpautoload
```
##### 2. 辅助类
- TimeFormat 时间格式转换
- Validator  通用验证器
##### 3. 性状
- JsonResponse 接口响应json
##### 4. 工具类
- DingDingRobot 钉钉机器人


## composer包
```
composer require ext-curl
composer require ext-json
composer require ext-redis
composer require ext-bcmath
```

