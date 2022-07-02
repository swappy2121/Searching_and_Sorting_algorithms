<?php
function bubbleSort() {

    $num = array(9, 2, 4, 8, 1); 
    $lenOfArr  = count($num);
    
    for($i = 0; $i<$lenOfArr-1; $i++) {
        for($j = 0; $j<$lenOfArr-$i-1; $j++) { 
           if($num[$j] > $num[$j+1]) {
              $temp = $num[$j+1];
              $num[$j+1] = $num[$j];
              $num[$j]   = $temp;
         }
     }
 }

 echo "After Sorting \n";

 for($i=0; $i<$lenOfArr; $i++) {
     echo $num[$i]."\n";
 }
}

bubbleSort();

?>