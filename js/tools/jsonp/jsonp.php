<?php
header('Content-type: application/json');
//获取回调函数名
$callbackName = $_GET["callback"];
//json数据
$json_data = '["customername1","customername2"]';
//输出jsonp格式的数据
echo $callbackName."(" . $json_data . ")";
?>
