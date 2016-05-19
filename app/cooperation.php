<!DOCTYPE html>
<html>
<head>

	<title>Kvindesmedien</title>

	<!-- head information -->
	<?php include 'php/head.php'; ?>

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
						<h2>Samarbejde</h2>
					</div>
					<div class="productsdescriptionbox">
		      			<div class="row">
		      				<!-- Cooperation text -->
				      		<div class="col-xs-12 col-md-6">
				      			
						      		<p>Her hos Kvindesmedien holder vi af samarbejde og lave projekter med hinanden. Vi har gennem tidens forløb samarbejdet med en masse forskellige organisationer og virksomheder, hvor begge parter har nydt glæde af samarbejdet. Vi mener, at man med klare forventninger, godt kommunikation og godt teamwork kan komme langt med samarbejde, og vi er derfor altid åbne over for nye.</p>

				      		</div>
				      		<div class="col-xs-12 col-md-6 responsiveimg">
				      			<img src="images/ejerne.jpg" alt="udstilling Gelskov Gods">
				      		</div>
		      			</div>
		      			
		      			<!-- Customers and partner logos -->
		      			<div class="row botbuffer">
				      		<div class="col-md-12">
				      			<h3>Her er et overblik over tidligere kunder og partnere, vi har arbejdet sammen med.</h3>
				      		</div>
		      			 <?php 
		    		
		    		// connect to db
				    require_once("php/config.php");
				    
				    //SQL-query for selecting companylogos
				    $sql = "
				    select logourl, companyname
				    from customercompanies
				    where logourl IS NOT NULL";

				    //executes SQL-query
				    $result = $conn->query($sql);
				    //fetches information from db
				    while($row = $result->fetch_array()){

				    	?>
				    	
							  <div class="col-xs-6 col-sm-3 col-md-3 responsiveimg">

							    <img src="<?= $row['logourl']; ?>" alt="<?= $row['companyname']; ?>">

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