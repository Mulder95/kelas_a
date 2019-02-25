<?php

echo "SANDI MAHENDRA <br>";
echo "5520117006 <br>";
echo "IFA A 2017 <br><br>";
$kelinci1= "  ";
$kelinci2= "  ";

function kelinci($m1,$w1,$m2,$w2){
    echo "kelinci(".$m1.",".$w1.",".$m2.",".$w2.")";
    echo "<br>";
for  ($i=0;$i<4;$i++){
     $m1 += $w1;
     $m2 += $w2;
     @$kelinci1.= $m1. " ";
     @$kelinci2.= $m2. " ";
}
    echo "Kelinci Betina"."=" .$kelinci1;
    echo "<br>";
    echo "Kelinci Jantan"."=" .$kelinci2;
    echo "<br>";

if ($m1==$m2){
    echo "<br> YES </br></br>";
} else{
    echo "<br> NO </br>";

    }
}
kelinci (0,3,4,2);
kelinci (0,6,4,8);
?> 