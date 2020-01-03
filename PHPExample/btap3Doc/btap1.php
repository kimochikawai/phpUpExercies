<?php 
    
   function CheckNongDoCon($x){

       for($n=0;$n<20;$n++)echo "*";
       echo"\n";
       if($x>40)  echo "Extra strong liquor";
       else if(20<$x&&$x<40)echo "Strong Liquor";
       else if(15<$x&&$x<=20) echo"Liquor";
       else if(12<$x&&$x<=15) echo "Strong vine";
       else if(10.5<$x&&$x<=12) echo "Normal vine";
       else if($x<=10.5) echo"Light vine";
    echo"\n";
       for($n=0;$n<20;$n++){
        echo "*";
    }
   }
   $check=$argv[1];
   CheckNongDoCon($check);
?>