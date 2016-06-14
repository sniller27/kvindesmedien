<!DOCTYPE html>
<html lang="da">
<head>

	<title>Kvindesmedien - Lysestager</title>

	<!-- head information -->
	<?php include 'php/head.php'; ?>

	<!-- Fancybox scripts -->
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
			<!-- product navigation and newsletter -->
			<?php include 'php/productnav.php'; ?>

				<!-- main content -->
		      	<div class="col-md-9">
			      	<div class="styledheader">
				    	<h2>Stager</h2>
				    </div>

				    <!-- candlesticks text -->
		      		<div class="productsdescriptionbox">
				      	<p>Dette er et lille udvalg af lysestager.
						Nogle af dem er standard-stager og andre er unika.
						Vi har altid et bredt udvalg af lysestager til salg i vores butik.
						Derudover kan vi altid lave lysestager på bestilling efter ønske om
						mål, udformning osv.</p>

						<div class="content">

							<?php
					        $category = 2;
							include 'php/pagination.php';
					        ?>

					        <div class="grid">
								<div class="grid-sizer"></div>

					 <?php 
		    		//conntect to db
				    require_once("php/config.php");
				    
				    //SQL query for candlesticks main images
				    $sql = "select mainimage 
		from products a, productcategory_has_products b
		where a.idproduct = b.products_idproduct and
		productcategory_idproductcategory = $category LIMIT $interval,$pagelimit";

				    //executes query
				    $result = $conn->query($sql);
				    //fetches information from db
				    while($row = $result->fetch_array()){

				    	?>
				    	
							  <div class="grid-item">

								<a class="fancybox" href="<?= $row['mainimage']; ?>" data-fancybox-group="gallery">
							    	<img src="<?= $row['mainimage']; ?>" alt="stage">
							    </a>

							  </div>

				    	<?php
				    }
				    ?>

							</div>
							<?php
							include 'php/pagination.php';
					        ?>
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
	<!-- Newsletter formvalidation script -->
	<script type="text/javascript" src="js/validatenewsletterform.js"></script>

</body>
</html>