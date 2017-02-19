<?php
//前后台分离
include "db.php";
$result=$db->query("select * from stu");
$array=array();
while($row=$result->fetch_assoc()){
    $array[]=$row;
};
echo json_encode($array);

?>