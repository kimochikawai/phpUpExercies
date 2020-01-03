<?php 
  $a=$argv[1];
  $b=$argv[2];
  function Compare($x,$y){
   if($x>$y){
       echo "so lon nhat la ".$x."\n";
       echo "so nho nhat la ".$y."\n";
   }
   elseif($x<$y){
    echo "so lon nhat la ".$y."\n";
    echo "so nho nhat la ".$x."\n";
   }
   else echo "Hai so bang nhau";
  }
  Compare($a,$b);
?>