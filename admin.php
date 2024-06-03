<?php 
require "oop-stranky.php";

$instanciaAktualnejStranky = null;

//zachytenie stranky, na ktoru uzivatel klikol
if(array_key_exists('stranka', $_GET)){
	$idStranky = $_GET['stranka'];

	//pomocná premenná vďaka ktorej sa dostaneme do toho objektu, kt. je označený kliknutim
	$instanciaAktualnejStranky = $zoznam[$idStranky];
	}

if(array_key_exists("save", $_POST)){
	$obsah = $_POST["obsah"];
	$instanciaAktualnejStranky->setObsah($obsah);
	
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
		echo "<li>
		<a href='?stranka=$instancia->id'>$instancia->id</a>
		<a href='$instancia->id' target='_blank'>Zobrazit</a>
		</li>";	
	}

	//editačný formulár
	if($instanciaAktualnejStranky != null){
	echo "<h1>Editing page $instanciaAktualnejStranky->id</h1>";
	}
	?>
	<form method="post">
		<textarea name="obsah" cols="80" rows="15">
				
				<?php 
				echo htmlspecialchars($instanciaAktualnejStranky->getObsah()); 
				?>
		</textarea>
			<button name="save">Save</button>

	</form>
	
</body>
</html>