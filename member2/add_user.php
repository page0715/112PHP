<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');
$acc=htmlspecialchars(trim($_POST['acc']));
$pw=htmlspecialchars(trim($_POST['pw']));
$name=htmlspecialchars(trim($_POST['name']));
$email=htmlspecialchars(trim($_POST['email']));
$address=htmlspecialchars(trim($_POST['address']));


$sql="insert into `users`(`acc`,`pw`,`name`,`email`,`address`)
        values('{$_POST['acc']}','{$_POST['pw']}','{$_POST['name']}','{$_POST['email']}','{$_POST['address']}');";

$pdo->exec($sql);
        
header("Location:index.php");


