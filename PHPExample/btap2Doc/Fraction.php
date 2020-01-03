<?php
$a=$argv[1];
$b=$argv[2];
$c=$argv[3];
$d=$argv[4];
function tong($a,$b,$c,$d){
     $t=($a*$d)+($b*$c);
     $m=($b*$d);
     echo $t."/".$m; 
}
function hieu($a,$b,$c,$d){
    $t=($a*$d)-($b*$c);
    $m=($b*$d);
    echo $t."/".$m;
}
function tich($a,$b,$c,$d){
    $t=($a*$c);
    $m=($b*$d);
echo $t."/".$m;
}
function thuong($a,$b,$c,$d){
    $t=($a*$d);
    $m=($b*$c);
    echo $t."/".$m;
}


echo $a."/".$b." + ".$c."/".$d." = ";
tong($a,$b,$c,$d);
echo "\n".$a."/".$b." - ".$c."/".$d." = ";
hieu($a,$b,$c,$d);
echo "\n".$a."/".$b." * ".$c."/".$d." = ";
tich($a,$b,$c,$d);
echo "\n".$a."/".$b." / ".$c."/".$d." = ";
thuong($a,$b,$c,$d);
?>