<div class="col-md-3">
    <div class="content">
	    <div>
		    <div class="styledheader">
		    	<a href="products.php" <?= $productstwo ?>><h2>Produkter</h2></a>
		    </div>
		    <div class="categorymenu">
		    	<a href="tables.php" <?= $tables ?>>Borde</a>
		    	<a href="furniture.php" <?= $furniture ?>>Møbler</a>
		    	<a href="candlesticks.php" <?= $candlesticks ?>>Stager</a>
		    	<a href="light.php" <?= $light ?>>Lystræer og lysglober</a>
		    	<a href="sculptures.php" <?= $sculptures ?>>Skulpturer</a>
		    	<a href="garden.php" <?= $garden ?>>Haven</a>
	    	</div>
	    </div>
    </div>
	<div class="content topnewsletter">
	    <div class="newslettersignup <?php if(isset($_GET['respond'])){print('respond');}; ?>">
	    <?php
	    	require_once("newslettersignup.php");
	    ?>
	    </div>
    </div>
</div>