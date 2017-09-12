<?php

function quickSort(&$arr) {

	qSort($arr,0, count($arr) - 1);
}

function qSort(&$arr,$low,$high) {

	if ($low < $high) {
		$par = partition($arr,$low,$high);
		qSort($arr,$low,$par - 1);
		qSort($arr,$par + 1,$high);
	}
}


function partition(&$arr,$low,$high) {
	
	$pointer = $arr[$low];

	while($low < $high)  {

		while($low < $high && $arr[$high] >= $pointer) {
			$high--;
		}

		$arr[$low] = $arr[$high];

		while($low < $high && $arr[$low] <= $pointer) {
			$low++;
		}

		$arr[$high]	= $arr[$low];

	}

	$arr[$low] = $pointer;

	return $low;
}


$arr = [4, 2, 5, 0, 3, 9, 1, 7, 6, 8];	

quickSort($arr);

print_r(join(",",$arr));