<?php

echo "DIMAS DWI PRASTIO <br>";
echo "5520117032 <br>";
echo "IF A 2017 <br><br>";
$kanguruA= "  ";
$kanguruB= "  ";

function kanguru($m1,$w1,$m2,$w2){
    echo "kanguru(".$m1.",".$w1.",".$m2.",".$w2.")";
    echo "<br>";
for  ($i=0;$i<4;$i++){
     $m1 += $w1;
     $m2 += $w2;
     @$kanguruA.= $m1. " ";
     @$kanguruB.= $m2. " ";
}
    echo "kanguru Betina"."=" .$kangguruA;
    echo "<br>";
    echo "kanguru Jantan"."=" .$kangguruB;
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