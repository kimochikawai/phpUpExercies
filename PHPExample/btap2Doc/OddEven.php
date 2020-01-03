<?php
$n=$argv[1];
function Odd($x){
   if($x%2==0){
       echo " la so chan!";
   }
   else echo " la so le !!";
}
echo "n = ".$n;
Odd($n);
?>