<?php
	$data = ['a','b','c','a','b','c','a','e'];
	$len = count($data);
	$count=0;
	$div = 2/2;
	$mod = 2%2;
	for($i=0;$i<=$len-1;$i++){
		for($j=0;$j<=$len-1;$j++){
			if($data[$i] == $data[$j]){
				$count++;
				if($count%2!==0){
					echo $data[$i]."=";
					echo $count."<br>";
				}
			}else{
			}
		}
		$count = 0;
	}

?>