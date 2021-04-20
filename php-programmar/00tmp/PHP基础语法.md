2021年4月14日
* * *

地址：https://www.php.net/manual/zh/copyright.php

# 序言
* 脚本语言
* 适合web开发 并嵌入到HTML语言中

# 简介
## PHP是什么
* 超文本预处理器
* 可以嵌入到HTML语言中
    * PHP运行在服务端，将结果直接放入网页中，浏览器不显示运行过程
    * JS在浏览器动态渲染
## PHP能做什么
* 服务端脚本
    * 主要业务
    * 前后端未分离
    * 组成
        * PHP解析器（CGI或者服务器模块）
        * web服务器
        * web浏览器
* 命令行脚本
    * 学习用
    * 通过PHP解析器解析
* 编写桌面应用程序
    * 使用较少
    * 使用PHP-GTK
## PHP特点
* 支持主流操作系统
* 支持面向过程和面向对象的混合开发
* 输出HTML 图像 Flash
* 支持大量数据库
    * 数据库抽象层 https://www.php.net/manual/zh/refs.database.abstract.php
    * 数据库扩展 https://www.php.net/manual/zh/refs.database.vendors.php
* 支持多种协议服务
* 丰富的扩展库

## 实用脚本
* 第一个PHP脚本 hello.php
```
<html>
 <head>
  <title>PHP 测试</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?>
 </body>
</html>
```
* 变量以$开始 获取浏览器信息
    * 预定义变量 https://www.php.net/manual/zh/reserved.variables.php
    * $_SERVER WEB服务器提供的所有信息
    * $_SERVER 数组
    * _SERVER['HTTP_USER_AGENT'] 获取数组内容
```
<?php echo $_SERVER['HTTP_USER_AGENT']; ?>
```
* 控制流程与函数
    * if 控制流程
    * strpos() 函数 字符串搜索位置
```
<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
    echo '正在使用 Internet Explorer。<br />';
}
?>
```
* 将PHP与HTML混合
```
<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
?>
<h3>strpos() 肯定没有返回假 (FALSE)</h3>
<p>正在使用 Internet Explorer</p>
<?php
} else {
?>
<h3>strpos() 肯定返回假 (FALSE)</h3>
<center><b>没有使用 Internet Explorer</b></center>
<?php
}
?>
```

## 处理表单
* 表单 将信息提交至action.php中
    * post方法上传
```
<form action="action.php" method="post">
 <p>姓名: <input type="text" name="name" /></p>
 <p>年龄: <input type="text" name="age" /></p>
 <p><input type="submit" /></p>
</form>
```
* action.php打印表单数据
    * htmlspecialchars()保证正确编码
    * (int)转换成数值型
    * $_POST POST对象
    * $_REQUEST 包含POST GET 等请求
```
你好，<?php echo htmlspecialchars($_POST['name']); ?>。
你 <?php echo (int)$_POST['age']; ?> 岁了。
```

## 在新版本的 PHP 中使用旧的 PHP 代码
* 大部分高版本兼容低版本
    * $HTTP_*_VARS数组从 PHP 5.4.0 开始将不再有效
    * 外部变量不再被默认注册为全局变量
        * 外部变量？
        * 全局变量？



# 安装与配置
## mac配置
* mac自带PHP和Apache
* 将/private/etc/apache2/httpd.conf 中PHP注释删除点
* 启动Apache  sudo apachectl start
* 在/Library/WebServer/Documents/ 下部署php
    * sudo cp ~/Desktop/test.php . 通过http://127.0.0.1/test.php访问
* 配置PHPSTORM
    * https://www.jianshu.com/p/afbedeb21ea2

## FPM进程管理器
* FPM用于替换PHP FastCGI 的大部分附加功能
* 功能包括
    * 支持平滑停止/启动的高级进程管理功能；
    * 监听不同的端口和使用不同的 php.ini 配置文件
    * stdout 和 stderr 日志记录
    * 能够重新启动并缓存被破坏的 opcode
    * 文件上传优化支持
    * "慢日志" - 记录脚本
    * 用于在请求完成和刷新数据后，继续在后台执行耗时的工作
    * 动态／静态子进程产生
    * 基本 SAPI 运行状态信息
    * 基于 php.ini 的配置文件
