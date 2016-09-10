<?php
ob_start();    //开启ob缓存区
echo 'hello';
echo '<br />';
// header("Content-Type:text/html;charset=utf-8");
echo 'world';
echo '<br />';
// ob_clean(); //清除缓存，不关闭
echo 'aaa';//上面虽然清除了缓存，但是这还能输出
echo 'bbb';
echo ob_get_contents();//得到缓存区里的数据

