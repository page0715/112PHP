<style>
    * {
        font-family: 'Courier New', Courier, monospace;
        /* line-height: 10px; */
    }
</style>
<?php

stars('正三角形',7);
stars('菱形',7);
stars('矩形',7);
stars('矩形對角線',7);

//equilateral_triangle(5);
//equilateral_triangle(9);
//equilateral_triangle(13);
//diamond(5);
//diamond(7);
//diamond(9);
//retangle(5);
//retangle(7);
//retangle(9);

function stars($shape ,$size){
    switch($shape){
        case '正三角形':
            equilateral_triangle($size);
        break;
        case '菱形':
            diamond($size);
        break;
        case '矩形':
            retangle($size);
        break;
        case '矩形對角線':
            retangle_cross($size);
        break;
    }

}

function equilateral_triangle($size){
    for($i=0;$i<$size;$i++){
        for($j=0;$j<($size-1-$i);$j++){
            echo "&nbsp;";
        }
        for($k=0;$k<($i*2+1);$k++){
            echo "*";
        }
        echo "<br>";
    }
}

function diamond($size){
$mid=floor(($size*2 -1)/2);
$tmp=0;
    for($i=0;$i<($size * 2 -1);$i++){

        if($i<=$mid){
            $tmp=$i;
        }else{
            $tmp=$tmp-1;
        }

        for($j=0;$j<($mid-$tmp);$j++){
            echo "&nbsp;";
        }
        for($k=0;$k<($tmp*2+1);$k++){
            echo "*";
        }
        echo "<br>";
    }
}


function retangle($size){
    for($i=0;$i<$size;$i++){

        for($j=0;$j<$size;$j++){
            if($i==0 || $i==($size-1)){
                echo "*";
            }else if($j==0 || $j==($size-1)){
                echo "*";
            }else{
                echo "&nbsp;";
            }
    
        }
        echo "<br>";
    }
}


function retangle_cross($size){
    for($i=0;$i<$size;$i++){

        for($j=0;$j<$size;$j++){
            if($i==0 || $i==($size-1)){
                echo "*";
            }else if($j==0 || $j==($size-1) || $j==$i || $i+$j==($size-1)){
                echo "*";
            }else{
                echo "&nbsp;";
            }
        }
        echo "<br>";
    }
}