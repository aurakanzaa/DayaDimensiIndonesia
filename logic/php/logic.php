<?php 

function minSum($arr, $n) 
{ 
	$sum = $arr[0]; 

	for ($i = 1; $i < $n; $i++) { 
		if ($arr[$i] == $arr[$i - 1]) 
		{	 

			$j = $i; 
			while ($j < $n && $arr[$j] 
						<= $arr[$j - 1]) 
			{	 
				$arr[$j] = $arr[$j] + 1; 
				$j++; 
			} 
		} 
		$sum = $sum + $arr[$i]; 
	} 

	return $arr; 
} 

// Driver code 
	$arr = array ( 5,1,2,2,2,2); 
	$n = sizeof($arr) ; 
    echo array_sum(minSum($arr, $n));
    echo "<br>";
    var_export(minSum($arr, $n));

?> 
