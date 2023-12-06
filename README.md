# Dcat Admin Extension jack/scaffold

# 插件说明
1. jack/scaffold扩展是基于dcat-admin自带的`代码生成器`进行的二次优化，以减少繁琐的route和权限配置


# 安装说明
1. 安装后需要修改`app/应用路径/routes.php`文件加入以下代码,以注册动态路由
```php
    $routes = JackScaffoldRoute::where('prefix',config('admin.route.prefix'))->get();
    foreach ($routes as $route){
        $router->resource($route->route,$route->class);
    }
```
修改后的代码如下

```php
<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Dcat\Admin\Admin;
use Jack\Scaffold\Models\JackScaffoldRoute;

Admin::routes();

Route::group([
    'prefix'     => config('admin.route.prefix'),
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    
    $routes = JackScaffoldRoute::where('prefix',config('admin.route.prefix'))->get();
    foreach ($routes as $route){
        $router->resource($route->route,$route->class);
    }

});

 
```


# 卸载说明
1. 本扩展安装时会创建一个jack_scaffold_routes（路由）表、卸载时此表不会删除，以防之前通过本插件设置的路由不可恢复，如需彻底卸载此插件，请手动删除
2. 删除 `安装说明` 中添加的路由代码


