<?php

echo "FIKRI MUHAMMAD FADHIL <br>";
echo "5520117012 <br>";
echo "IF A 2017 <br><br>";
$kangguruX= "  ";
$kangguruY= "  ";

function kangguru($m1,$w1,$m2,$w2){
    echo "Kangguru(".$m1.",".$w1.",".$m2.",".$w2.")";
    echo "<br>";
for  ($i=0;$i<4;$i++){
     $m1 += $w1;
     $m2 += $w2;
     @$kangguruX.= $m1. " ";
     @$kangguruY.= $m2. " ";
}
    echo "Kangguru Betina"."=" .$kangguruX;
    echo "<br>";
    echo "Kangguru Jantan"."=" .$kangguruY;
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