<?php
include "db.php";
$name=$_GET["name"];
$sex=$_GET["sex"];
$age=$_GET["age"];
$classes=$_GET["classes"];
$result=$db->query("insert into stu (name,sex,age,classes) value('','','','')");//添加
echo $db->insert_id;//当前插入的id为多少的
?>