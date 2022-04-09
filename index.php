<?php include_once 'count.php';?>
<?php
$domain = './theme/moebooru'; //主机名
$file_path = 'counter.dat'; //访客数量存储文件位置
$length = 7; //最大单位为百万 即7位数
$count = trim(file_get_contents($file_path)); //读取文件中的访客数量数字 ，file_path 为访客数量存储文件
$complete = str_repeat('0' , $length - strlen($count)) . $count; //自动补全为有0或没有0的7位数
$imageArray = str_split($complete); //将字符串分割为字符数组
//$theme  = '';
foreach($imageArray as $key => $value){
	$imageArray[$key] = $domain . '/' . $value . '.gif'; //将数量对应为图片
	echo "<img src='".$domain."/".$value.".gif' />";
}

//print_r($imageArray);
