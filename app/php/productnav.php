<div class="col-1-3">
		    <div class="content">
			    <div class="categorymenu">
			    <h2>Produkter</h2>
			    	<p><a href="tables.php" <?= $tables ?>>Borde</a></p>
			    	<p><a href="tables.php" <?= $furniture ?>>Møbler</a></p>
			    	<p><a href="tables.php" <?= $candlesticks ?>>Stager</a></p>
			    	<p><a href="tables.php" <?= $light ?>>Lystræer og lysglober</a></p>
			    	<p><a href="tables.php" <?= $sculptures ?>>Skulpturer</a></p>
			    	<p><a href="tables.php" <?= $garden ?>>Haven</a></p>
			    </div>
		    </div>
	    	<div class="content">
			    <div class="newslettersignup">
			    	<h3>Tilmeld dig vores nyhedsbrev!</h3>
			    	<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
			    		<input type="email" placeholder="E-mail" name="email" required></input>
			    		<button class="btn">Tilmeld</button>
			    	</form>
			    </div>
		    </div>

		    <?php
		    	if($_SERVER['REQUEST_METHOD'] == 'POST'){

$msg = <<<EOD
<h1>Ordrebekræftelse</h1><br>
<h2>Ordre nummer: 222</h2>
<br>
<br>
<p>heey</p>
<br>
<br>
<br>
<br>
<br>
Tak fordi du handlede hos os
<br>
<br>
Venlig hilsen<br>
Tingfinderen

EOD;

		    		$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) or die('Error: email er ikke gyldig');
		    		//sends mail
    				mail($email, "Tingfinderen.dk", $msg, "MIME-version: 1.0\nContent-type: text/html; charset= UTF-8");
		    	}
		    ?>
</div>