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

if(array_key_exists("logout", $_POST)){
	header("Location: ./login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Administrácia</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
	<main class="admin">
		<div class="container">
			<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
				<p>Logged user : admin </p>
					<form method="post">
						<button type="submit" class="btn btn-outline-primary" name="logout">Log out</button>
					</form>
			</header>
		
	<?php 
	//vypis vsetkych stranok, ktoré sa daju editovat
	echo '<ul class="list-group" id="stranky">';
	foreach($zoznam as $stranka => $instancia){
	$active = '';
	$buttonClass = 'btn-primary';
	
	if($instancia == $instanciaAktualnejStranky){
		$active = 'active';
		$buttonClass = 'btn-secondary';
	}
		
		// pridanie si do url idčko stranky vdaka comu viem na ktoru stranku sa kliklo
		echo "<li class='list-group-item $active'>
		<a href='?stranka=$instancia->id' class='btn $buttonClass'><i class='fa-solid fa-pen-to-square'></i></a>
		<a href='$instancia->id' target='_blank' class='btn $buttonClass'><i class='fa-solid fa-eye'></i></a>
		<span>$instancia->id</span>
		</li>";	
	}
	echo '</ul>';

	//editačný formulár
	if($instanciaAktualnejStranky != null){
	echo "<div class='alert alert-secondary' role='alert'><h1>Editing page $instanciaAktualnejStranky->id</h1></div>";
	}
	?>
	<form method="post">
		<textarea name="obsah" cols="80" rows="15" id="obsah">
				
				<?php 
				echo htmlspecialchars($instanciaAktualnejStranky->getObsah()); 
				?>
		</textarea>
			<button name="save" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i></button>

	</form>
	<script src="./vendor/tinymce/tinymce/tinymce.min.js"></script>
	<script type="text/javascript">
            tinymce.init({
                selector: '#obsah',
				language: 'cs',
                language_url: '<?php echo dirname($_SERVER["PHP_SELF"]); ?>/vendor/tweeb/tinymce-i18n/langs/cs.js',
				height: '50vh',
				entity_encoding: "raw",
				verify_html: false,
				content_css: [
                        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css',
                    ],
            });
            </script>
	</main>
	</div>
	
</body>
</html>