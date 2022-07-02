<?php

function linearSearch($arr, $x)
{
	$n = count($arr);
	for($i=0; $i<$n; $i++)
	{
		if($arr[$i] == $x)
			return $i;
	}
	return -1;
}

$arr = array(2, 3, 4, 10, 40);
$x = 10;

$result = linearSearch($arr, $x);
if($result == -1)
	echo "Element is not present in array";
else
	echo "Element is present at index " ,
		$result;

?>