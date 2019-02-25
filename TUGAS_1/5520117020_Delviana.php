<?php
echo "Delviana Nurfitri Maharani <br>";
echo "5520117020<br>";
echo "IF A 2017 <br><br>";
$kangguru1= "  ";
$kangguru2= "  ";
function kangguru($m1,$w1,$m2,$w2){
    echo "Kangguru(".$m1.",".$w1.",".$m2.",".$w2.")";
    echo "<br>";
for  ($i=0;$i<4;$i++){
     $m1 += $w1;
     $m2 += $w2;
     @$kangguru1.= $m1. " ";
     @$kangguru2.= $m2. " ";
}
    echo "Kangguru1"."=" .$kangguru1;
    echo "<br>";
    echo "Kangguru2"."=" .$kangguru2;
    echo "<br>";
if ($m1==$m2){
    echo "<br> YES </br></br>";
} else{
    echo "<br> NO </br>";
    }
}
kangguru (0,3,2,4);
kangguru (0,5,8,7);