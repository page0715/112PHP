<?php
include_once "./include/connect.php";

$acc=htmlspecialchars(trim($_POST['acc']));

$sql="insert into `users`(`acc`,`pw`,`name`,`email`,`address`) 
                   values('{$acc}','{$_POST['pw']}','{$_POST['name']}','{$_POST['email']}','{$_POST['address']}')";

$pdo->exec($sql);

header("Location:index.php");