<?php
 $h=array();
 $h[0]=$argv[1];
 $h[1]=$argv[2];
 $h[2]=$argv[3];
 $h[3]=$argv[4];
$sum=0;
$dem=0;
function PrintStarts(){
    for($i=0;$i<20;$i++)
    echo "*";
}
PrintStarts();
echo "\n";
    for($i=0;$i<4;$i++){
  $sum+= $h[$i];
    if($h[$i]%2!=0) $dem++;
}
echo "Tong la ".$sum."\n";
echo "Co ".$dem." so le";
echo "\n";
PrintStarts();


?>