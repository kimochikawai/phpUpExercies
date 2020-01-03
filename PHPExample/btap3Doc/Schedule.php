<?php 
  $a=$argv[1];
  function PrintStarts(){
    for($i=0;$i<20;$i++)
    echo "*";
}

 function printSchedule($n){
   switch($n){
        case 2:
            echo "Thu 2 hoc sang! ";
        break;
        case 3:
            echo "Thu 3 hoc sang !";
        break; 
        case 5:
            echo "Thu 5 hoc sang !";
        break;
        case 4:
            echo "Thu 4 hoc chieu !";
        break;
        case 6:
            echo "Thu 6 hoc chieu !";
        break;
        case 7:
            echo "Thu 7 hoc chieu!";
        break;
      
        }
 }
 PrintStarts();
 echo "\n";
 printSchedule($a);
 echo "\n";
 PrintStarts();
?>