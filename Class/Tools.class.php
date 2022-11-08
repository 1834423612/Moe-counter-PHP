<?php
// 禁止直接访问本文件
if (!defined('access') or !access) {
    die('This file cannot be directly accessed.');
}

// 获取数据
function getData($name, $type, $referer = null)
{
    switch ($type) 
    {
        case 'select':
            $selectNameSql = "SELECT * FROM `counter` WHERE `name` = md5('$name')";
            $data = mysqli_fetch_array(connect('counter', $selectNameSql));
            break;
            
        case 'insert':
            $insertNameSql = "INSERT INTO `counter` (`name`, `def_name`, `time`) VALUES (md5('$name'), '$name', now())";
            $data = connect('counter', $insertNameSql);
            break;
            
        case 'update':
            $updateNameSql = "UPDATE `counter` SET `counter` = counter + 1 WHERE `name` = md5('$name')";
            $data = connect('counter', $updateNameSql);
            break;

        default:
            $selectNameSql = "SELECT * FROM `counter` WHERE `name` = md5('$name')";
            $data = mysqli_fetch_array(connect('counter', $selectNameSql));
            break;
    }
    return $data;
}

// 文件转Base64
function fileToBase64($file)
{
    $base64_file = '';
    if(file_exists($file))
    {
        $mime_type= mime_content_type($file);
        $base64_data = base64_encode(file_get_contents($file));
        $base64_file = 'data:'.$mime_type.';base64,'.$base64_data;
    }
    return $base64_file;
}
