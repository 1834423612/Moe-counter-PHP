# PHP版网页访客计数器

### 关于

这是一个参考项目 **[Moe-counter](https://github.com/journey-ad/Moe-counter)** 而开发的**PHP版本**的访客计数器。部分代码来源于网络。

###### 查看演示：[Demo](http://count.kjchmc.cn/)

### 可选形象

当前版本形象图片均来自项目 **[Moe-counter](https://github.com/journey-ad/Moe-counter)** 。后期条件允许的话会考虑自行创作新形象。

<details>

<summary>全部主题</summary>

---
  
#### asoul

![asoul.png](https://cdn.jsdelivr.net/gh/1834423612/Moe-counter-PHP@master/screenshots/asoul.png)

#### gelbooru

![gelbooru.png](https://cdn.jsdelivr.net/gh/1834423612/Moe-counter-PHP@master/screenshots/gelbooru.png)

#### moebooru

![moebooru.png](https://cdn.jsdelivr.net/gh/1834423612/Moe-counter-PHP@master/screenshots/moebooru.png)

#### rule34

![rule34.png](https://cdn.jsdelivr.net/gh/1834423612/Moe-counter-PHP@master/screenshots/rule34.png)

#### gelbooru-h

请自行前往`\theme\gelbooru-h`查看

#### moebooru-h

请自行前往`\theme\moebooru-h`查看

</details>

---



## 为什么开发PHP版？

看到了原作者 **[jad](https://github.com/journey-ad/)** 的项目以及`README`中的Demo尝试使用，但经过不同设备的测试发现 长时间之后重新访问会自动重置。奈何自行部署操作配置过于繁琐，对我这种喜欢“偷懒”的人非常不友好，于是便尝试重写为PHP版本。

## 如何使用？

由于初代版本的局限性，您需要将本组件使用在`.php`后缀的网页里嵌入代码：

```
<?php include('index.php');?>
```

## 已知问题

访问`index.php`时会输出多张图片导致无法通过`<img src="index.php" />`的形式调用。

## 计划更新

* - [ ] 调用时可直接自定义主题`?theme=xxx`
* - [ ] 合并多个图片为一个

由于本人目前还在上初中，初学php语言，故开发进度可能较慢，代码写的有些烂，请见谅。如果有会php的大佬，欢迎push分支，或提交issue。
