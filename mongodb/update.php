<?php
//实例化一个mongo客户端
$connection = new MongoClient();
//选择数据库
$db = $connection->php49;
//修改数据
$rs = $db->goods->update(array('name'=>'huawei03'),array('$set'=>array('price'=>2005)));
var_dump($rs);
