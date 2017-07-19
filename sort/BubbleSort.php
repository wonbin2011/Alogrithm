<?php

function bubbleSort(&$arr) {
	
	if (!is_array($arr))
		return "is not array";
	$i = 0;
	for (;$i < count($arr) - 1;$i++) {
		
		for ($j = $i + 1 ;$j < count($arr);$j++) {
			
			if($arr[$i]  < $arr[$j]) {
				$temp = $arr[$i];
				$arr[$i] = $arr[$j];
				$arr[$j] = $temp;
				
			}
		}
	}
}



$arr = [3,1,4,2,9,6,8,5,7,0];

echo "before sort...". PHP_EOL;
foreach($arr as $item) {
	echo $item .' ';
}

bubbleSort($arr);
echo PHP_EOL;
echo "after sort ...".PHP_EOL;
foreach($arr as $item) {
	echo $item . ' ';
}

