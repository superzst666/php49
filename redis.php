<?php
//连接本地的 Redis 服务
   // $redis = new Redis();
   // $redis->connect('127.0.0.1', 6379);
   // //设置 redis 字符串数据
   // $redis->set("name", "itcast");
   // // 获取存储的数据并输出
   // echo $redis->get("name");


   //连接本地的 Redis 服务
   $redis = new Redis();
   $redis->connect('127.0.0.1', 6379);
   //存储数据到列表中
   $redis->lpush("LA", "php");
   $redis->lpush("LA", ".net");
   $redis->lpush("LA", "c#");
   $redis->lpush("LA", "js");
   $redis->lpush("LA", "css");
   // 获取存储的数据并输出
   $arList = $redis->lrange("LA", 0 ,3);
   print_r($arList);