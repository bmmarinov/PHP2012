<!DOCTYPE html>
<html>
<head>
<title>Homework_2_44592</title>
<?php
	$integers_array = range(20, 1000, 37);
	
	function isPrime($testnum){
		$i = 2;
		if($testnum == 2) return true;
		while($i <= sqrt($testnum)){
			if($testnum % $i == 0){
				return false;	
			}
			$i++;
		}
		return true;
	}
	
	function find_3_prime()
	{
		global $integers_array;
		$count = 0;
		foreach($integers_array as $value){
			if(isPrime($value)){
				//echo "Prime: " . $value . ". " . "<br />";
				$count++;	
			}
			if($count == 3){
				echo "Find_3_Prime: " . $value . "<br />";
				break;	
			}
		}
	}
	
	function num_check($num){
		global $integers_array;
		if(in_array($num, $integers_array)){
			echo "The number ". $num . " exists in the array." . "<br />";		
		}else{
			echo "The number " . $num .  " does not exist in the array." . "<br />";	
		}
	}
	
	function check_exists()
	{
		num_check('146');
		num_check('284');
		num_check('871');
	}
	
	function print_array()
	{
		global $integers_array;
		echo "Array: ";
		for($i = 0; $i < sizeof($integers_array); $i++){
			if($i % 9 == 0) { echo "<br />";}
			printf("%d  ", $integers_array[$i]);	
		}
		echo "<br />";
	}
?>
</head>

<body>
	<?php print_array(); ?> <br />
    <?php find_3_prime(); ?> <br />
    <?php check_exists(); ?> <br />
	
</body>
</html>