<?php
sleep(2);
$db=new mysqli("localhost","root","","w1603");//连接数据库
$db->query("set names utf8");//调用,执行数据库语言   查询的语言以utf8 语言发出
?>