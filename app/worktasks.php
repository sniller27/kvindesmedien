<!DOCTYPE html>
<html lang="da">
<head>

	<title>Kvindesmedien - Smedeopgaver</title>

	<?php include 'php/head.php'; ?>

	<script type="text/javascript" src="plugins/fancybox/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="plugins/fancybox/jquery.fancybox.css?v=2.1.5">
	<script type="text/javascript" src="js/fancyboxcustom.js"></script>

</head>
<body class="productscoverimage">

	<div id="wrapper">
	
		<!-- header -->
		<?php include 'php/header.php'; ?>

		<div class="container smalltopbuffer">
			<div class="row botbuffer">
			<!-- Navigation for about pages -->
			<?php include 'php/aboutnav.php'; ?>

				<!-- Main content -->
      			<div class="col-md-9">
     				<div class="styledheader">
			     		<h2>Smedeopgaver</h2>
			     	</div>
      				<div class="productsdescriptionbox">
      					
      					<!-- Worktasks text -->
      					<p>Udover alt det du finder på de andre sider, laver Kvindesmedien også mange små og store specialopgaver på bestilling, som både er til butiksbesøgende, virksomhedsejere eller folk, der skal have lavet noget. Kvindesmedien designer b.la. inventar til butikker, barer – cafeer – tøjforretninger – samt glober og lystræer til adskillige kirker i Danmark. Nogle af Kvindesmediens specialopgaver fra kunder og virksomheder kan ses herunder.</p>

      					<div class="content">
			        		<div class="grid">
					  			<div class="grid-sizer"></div>


			 <?php 
    		// connects to db
		    require_once("php/config.php");
		    
		    //SQL-query for selecting alternative product images
		    $sql = "select mainimage 
from products a, productcategory_has_products b
where a.idproduct = b.products_idproduct and
productcategory_idproductcategory IN (10,9) order by productcategory_idproductcategory desc LIMIT 31";

		    //executes SQL statement
		    $result = $conn->query($sql);
		    //fetches information from db
		    while($row = $result->fetch_array()){

		    	?>
		    	
					  <div class="grid-item">

						<a class="fancybox" href="<?= $row['mainimage']; ?>" data-fancybox-group="gallery">
					    	<img src="<?= $row['mainimage']; ?>" alt="andet håndværk">
					    </a>

					  </div>

		    	<?php
		    }
		    ?>

							</div>
						</div>
      				</div>
      			</div>
      		</div>
		</div>

	<!-- Footer -->
	<?php require_once 'php/footer.php'; ?>

	</div>
  	
  	<!-- Masonry and Imagesloaded scripts -->
  	<script type="text/javascript" src="http://masonry.desandro.com/masonry.pkgd.js"></script>
	<script type="text/javascript" src="http://imagesloaded.desandro.com/imagesloaded.pkgd.js"></script>
	<script type="text/javascript" src="js/masonrysettings.js"></script>

</body>
</html>