<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算BMI</title>
</head>
<body>
    <h1>計算BMI</h1>
<?php
if(!isset($_GET['bmi'])){

    if(isset($_GET['m'])){
        echo "<span style='color:red'>".$_GET['m']."</span>";
    }
?>

    <form action="calc.php" method="get">
        <div>
            <label for="height">身高(公尺):</label>
            <input type="text" name="height" id="height">
        </div>
        <!--
        體重(公斤)/身高(公尺)的平方
        -->
        <div>
            <label for="pw">體重(公斤):</label>
            <input type="text" name="weight" id="weight">
        </div>
        <div>
            <input type="submit" value="計算BMI">
            <input type="reset" value="重置">
        </div>
    </form>
<?php
}else{
    echo "體重:".$_GET['w']."公斤";
    echo "<BR>";
    echo "身高:".$_GET['h']."公尺";
    echo "<BR>";
    echo "BMI:".$_GET['bmi'];  
    echo "<BR>";

}
?>
</body>
</html>
<?php

?>