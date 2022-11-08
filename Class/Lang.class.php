<?php
if (!defined('access') or !access) {
    die('This file cannot be directly accessed.');
}
$file = "Lang/$lang.json";
if(file_exists($file)) {
    $json_string_lang = file_get_contents('Lang/'.$lang.'.json');
    $data_lang = json_decode($json_string_lang, true);
    foreach($data_lang['translate'] as $key => $value){
        $_LANG[$key] = $value;
    }
} else {
    echo "File ".$file." non-existent";
}