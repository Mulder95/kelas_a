<?php

echo "ALI IRPAN <br>";
echo "55 2011 7016 <br>";
echo "IF A 2017 <br><br>";
$kangguruA= "  ";
$kangguruI= "  ";

function kangguru($m1,$w1,$m2,$w2){
    echo "Kangguru(".$m1.",".$w1.",".$m2.",".$w2.")";
    echo "<br>";
for  ($i=0;$i<4;$i++){
     $m1 += $w1;
     $m2 += $w2;
     @$kangguruA.= $m1. " ";
     @$kangguruI.= $m2. " ";
}
    echo "Kangguru Betina"."=" .$kangguruA;
    echo "<br>";
    echo "Kangguru Jantan"."=" .$kangguruI;
    echo "<br>";

if ($m1==$m2){
    echo "<br> YES </br></br>";
} else{
    echo "<br> NO </br>";

    }
}
kangguru (0,3,4,2);
kangguru (0,6,4,8);
?> 