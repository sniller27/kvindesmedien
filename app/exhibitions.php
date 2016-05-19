<!DOCTYPE html>
<html>
<head>

	<title>Kvindesmedien</title>

	<!-- head information -->
	<?php include 'php/head.php'; ?>

<script type="text/javascript" src="js/scripts/fancyboxcustom.js"></script>

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
						<h2>Udstillinger</h2>
				    </div>
			      	<div class="productsdescriptionbox">
				      	<div class="row">
				      		<!-- Text for exhibitonpage -->
				      		<div class="col-xs-12 col-md-6">
				      			
						      		<p>Vi har løbende udstillinger i/hos forskellige firmaer/kunstforeninger.
									Vi udstiller primært skulpturer og/eller møbelkunst.
									Du kan altid henvende dig om en evt. udstilling og aftale nærmere.</p>

				      		</div>
				      		<div class="col-xs-12 col-md-6 responsiveimg">
				      			<img src="images/exhibition.jpg" alt="udstilling Gelskov Gods">
				      		</div>
				      	</div>
				      	<!-- Exhibition organisations -->
	      				<div class="row botbuffer">
				      		<div class="col-md-12">
				      			<h3>Her et overblik over de organisationer, vi har haft udstillinger med.</h3>
				      		</div>
		      			 <?php 
		    
				    require_once("php/config.php");
				    
				    //SQL-query for organisations logos
				    $sql = "
				    select logourl, name 
				    from exhibitionsites
				    where logourl IS NOT NULL";

				    //executes SQL-query
				    $result = $conn->query($sql);

				    //fetches information from db
				    while($row = $result->fetch_array()){

				    	?>
				    	
							  <div class="col-xs-6 col-sm-3 col-md-3 responsiveimg">

							  	<img src="<?= $row['logourl']; ?>" alt="<?= $row['name']; ?>">

							  </div>

				    	<?php
				    }
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
	<script type="text/javascript" src="js/scripts/masonrysettings.js"></script>

</body>
</html>