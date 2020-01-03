<?php
$a=(float)$argv[1];
$b=(float)$argv[2];
$c=(float)$argv[3];
function solve($d,$e,$f){
    $a=(float)$d;
    $b=(float)$e;
    $c=(float)$f;
  //Tinh Delta
  $delta=(float)(($b*$b)-4*($a*$c));
  if($a==0&&$b!=0){
      echo "PT co 1 nghiem : x = ".(-$c/$b);
  }
  elseif(($a+$b+$c)==0&&$a!=0){
     echo "PT co nghiem x1 = 1"."\n"."x2 = ".($c/$a);
  }
  elseif(($a-$b+$c)==0&&$a!=0){
    echo "PT co nghiem x1 = -1"."\n"."x2 = ".(-$c/$a);
  }

  elseif($delta<0){
      echo "PT vo nghiem!";
  }
  elseif($delta=0){
    echo "PT co nghiem kep x1=x2=".(-$b/2*$a);
  }
  else {
      echo "Pt co 2 nghiem phan biet \n";
      echo "x1 = ".(((-$b)+sqrt($delta))/(2*$a)."\n");
      echo "x2 = ".(((-$b)-sqrt($delta))/(2*$a));
    
  }
}
//Quadratic.php
function PrintStarts(){
    for($i=0;$i<20;$i++)
      echo "*";
}
PrintStarts();  echo"\n";
solve($a,$b,$c);
echo"\n";PrintStarts();

?>