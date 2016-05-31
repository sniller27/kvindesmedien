<!DOCTYPE html>
<html lang="da">
<head>

	<title>Kvindesmedien - Haven</title>

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
			<!-- Productnavigation and newsletter -->
			<?php include 'php/productnav.php'; ?>

				<!-- Main content -->
		    	<div class="col-md-9">
		      		<div class="styledheader">
			      		<h2>Haven</h2>
			    	</div>
			    	<!-- text for garden page -->
		      		<div class="productsdescriptionbox">
				      	<p>Vi laver alle mulige forskellige ting til haver o. lign.
						Blomsterespaliéer, franske altaner, altankasser, krukker,
						div. indhegning, havelåger, grill, møbler osv.
						Du kan henvende dig og få et tilbud på dine ønsker.</p>

						<div class="content">
					        <div class="grid">
								<div class="grid-sizer"></div>

					 <?php 
		    		// connects to db
				    require_once("php/config.php");
				    
				    //SQL-query for garden main images
				    $sql = "select mainimage 
		from products a, productcategory_has_products b
		where a.idproduct = b.products_idproduct and
		productcategory_idproductcategory = 6";

				    //executes query
				    $result = $conn->query($sql);
				    //fetching information from db
				    while($row = $result->fetch_array()){

				    	?>
				    	
							  <div class="grid-item">

								<a class="fancybox" href="<?= $row['mainimage']; ?>" data-fancybox-group="gallery">
							    	<img src="<?= $row['mainimage']; ?>" alt="håndværk til haven">
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
	<!-- Newsletter formvalidation script -->
	<script type="text/javascript" src="js/validatenewsletterform.js"></script>

</body>
</html>