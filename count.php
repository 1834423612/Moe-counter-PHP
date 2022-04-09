<?php
//访问量统计
$max_len = 7; // $max_len : 自定义变量。计数器的最大位数；
$CounterFile = "counter.dat"; //$CounterFile : 自定义变量。计数器存放的文件(路径和文件名)；
if (!file_exists($CounterFile)) { //如果计数器文件不存在
    $counter = 0;
    $cf = fopen($CounterFile, "w"); //打开文件
    fputs($cf, '0'); //初始化计数器
    fclose($cf); //关闭文件
} else { //取回当前计数器的值
    $cf = fopen($CounterFile, "r");
    $counter = trim(fgets($cf, $max_len)); //trim(fgets($cf,$max_len)) : 去除 取出字符串的 两边的空格符
    fclose($cf);
}
$counter++; //计数器加一
$cf = fopen($CounterFile, "w"); //以写入方式打开文件。(函数自带属性，如果不存在则创建)
//fopen($CounterFile,'r') : 以只读方式打开文件。
fputs($cf, $counter); //fputs($cf,”0”) : 把字符“0”写入$cf
//fgets($cf,$max_len) : 从文件中读出指定长度的字符
fclose($cf); //fclose($cf) : 关闭$cf打开的文件
?>