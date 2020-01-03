<?php
//DivisorMultiple.php 
$a=$argv[1];
$b=$argv[2];
   function	gcd($n, $m){
   if($n==0||$m==0){
       echo "So nhap ko hop le!";
   }
   else{        
       $UCLN=0;
       $min=min($m,$n);
           for($i=1;$i<=$min;$i++){
               if($n%$i==0&&$m%$i==0) $UCLN=$i;
           }
         if($m==$n) $UCLN =$m;
      echo "UCLN la : ".$UCLN."\n";}}
   function lcm($n, $m){
    if($n==0||$m==0){
        echo "So nhap ko hop le!";
    }
    else{
        $BCNN=0;
      $max= max($m,$n);
      do{
        $max++;
        $BCNN=$max;
        if($max%$m==0&&$max%$n==0){
        break;
        }
      }
      while(true);
      if($m==$n) $BCNN=$m;
      echo "BCNN la : ".$BCNN; 
    }   
    }
    function PrintStarts(){
        for($i=0;$i<20;$i++)
          echo "*";
    }
    PrintStarts();  echo"\n";
   gcd($a,$b);
   lcm($a,$b);
   echo "\n";  PrintStarts();  
?>