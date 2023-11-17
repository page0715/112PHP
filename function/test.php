<?php

$tmp1=[];
$tmp2=['aa','bb','cc'];

echo "where ".join(" && ",$tmp1)." order by ....";
echo "<hr>";
echo "where ".join(" && ",$tmp2)." order by ....";

?>