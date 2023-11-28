<?php  
//include_once "../include/connect.php";
include_once "../include/db.php";

$acc=$_POST['acc'];
$pw=$_POST['pw'];


//$sql="select * from users where `acc`='$acc' && `pw`='$pw'";
//$sql="select count(*) from users where `acc`='$acc' && `pw`='$pw'";

//$user=$pdo->query($sql)->fetch();
//$user=$pdo->query($sql)->fetchColumn();
//print_r($user);

$res=$User->count(['acc'=>$acc,'pw'=>$pw]);

//if($user['acc']==$acc && $user['pw']==$pw){
if($res){
    $_SESSION['user']=$acc;
    header("location:../index.php");
}else{
    header('location:../login_form.php?error=帳號密碼錯誤');
}


?>