<?php
$dsn="mysql:host=localhost; charset=utf8; dbname=school";
$pdo=new PDO($dsn,'root','');

// 第一個練習:
// $sql="select * from students";
// $rows=$pdo->query($sql)->fetchall();
// echo "<pre>";
// print_r($rows[0][2]);
// print_r($rows[0]['parents']);
// echo "</pre>";

// 第二個練習 新增資料
// $sql="insert into `dept`(`code`,`name`) values('801','會計科');";
// $pdo->query($sql);

// 第三個練習 修改資料
// $sql="update `dept` set `code`='901',`name`='演藝科' where `dept_id`=11;";
// $pdo->query($sql);

//第四個練習 刪除資料
// $sql="delete from `dept` where `dept_id`='8';";
// $pdo->query($sql);

//第五個練習 CRUD 中的 Select 較安全可以使用 query , 其他三個(inser into,delete,update) 用 exec 回傳結果
// $sql="delete from `dept` where `dept_id`='11';";
// echo $pdo->exec($sql);

//第六個練習 
$sql=" ;";
echo $pdo->exec($sql);






