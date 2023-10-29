<?php
if(!empty($_GET)){
    if($_GET['weight']!="" && GET['height'!=""]){
    $height=$_GET['height'];
    $weight=$_GET['weight'];
    $bmi=round($weight/($height*$height),2);
    // echo "身高:".$height;
    // echo "體重:".$weight;
    // echo "BMI:".$bmi;
    header("location:bmi.php?w=$weight&h=$height&bmi=$bmi");
}else{
    header("location:bmi.php?m=請輸入合法的身高或體重資訊.");
  }  // echo "請輸入必要的資訊.";
}else{
    header("location:bmi.php?m=請輸入必要的資訊");
}

?>