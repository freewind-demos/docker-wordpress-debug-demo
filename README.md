Docker Wordpress Debug Demo
===========================

参看`WordPress-5.3.2/test.php`。

- 打开`WP_DEBUG`相关的几个开关
- 使用`error_log`向日志文件中输出
- throw error也会被记录在日志文件中
- 默认的文件地址是`WordPress-5.3.2/wp-content/debug.log`

```
npm run up
```