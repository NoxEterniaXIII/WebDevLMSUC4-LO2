<?php 

	// continue and break //
	
	$products = [
		['name' => 'Sticky Mucus', 'price' => 20],
		['name' => 'Hydra Card', 'price' => 99],
		['name' => 'Jelopy', 'price' => 15],
		['name' => 'Hard Shell', 'price' => 5],
		['name' => 'Rainbow Carrot', 'price' => 40],
		['name' => 'Heavens', 'price' => 2]
	];

	foreach($products as $product){

		if($product['name'] === 'Jelopy'){
			break;
		}

		if($product['price'] > 15){
			continue;
		}

		echo $product['name'] . '<br />';

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>UC4L02 </title>
</head>
<body>
    <h1>UC4LO2 JC Dayauon</h1>
</body>
</html>