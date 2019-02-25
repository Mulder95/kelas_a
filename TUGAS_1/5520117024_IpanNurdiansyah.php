<?php

echo "Ipan Nurdiansyah <br>";
echo "5520117024 <br>";
echo "IF A 2017 <br><br>";
$kangguruA= "  ";
$kangguruB= "  ";

function kangguru($A1,$B1,$A2,$B2){
    echo "Kangguru(".$A1.",".$B1.",".$A2.",".$B2.")";
    echo "<br>";
for  ($i=0;$i<4;$i++){
     $A1 += $B1;
     $A2 += $B2;
     @$kangguruA.= $A1. " ";
     @$kangguruB.= $A2. " ";
}
    echo "Kangguru A"."=" .$kangguruA;
    echo "<br>";
    echo "Kangguru B"."=" .$kangguruB;
    echo "<br>";

if ($A1==$A2){
    echo "<br> YES </br></br>";
} else{
    echo "<br> NO </br>";

    }
}
kangguru (0,3,4,2);
kangguru (0,7,5,8);
?> 