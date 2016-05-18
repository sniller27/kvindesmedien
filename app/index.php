<!DOCTYPE html>
<html>
<head>

	<title>Kvindesmedien</title>

	<?php include 'php/head.php'; ?>

</head>
<body class="productscoverimage">

	<div id="wrapper">

		<!-- header -->
		<?php include 'php/header.php'; ?>

			<div class="container whitelayer smalltopbuffer">
				<div class="frontpagecontainer">
					<div class="row">
						<div class="col-md-12">
							<div class="frontpagesemicover">
								<div class="imagetextheader">
									<h2 class="colorwhite nomargin">Velkommen til Kvindesmedien</h2>
									<p class="colorwhite nomargin">Kvindesmedien er specialiseret inden for fremstilling af unika i metal. Her får du unikt og kreativt design for pengene, som du kan tage med hjem. Du er velkommen til at tage et kig på nogle af vores mange kreationer her på hjemmesiden, i webshoppen eller i vores butik på Christiania.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4 col-sm-6 smallbotbuffer">
							<a href="sculptures.php">
								<div class="frontpagebox1 responsiveimg">
									<img src="images/figur.jpg" alt="figur">
									<div class="imagetextsmall1">
										<h2 class="colorwhite nomargin">Se vores mange skulpturer</h2>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 col-sm-6 smallbotbuffer">
							<a href="worktasks.php">
								<div class="frontpagebox1 responsiveimg">
									<img src="images/welding.jpg" alt="smedning">
									<div class="imagetextsmall1">
										<h2 class="colorwhite nomargin">Få lavet dit eget design</h2>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 col-sm-6">
							<a href="products.php">
								<div class="frontpagebox1 responsiveimg">
									<img src="images/hylde.jpg" alt="kommode">
									<div class="imagetextsmall1">
										<h2 class="colorwhite nomargin">Vi har et bredt udvalg</h2>
									</div>
								</div>
							</a>
						</div>

					</div>

					<div class="row frontpageaboutsection">
					    <div class="col-md-6 smallbotbuffer">
					    <h2>Hvem er vi?</h2>
					    <p>Kvindesmedien som også er kendt som Qsmedien er en smedje på Christiania, som tilbyder unikt og spændende metaldesign. Hos Kvindesmedien stræber vi altid efter at levere god kvalitet og spændende design, som vores kunder kan tage med hjem og få glæde af. Vi laver alt fra lysestager, skulpturer, borde, lysestager til folk, der ønsker spændende design men vi varetager også mere almindelige smedeopgaver som smedning af kakkelovne, gelændere, dørhængsler samt specialopgaver.</p>
					    <a href="about.php">Læse mere her...</a>
					    </div>
						<div class="col-md-6 responsiveimg">
					      <img src="images/kvindesmedien.jpg" alt="Kvindesmedien butik">
					    </div>
				    </div>
				</div>
			</div>
			<div class="container">
				<div class="row smallbotbuffer">
				    <div class="col-md-12 newsletterfrontpage">
					    <?php require_once("php/newslettersignup.php"); ?>
				    </div>
				</div>
			</div>
			
		
		<!-- Footer -->
		<?php require_once 'php/footer.php'; ?>
	</div>

<script type="text/javascript" src="js/scripts/validatenewsletterform.js"></script>
</body>
</html>