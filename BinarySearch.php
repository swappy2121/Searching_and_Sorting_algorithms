<?php

function binarySearch(Array $numList, $x)
{
	// check for empty array
	if (count($numList) == 0) {
        return false;
    }

	$left = 0;
	$right = count($numList) - 1;

	while ($left <= $right) {
		
		$mid = floor(($left + $right) / 2);

		if($numList[$mid] == $x) {
			return true;
		}

		if ($x < $numList[$mid]) {
			$right = $mid - 1;
		}else {
			$left = $mid + 1;
		}
	}
	
	return false;
}

$numList = array(1, 2, 3, 4, 5);
$value = 5;
if(binarySearch($numList, $value) == true) {
	echo $value." Exists";
}
else {
	echo $value." Doesnt Exist";
}
?>
