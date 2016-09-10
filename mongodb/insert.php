<?php 
//实例化一个mongo客户端
$connection = new MongoClient();
//选择数据库
$db = $connection -> php49;
//插入一个数据
$rs = $db->goods->insert(array('name'=>'redhat','msg'=>'i will go to nainai home'));
var_dump($rs);



