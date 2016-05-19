<!DOCTYPE html>
<html>
<head>

	<title>Kvindesmedien</title>

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
			<!-- productnavigation and newsletter -->
			<?php include 'php/productnav.php'; ?>

				<!-- main conten -->
		      	<div class="col-md-9">
			      	<div class="styledheader">
				      	<h2>Møbler</h2>
				    </div>

				    <!-- furniture text -->
			      	<div class="productsdescriptionbox">
				      	<p>Her ses et lille udvalg af møbler og diverse andet boliginteriør. Alle vores møbler kan laves efter ønske om bestemte mål, materialer osv.
						Derudover hjælper vi gerne med at designe møbler efter idéer.
						Du kan altid henvende dig og få et uforpligtende tilbud.
						</p>

						<div class="content">
					        
					        <div class="grid">
								<div class="grid-sizer"></div>

					 <?php 
		    		
		    		// connect to db
				    require_once("php/config.php");
				    
				    //SQL query for main image furniture
				    $sql = "select mainimage 
		from products a, productcategory_has_products b
		where a.idproduct = b.products_idproduct and
		productcategory_idproductcategory = 5";

				    // executes query
				    $result = $conn->query($sql);
				    // fetches information from db
				    while($row = $result->fetch_array()){

				    	?>
				    	
							  <div class="grid-item">

								<a class="fancybox" href="<?= $row['mainimage']; ?>" data-fancybox-group="gallery">
							    	<img src="<?= $row['mainimage']; ?>" alt="møbel">
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
	<!-- newsletter formvalidation script -->
	<script type="text/javascript" src="js/validatenewsletterform.js"></script>

</body>
</html>