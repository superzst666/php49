<?php
//判断文件是否存在，并且是否过期
$filename = './cache.html';
if(file_exists($filename) && (time()-filemtime($filename)) < 3600*6){
  //如果文件存在，并且没有过期，那么我们读取缓存文件，并输出
  $html_cache = file_get_contents($filename);
  echo $html_cache;
}else{
  //php输出header头
  header('content-type:text/html;charset=utf-8');
  //连接数据库
  $conn =  @mysql_connect('localhost','root','root');
  //设置数据字符集
  mysql_query('set names utf8');
  //选择数据库
  mysql_query('use php49');
  //组合sql语句
  $sql = "select * from mobile where mobile < 1503529 and mobile > 1503500";
  $res = mysql_query($sql);
  // var_dump($res);
  // die();
//   //开启ob缓存
  ob_start();
  echo '<html>';
  while ($row=mysql_fetch_assoc($res)) {
    echo $row['id'].'-------'.$row['mobile'].'-------'.$row['sp'].'--------'.$row['city'].'<br />';
  }
  echo '</html>';
// //   //获取ob缓存的数据
  $obData = ob_get_contents();
  //存文件
  file_put_contents($filename, $obData);
}
