<?php

function selectionSort()
{
    $data = array(43,23,4,11,2,88,76,46);
    $n=count($data);
    $nextSwap=null;     //the index of next min value or max value
    $temp=null;
 
    for($i=0; $i<$n-1; $i++)
    {
        $nextSwap=$i;
        for($j=$i+1; $j<$n; $j++)
        {
            if( $data[$j]<$data[$nextSwap] ) //change the < to > for descending order
            {
                $nextSwap=$j; 
            }
        }
 
        //swap the current index of the outer loop with the next min value
        $temp=$data[$i];
        $data[$i]=$data[$nextSwap];
        $data[$nextSwap]=$temp;
    }
 
    print_r ($data);
}

selectionSort();
?>