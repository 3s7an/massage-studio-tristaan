<?php 
require "oop-stranky.php";

$instanciaAktualnejStranky = null;

//zachytenie stranky, na ktoru uzivatel klikol
if(array_key_exists('stranka', $_GET)){
	$idStranky = $_GET['stranka'];

	//pomocná premenná vďaka ktorej sa dostaneme do toho objektu, kt. je označený kliknutim
	$instanciaAktualnejStranky = $zoznam[$idStranky];
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Administrácia</title>
</head>
<body>
	<?php 
	//vypis vsetkych stranok, ktoré sa daju editovat
	foreach($zoznam as $stranka => $instancia){
	
		
		// pridanie si do url idčko stranky vdaka comu viem na ktoru stranku sa kliklo
		echo "<li><a href='?stranka=$instancia->id'>$instancia->id</a></li>";	
	}

	?>
	
</body>
</html>