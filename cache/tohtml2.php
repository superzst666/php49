<?php
//抓取动态页面
$url = 'http://localhost/php49/cache/tohtml.php';
//获取页面的数据,整个html页面
$data = file_get_contents($url);
//保存为静态cache缓存文件
$rs = file_put_contents('./cache2.html',$data);
echo $rs;
// var_dump($data);
// echo $data;