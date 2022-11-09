<?php
header('Content-Type:image/svg+xml'); 
define('access', 'get');
include_once("Class/Mysql.class.php");
include_once("Class/Tools.class.php");

$name = $_GET['name'] ? $_GET['name'] : 'demo';  //无名称状态下默认的名称
$theme = $_GET['theme'] ? $_GET['theme'] : 'rule34';  //默认显示主题
$x = 0;
$assets = "https://cdn.jsdelivr.net/gh/1834423612/Moe-counter-PHP@master/";

//设定指定主题图片显示输出大小
switch ($theme) 
{
    case 'gelbooru':
        $width = '68';
        $height = '150';
    break;
        
    case 'gelbooru-h':
        $width = '68';
        $height = '150';
    break;
    
    case 'minecraft':
        $width = '65';
        $height = '75';
    break;

    case 'Tohoku-Kiritan':
        $width = '65';
        $height = '93';
    break;

    default:
        $width = '45';
        $height = '100';
    break;
}

//设定demo演示数据
switch ($name) 
{
    case 'demo':
        $mun = '1234567890';
        $PLACES = 10;
    break;
    
    default:
        if(getData($name, 'select'))
        {
            getData($name, 'update');
            $data = getData($name, 'select');
            $mun = $data['counter'];
        }
        else
        {
            getData($name, 'insert');
            $mun = '1';
        }
        $PLACES = 7;
    break;
}

$str = sprintf("%07d", $mun); //"07"代表显示七位数
$chars = preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY);
$allWidth = $width * $PLACES;
$outSvg = '<?xml version="1.0" encoding="UTF-8"?><svg width="'.$allWidth.'" height="'.$height.'" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>Moe Count</title><g>';
foreach ($chars as $val)
{
    $files = $assets."Theme/".$theme."/$val.gif";
    $outSvg .=  '<image x="'.$x.'" y="0" width="'.$width.'" height="'.$height.'" xlink:href="'.$files.'" />'."\n";
    $x += $width;
}
$outSvg .= '</g></svg>';
echo $outSvg;
