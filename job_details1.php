<!DOCTYPE html>
<html>
  <head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>TEACHHIRE.COM</title>

    <!-- slider stylesheet -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"
    />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css2/bootstrap.css" />

    <!-- fonts style -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins|Raleway:400,600|Righteous&display=swap"
      rel="stylesheet"
    />
    <!-- Custom styles for this template -->
    <link href="css2/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css2/responsive.css" rel="stylesheet" />
  </head>

  <body>
    <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.php">
              <span>
                TEACHHIRE.COM
              </span>
            </a>

            <div class="navbar-collapse" id="">
              <div
                class="d-none d-lg-flex ml-auto flex-column flex-lg-row align-items-center mt-3">
               
                <ul class="navbar-nav  mr-5">
                  <li class="nav-item mr-5">
                    <a class="nav-link" href="logs.php">
                     
                    </a>
                  </li>
                </ul>
				 <ul class="navbar-nav  mr-5">
                  <li class="nav-item mr-5">
                    <a class="nav-link" href="candidate_register.php">
                  
                    </a>
                  </li>
                </ul>
              </div>

              <div class="custom_menu-btn">
                <button onclick="openNav()">
                  <span class="s-1"> </span>
                  <span class="s-2"> </span>
                  <span class="s-3"> </span>
                </button>
              </div>
              <div id="myNav" class="overlay">
                <div class="overlay-content">
                  <h1>Stay Hungry Stay Foolish</h1>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- end header section -->
	<script src="Vallenato%201.0%20-%20A%20Simple%20JQuery%20Accordion_files/ga.js" async="" type="text/javascript"></script><script src="Vallenato%201.0%20-%20A%20Simple%20JQuery%20Accordion_files/jquery-1.js" type="text/javascript" charset="utf-8"></script>
	
	<script src="Vallenato%201.0%20-%20A%20Simple%20JQuery%20Accordion_files/vallenato.js" type="text/javascript" charset="utf-8"></script>
	
	
	<link rel="stylesheet" href="Vallenato%201.0%20-%20A%20Simple%20JQuery%20Accordion_files/vallenato.css" type="text/css" media="screen" charset="utf-8">
	
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-5390553-2']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
	


	</div>
	
	<div id="container">																																																																																																																																																																				

         <?php
 $id=$_REQUEST['jb_category'];

?>     
	  <div id="center" class="column">
	  		  	<div id="content">
			
			<p> <form action="job_details1.php">
		  Job Category : 
		    <input name="jb_category" type="text" id="jb_category">
	        <input type="submit" name="Submit" value="Submit">

					
		</form></p>
			
		</div>

				
		<br/><br/><br/><br/><br/>

			<!--
			Start Accordion
		-->
		
		<div id="accordion-container">
			
		
			
			<?php
include('dbconnect.php');
$sql="select * from jobs j,job_category jc, company_details cd where j.jb_category_id=jc.jb_category_id and j.cmp_id=cd.cmp_id and jc.jb_category='$id'";
//echo $sql;
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res))
{
?>

			<h2 class="accordion-header inactive-header"><?php echo $row['jb_name']; ?>  /  <?php echo $row['jb_category']; ?>  
			</h2>
			
			<div style="width: 436px; display: none;" class="accordion-content">
			<font color="#FF0000" style="font-family:'Times New Roman', Times, serif " size="+1">Company : <?php echo $row['cmp_name']; ?></font>
				<p class="first-p"><?php echo $row['jb_descrip']; ?></p>
				<p class="first-p">Interview Date : <?php echo $row['jb_interview_date']; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				 Eligibility : <?php echo $row['eligibility']; ?></p>
				<p class="first-p">No Of Posts : <?php echo $row['num_posts']; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				 Last Date For Application : <?php echo $row['last_date_app']; ?></p>
				<p class="first-p"><a href="logs1.php?jid=<?php echo $row["jb_opening_id"]; ?>"">Login</a>/<a href="candidate_register.php">Register</a> &nbsp; To apply</p>
				
			</div>

<?php
}
?>			
		<br /></p>
			
		</div>
	  </div>
	   <section class="container-fluid footer_section">
      <p>
        &copy; 2022 All Rights Reserved. Design & Developed By
        <a href="#">Prasad Malvi</a>
      </p>
    </section>
    <!-- footer section -->

    <script type="text/javascript" src="js3/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js3/bootstrap.js"></script>

    <script>
      function openNav() {
        document.getElementById("myNav").classList.toggle("menu_width");
        document
          .querySelector(".custom_menu-btn")
          .classList.toggle("menu_btn-style");
      }
    </script>
	</div>
	</div>
	</div>
  </body>
</html>
