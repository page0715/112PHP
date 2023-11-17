<?php
//自訂函式
//函式有區域性,不是全域的
// function name($var1,$var2){
// }

$c=20;
function sum($a,$b){
    // global $c;
    // $sum=$a+$b+$c;
    $sum=$a+$b;
    echo "輸入:".$a."、".$b;
    echo "<br>";
    return $sum;
}

$sum=sum(10,20);
echo "總和是:".$sum;
echo "<hr>";
$sum=sum(17,22);
echo "總和是:".$sum;
echo "<hr>";
echo "總和是:".sum(56,77);
echo "<hr>";
echo "總和是:".sum(11,22);





?>
