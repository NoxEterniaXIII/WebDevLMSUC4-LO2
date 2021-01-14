<?php 



	function myFunc(){
		$price = 10;
		echo $price;
	}


	function myFuncTwo($age){
		echo $age;
	}



	$name = 'JC';

	function sayHello(){
		global $name;
		$name = 'Dayauon' .'<br>';
		echo "hello $name ";
	}

	sayHello();
	echo $name . '<br>';

	function sayBye(&$name){
		$name = 'Dante' . '<br>';
		echo "bye $name ";
	}

	sayBye($name);
	echo $name;


?>

<!DOCTYPE html>
<html>
<head>
	<title>UC4L02 VScope</title>
</head>
<body>
   <h1>UC4L02 VScope</h1>
</body>
</html>