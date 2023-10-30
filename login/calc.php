<?php

use function PHPSTORM_META\type;

if(!empty($_GET)){

    if($_GET['weight']!="" &&  $_GET['height']!=""){
        $weight=$_GET['weight'];
        $height=$_GET['height'];

        $bmi=round($weight/($height*$height),2);
        header("location:bmi.php?w=$weight&h=$height&bmi=$bmi");
       
    }else{
        header("location:bmi.php?m=請輸入合法的身高或體資訊");
    }
/*     echo "體重:".$weight;
    echo "身高:".$height;
    echo "BMI:".$bmi; */

}else{  

    header("location:bmi.php?m=請輸入必要的資訊");

}




?>