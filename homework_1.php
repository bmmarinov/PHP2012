<?php

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

	if(!is_numeric($_GET['number']))
	{
		echo '<font color="#FF0000">' . 'The parameter is not a number.' . '</font><br />';
	}
	else{
		if(($_GET['number'] < 0) || ($_GET['number'] > 19999))
		{
			echo '<font color="#FF0000">' . 'The parameter is not within the range [0,19999].' . '</font><br />';	
		}
		if($_GET['number'] > 0)
		{
			if(isPrime($_GET['number']))	
			{
				echo 'The number ' . $_GET['number'] . ' is prime!' . '<br />';	
			}else{
				echo '<font color="#00FFFF">' . 'The number ' . $_GET['number'] . ' is NOT prime!' . '</font><br />';
			}
		}
		else{
			echo 'Please enter positive integer.';	
		}
	}
	
?>