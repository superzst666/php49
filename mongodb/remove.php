<?php
//实例化一个mongo客户端
$connection = new MongoClient();
//选择数据库
$db = $connection->php49;
//删除数据
$rs = $db->goods->remove(array('name'=>'redhat'));
var_dump($rs);
