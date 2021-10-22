<?php
$row = 10;
for ($j = 0; $j < $row; $j++) {
	for ($i = 0; $i < $row - $j - 1; $i++) {
		echo $space;
	}
	for ($i = 0; $i < $row; $i++) {
		if ($j == 0 || $j == $row - 1) {
			echo $symbol;
		} else {
			if ($i == 0 || $i == $row - 1) {
				echo $symbol;
			} else {
				//top side
				echo "<span style='background:pink'>$topSideSymbol</span>";
			}
		}
	}
	for ($i = 0; $i < $j; $i++) {
		if ($j == 1) {
			echo $symbol;
		} else {
			if ($i == $j - 1) {
				echo $symbol;
			} else {
				//right top side
				echo "<span style='background:lightgreen'>$rightSideSymbol</span>";
			}
		}
	}
	echo "<br>";
}
for ($j = 0; $j < $row; $j++) {
	for ($i = 0; $i < $row; $i++) {
		if ($j == 0) {
			//do nothing
		} else if ($j == $row - 1) {
			echo $symbol;
		} else {
			if ($i == 0 || $i == $row - 1) {
				echo $symbol;
			} else {
				//front side
				echo "<span style='background:lightblue'>$frontSideSymbol</span>";
			}
		}
	}
	if ($j == 0) {

		//do nothing
	} else {
		for ($i = 0; $i < $row - $j - 1; $i++) {
			if ($j == $row - 1 || $j == $row - 2) {
				echo $symbol;
			} else {
				if ($i == $row - $j - 2) {
					echo $symbol;
				} else {
					//right bottom side
					echo "<span style='background:lightgreen'>$rightSideSymbol</span>";
				}
			}
		}
		echo "<br>";
	}
}
