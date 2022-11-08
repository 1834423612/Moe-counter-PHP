# PHP + Mysql网页访客计数器 

<span style="color: #37a1f6; font-weight: bold; font-size: 20px;">升级为sql数据库版！</span><sup style="color: #039429; font-size: 15px; font-weight: bold; background: #f0f0f0">2022.11.7</sup>

![Github-Project](https://count.kjchmc.cn/get/@Github-Project?theme=minecraft)

### 关于

这是一个参考项目 **[Moe-counter](https://github.com/journey-ad/Moe-counter)** 而开发的**PHP版本**的访客计数器。全新改版，多数代码目前使用 **[MCBBC](https://github.com/MCBBC/Moe-counter)**，<del>自己写的太烂全是BUG拿不出手</del>，后续将逐渐替换并优化。这次鸽的时间太久啦(ง •_•)ง

<span style="background: #ffff00; color: #000000b8; font-weight: bold;">查看演示：</span> **[Demo](https://count.kjchmc.cn/)**

### 可选形象

当前版本形象图片均来自项目 **[Moe-counter](https://github.com/journey-ad/Moe-counter)** 。<del>后期条件允许的话会考虑自行创作新形象。</del> 已经尝试制作了一款Minecraft主题的，欢迎来使用！

<details>

<summary>全部主题</summary>

---

#### minecraft <sup style="color: red; font-size: 13px;">NEW!</sup>

![minecraft](https://count.kjchmc.cn/get/@demo?theme=minecraft)

#### asoul

![asoul](https://count.kjchmc.cn/get/@demo?theme=asoul)

#### gelbooru

![gelbooru](https://count.kjchmc.cn/get/@demo?theme=gelbooru)

#### gelbooru-h <sup style="color: red; font-size: 12px; background: #ffff00">NSFW</sup>

![gelbooru-h](https://count.kjchmc.cn/get/@demo?theme=gelbooru-h)

#### moebooru

![moebooru](https://count.kjchmc.cn/get/@demo?theme=moebooru)

#### moebooru-h <sup style="color: red; font-size: 12px; background: #ffff00">NSFW</sup>

![moebooru-h](https://count.kjchmc.cn/get/@demo?theme=moebooru-h)

#### rule34

![rule34](https://count.kjchmc.cn/get/@demo?theme=rule34)

#### Tohoku-Kiritan <sup style="color: red; font-size: 12px; background: #ffff00">NSFW</sup>

![Tohoku-Kiritan](https://count.kjchmc.cn/get/@demo?theme=Tohoku-Kiritan)

</details>

---


## 为什么开发PHP版？

基于 [https://github.com/journey-ad/Moe-counter](https://github.com/journey-ad/Moe-counter) 制作。
通过原作者 `README`中的Demo尝试使用，但经过不同设备的测试发现 长时间之后重新访问会自动重置。
奈何自行部署操作配置过于繁琐，对我这种喜欢“偷懒”的人非常不友好，于是便尝试重写为PHP版本。
<del>奈何PHP技术太菜</del>，项目代码自本次更新后多数使用 MCBBC 大佬的，以及一些自行尝试写的代码。


## 使用说明：
- 创建数据库并导入sql文件
- 修改文件 `Class/Mysql.class.php` 内的数据库连接信息
- 修改文件 `Class/Config.class.php` 内的站点链接


## 伪静态:
<span style="background: #ffff00"><u>Nginx</u>:</span>
```nginx
location / { 
  rewrite ^/get/@(.*)$ /get.php?name=$1 last; 
}
```

<span style="background: #ffff00"><u>Apache</u>:</span>
无需伪静态，直接使用 <del>(应该不会出问题)</del>


## 如需免数据库版请前往LocalStorage分支
免数据库版正在开发中...... 


## 计划更新

* - [ x ] 调用时可直接自定义主题`?theme=xxx`
* - [ x ] 合并多个图片为一个
  

## Credits

*   [repl.it](https://repl.it/)
*   [moebooru](https://github.com/moebooru/moebooru)
*   rule34.xxx NSFW
*   gelbooru.com NSFW
*   [Icons8](https://icons8.com/icons/set/star)

由于本人目前还在上初中，初学php语言，故开发进度可能较慢，代码写的有些烂，请见谅。如果有会php的大佬，欢迎push分支，或提交issue。