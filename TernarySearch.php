<?php

function ternarySearch($left, $right, $searchKey, $listOfNum){
	
    if ($right >= $left)
	{
        	// Find the mid1 and mid2
		$mid1 = (int)($left + $right / 3);
		$mid2 = (int)($right - ($right - $left) / 3);

		// Check if key is present at any mid
		if ($listOfNum[$mid1] == $searchKey)
		{
			return $mid1;
		}
		if ($listOfNum[$mid2] == $searchKey)
		{
			return $mid2;
		}

		// if key is not present in mid then repeating by checking following conditions search operation
		if ($searchKey < $listOfNum[$mid1]){

            return ternarySearch($left, $mid1 - 1,$searchKey, $listOfNum);

		}else if ($searchKey > $listOfNum[$mid2]){

			return ternarySearch($mid2 + 1, $right,$searchKey, $listOfNum);
		}
		else{
            return ternarySearch($mid1 + 1, $mid2 - 1,$searchKey, $listOfNum);
		}
	}

	return -1;
}

// sorted array
$listOfNum = array( 1, 2, 3, 4, 5,6, 7, 8, 9, 10 );

// Starting index
$left = 0;
// length of array
$right = 9;
// Key to be searched in the array
$searchKey = 5;

// Search the key using ternarySearch
$p = ternarySearch($left, $right, $searchKey, $listOfNum);

// Print the result
echo "Index of ", $searchKey,
	" is ", (int)$p, "\n";


?>
