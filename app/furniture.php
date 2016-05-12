<!DOCTYPE html>
<html>
<head>

	<title>Kvindesmedien</title>

	<?php include 'php/head.php'; ?>

<!-- <script type="text/javascript" src="lib/jquery-1.10.1.min.js"></script> -->
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5">

<style type="text/css">
	.content img {
		width: 100%;
	}
</style>

<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();


		});
	</script>

</head>
<body class="productscoverimage">

	<div id="wrapper">
	
		<!-- header -->
		<?php include 'php/header.php'; ?>


<div class="griddo griddo-pad">
	  <div class="col-1-3">
	    <div class="content">
	    <div class="categorymenu">
	    <h2>Produkter</h2>
	    	<p><a href="tables.php">Borde</a></p>
	    	<p><a href="tables.php">Møbler</a></p>
	    	<p><a href="tables.php">Stager</a></p>
	    	<p><a href="tables.php">Lystræer og lysglober</a></p>
	    	<p><a href="tables.php">Skulpturer</a></p>
	    	<p><a href="tables.php">Haven</a></p>
	    </div>
	    </div><div class="content">
			    <div class="newslettersignup">
			    	<h3>Tilmeld dig vores nyhedsbrev!</h3>
			    	<form>
			    		<input type="text" placeholder="E-mail"></input>
			    		<button class="btn">Tilmeld</button>
			    	</form>
			    </div>
		    </div>
	  </div>

      <div class="col-2-3">

        <div class="content botbuffer">
			        
			        <div class="grid">
					  <div class="grid-sizer"></div>


			 <?php 
    
		    require_once("php/config.php");
		    
		    //SQL query to select all products
		    $sql = "select mainimage 
from products a, productcategory_has_products b
where a.idproduct = b.products_idproduct and
productcategory_idproductcategory = 5";

		    //connects to db
		    $result = $conn->query($sql);
		    //gets data from db and prints out products
		    while($row = $result->fetch_array()){

		    	?>
		    	


					  <div class="grid-item">

						<a class="fancybox" href="<?= $row['mainimage']; ?>" data-fancybox-group="gallery">
					    <img src="<?= $row['mainimage']; ?>">
					    </a>

					  </div>


		    	<?php
		    }
		    ?>

					</div>
			    </div>

      </div>
</div>

	



	<!-- Footer -->
	<div id="footer"></div>

	</div>
  
  <script type="text/javascript" src="http://masonry.desandro.com/masonry.pkgd.js"></script>
  <script type="text/javascript" src="http://imagesloaded.desandro.com/imagesloaded.pkgd.js"></script>
  <script type="text/javascript" src="js/scripts/masonrysettings.js"></script>


</body>
</html>