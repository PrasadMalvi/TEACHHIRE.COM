<?php include('header.php');  ?>

<?php include('menu.php');  ?>

	<link href="css/skitter.styles.css" type="text/css" media="all" rel="stylesheet" />
	
	<!-- Skitter JS -->
	<script type="text/javascript" language="javascript" src="js1/jquery-1.6.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="js1/jquery.easing.1.3.js"></script>
	<script type="text/javascript" language="javascript" src="js1/jquery.animate-colors-min.js"></script>
	<script type="text/javascript" language="javascript" src="js1/jquery.skitter.min.js"></script>
	
	<!-- Init Skitter -->
	<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			$('.box_skitter_large').skitter({
				theme: 'clean',
				numbers_align: 'center',
				progressbar: true, 
				dots: true, 
				preview: true
			});
		});
	</script>

	</div>
	
	<div id="container">																																																																																																																																																																											
	  <div id="center" class="column">
	  	
	  	<div id="content">
			
							<div class="box_skitter box_skitter_large">
					<ul>
						<li><a href="#Royal"><img src="images/gal0.jpg" class="cube" /></a></li>
						<li><a href="#Royal"><img src="images/gal1.jpg" class="cube" /></a></li>
						<li><a href="#Royal"><img src="images/gal2.jpg" class="cube" /></a></li>
						<li><a href="#Royal"><img src="images/gal3.jpg" class="block" /></a></li>
						<li><a href="#Royal"><img src="images/gal5.jpg" class="cubeRandom" /></a></li>
											
					</ul>
				</div>

			
			
			<p>Welcome to TEACHHIRE.COM, Indias First Teaching staff Hirng professional network with Thousands of Opportunities for Freshers or Expirienced Candidates.We aspire to create a trusted, caring, inclusive, and transformational experience for each other at Teachhire, and through our platform for every member of the global workforce.We deliver on the promise of helping our customers, candidates, and communities thrive in an ever-changing world.</p>
			
		</div>
	  </div>
	  
	  <?php include('leftsidebar.php');  ?>
	  
	   <?php include('rightsidebar.php');  ?>
	  
	  	   <?php include('footer.php');  ?>
