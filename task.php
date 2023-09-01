<?php
	$data = ["a", "b", "c", "a", "b", "c", "a", "e"];
	$counts = array_count_values($data);

	foreach ($counts as $value => $count) {
		if ($count % 2 !== 0) {
			echo "Data :'$value'<br>";
			echo "count: $count\n<br>";
		}
	}
?>