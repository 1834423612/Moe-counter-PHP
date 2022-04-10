<?php include_once 'count.php';?>
<?php
$domain = './theme/moebooru'; // 文件目录名
$file_path = 'counter.dat'; // 访问次数存储文件名
$length = 7; // 最大单位为百万 即7位数。可修改
$count = trim(file_get_contents($file_path)); // 读取访问次数
$complete = str_repeat('0' , $length - strlen($count)) . $count; // 自动补全
$imageArray = str_split($complete); // 将字符串分割为字符数组
//$theme  = '';
foreach($imageArray as $key => $value){
	$imageArray[$key] = $domain . '/' . $value . '.png'; // 将数量对应为图片
	echo "<img src='".$domain."/".$value.".png' />";
}

//print_r($imageArray);
