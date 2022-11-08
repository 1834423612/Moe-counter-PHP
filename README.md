# Moe-counter
一个PHP+Mysql版本的计数器

# 分支有Sqlite版本

![Moe-counter](https://moecount.htloli.com/get/@Moe-counters.github)

本项目是基于 [https://github.com/journey-ad/Moe-counter](https://github.com/journey-ad/Moe-counter) 制作的PHP + Mysql版本

## 使用说明：
- 创建数据库并导入sql文件
- 修改文件 ```Class/Mysql.class.php``` 内的数据库连接信息
- 修改文件 ```Class/Config.class.php``` 内的站点链接

## Nginx伪静态:
```
location / { 
  rewrite ^/get/@(.*)$ /get.php?name=$1 last; 
}
```

Apache伪静态暂无，自行研究谢谢

## Credits

*   [repl.it](https://repl.it/)
*   [moebooru](https://github.com/moebooru/moebooru)
*   rule34.xxx NSFW
*   gelbooru.com NSFW
*   [Icons8](https://icons8.com/icons/set/star)
