<?php 
  $a=$argv[1];
  $b=$argv[2];
  $c=$argv[3];
  $d=$argv[4];
  
  echo "(".$a."+".$b."i)+(".$c."+".$d."i)= ".($a+$c)."+".($b+$d)."i"."\n";
  echo "(".$a."+".$b."i)*(".$c."+".$d."i)= ".(($a*$c)-($b*$d))."+".(($a*$d)+($b*$c))."i";

?>