* 安装
* mac配置
    * cp /private/etc/php-fpm.conf.default /private/etc/php-fpm.conf
    * cp /private/etc/php-fpm.d/www.conf.default /private/etc/php-fpm.d/www.conf
    * cd /private/etc
        * vim php-fpm.conf
        * error_log = /usr/local/var/log/php-fpm.log
        * 删除error_log前的;

## PECL
* PECL通过PEAR打包系统来的 PHP 扩展库仓库
* 使用共享扩展库 编译、安装和加载
    * 在extensionPHP 指令加载
    * 用 dl() 函数
* 下载 PECL 扩展库
    * pecl install extname安装包名
        * https://pecl.php.net/ 查询扩展包信息 类似maven
        * 默认安装stable包
        * 安装beta pecl install extname-beta
        * 指定版本 pecl install extname-0.1
    * 通过svn下载
        * svn checkout http://svn.php.net/repository/pecl/extname/trunk extname
    * Windows 编译了大部分的 PECL 扩展（.dll 文件）
* 使用phpize编译为本地扩展包
    * cd extname
    * phpize
    * ./configure
    * make
    * 在php.ini引入 extension=extname.so
* php-config 获取PHP安装信息
  ![858c7bd2f265303ef2e338a6eb05a130.png](evernotecid://BA026592-005A-499F-87F9-6442AACEC50A/appyinxiangcom/23649234/ENResource/p106)
* 将 PECL 扩展库静态编译入 PHP
    * pecl download extname下载扩展库
    * gzip -d < extname.tgz | tar -xvf - 解压扩展库
    * 重新生成配置脚本
        * rm configure 删除配置
        * ./buildconf --force
        * ./configure --help
        * ./configure --with-extname --enable-someotherext --with-foobar
        * make
        * make install

## 运行时配置文件
* 配置文件 php.ini
    * 配置PHP
    * 每个项目下单独配置
* 关于读取
    * 服务器模块版本 仅在启动时读取一次
    * CGI（处理用户请求的PHP独立进程） 每次调用都会读取
    * CLI（命令行接口） 每次调用都会读取
* 指定对应的PHP --with-config-file-scan-dir
* PHP_INI_PERDIR 扫描用户配置文件 默认.user.ini
* user_ini.cache_ttl 重新读取用户配置文件的间隔
  ![80b0cbc261a904718c41d8715110c875.png](evernotecid://BA026592-005A-499F-87F9-6442AACEC50A/appyinxiangcom/23649234/ENResource/p107)
## 修改PHP
* Apache下修改
* 通过 Windows 注册表修改 PHP 配置
* 通过 ini_set() 而在运行时修改某个值

# 语言参考
## 基本语法
### 基本标记
* 起始标记 <?php
* 结束标记 ?>
* echo标记简写  <?=
* 短标记 <? ?> 起始标记不写php
    * 可能会被使用，不建议使用
* 纯PHP代码不需要标记，避免发生错误
### 从HTML中分离
* PHP标记外的语句会被解析器忽略
    * 处于条件中未被标记语句**例外**
* 两条HTML语句取其一
```
<?php if ($expression == true): ?>
  This will show if the expression is true.
<?php else: ?>
  Otherwise this will show.
<?php endif; ?>
```   

### 指令分隔符
* 每一个语句需要分隔符;
* 最后一句默认含有; 不用加
* 可以省略结束标记
    * 使用 include 或者 require 时省略掉会更好
    * 避免空白符
```

<?php
    echo 'This is a test';//使用分号
?>


<?php echo 'This is a test' //省略分号?>

<?php echo 'We omitted the last closing tag';//省略结束符
```
### 注释
* 单行注释
    * // This is a one-line c++ style comment
    * # This is a one-line shell-style comment
* 多行注释
    *  /*
       echo 'This is a test'; /* This comment will cause a problem */
       */ 
     


