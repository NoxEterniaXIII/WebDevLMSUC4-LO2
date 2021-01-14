<?php 

	// functions

	function sayHello($name = 'JC ', $time = 'evening'){
		echo "Good $time, $name" . '<br />';
	}

	sayHello();
	sayHello('JC' );
	sayHello('Dayauon ', 'night');

	function formatProduct($product){
		echo "{$product['name']} costs Php.{$product['price']} to buy <br />";
		return "The {$product['name']} costs Php.{$product['price']} to buy <br />";
	}
	
	formatProduct(['name' => 'Jeloppy', 'price' => 10]);

	$formatted = formatProduct(['name' => 'Jeloppy', 'price' => 10]);
	echo $formatted;

?>

<!DOCTYPE html>
<html>
<head>
	<title>UC4L02</title>
</head>
<body>
    <h1>UC4L02 JC Dayauon</h1>
</body>
</html>