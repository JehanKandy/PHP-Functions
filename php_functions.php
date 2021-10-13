<?php
	function lanka(){
		echo "Sri lanka <br>";
	}
	
	function cal(){
		echo 2 + 3 ."<br>";
	}

	function loop1(){
		$num = 1;
		while ($num <= 10) {
			echo "Number is : $num <br>";
			$num++;
		}
	}

	function loop2(){
		for ($val=0; $val <= 10; $val++) { 
			echo "For loop Number : $val <br>";
		}
	}

lanka();
echo "I am a Srilankan<br>";
lanka();
echo "Cal Addtion <br>";
cal();
echo "While loop <br>";
loop1();
echo "<br>For Loop <br>";
loop2();




?>
