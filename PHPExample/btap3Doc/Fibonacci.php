<?php
//   Fibonacci.php
$a=$argv[1];
function loopFibo($n){
    $s1=0;$s2=1;
    $sum=0;
    for($i=1;$i<=$n;$i++){
      $sum=$s1+$s2;
      $s1=$s2;
      $s2=$sum;
    }
    return $s1;
}
function recursiveFibo ($n){
   
    echo "so fibonacci thu ".$n. " = ".loopFibo($n);
} 
recursiveFibo($a)

 
?>