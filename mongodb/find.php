<?php
//实例化一个mongo客户端
$connection = new MongoClient("mongodb://root:root@localhost:27017");
// $connection = new MongoClient();
//选择数据库
$db = $connection->php49;
//查询数据
$rs = $db->goods->find(array('name'=>'huawei03'));
//var_dump($rs);
//遍历循环处理
foreach ($rs as $key => $value) {
	# var_dump($value)
	echo 'name : '.$value['name'].'<br />';
	echo 'price : '.$value['price'].'<br />';
	echo 'weight : '.$value['weight'].'<br />';
	echo "<br />";

}			