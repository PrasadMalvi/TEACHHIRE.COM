<?php include('header.php');  ?>

<?php include('menu.php');  ?>


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
 $id=$_REQUEST['jb_name'];

?>     
	  <div id="center" class="column">

			<!--
			Start Accordion
		-->
		
		<div id="accordion-container">
			
			<?php
include('dbconnect.php');
$sql="select * from jobs j,job_category jc, company_details cd where j.jb_category_id=jc.jb_category_id and j.cmp_id=cd.cmp_id and j.jb_name='$id'";
//echo $sql;
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res))
{
?>

			<h2 class="accordion-header inactive-header"><?php echo $row['jb_name']; ?>  /  <?php echo $row['jb_category']; ?> </h2>
			<font color="#FF0000" style="font-family:'Times New Roman', Times, serif " size="+1">Company : <?php echo $row['cmp_name']; ?></font>
			<div style="width: 436px; display: none;" class="accordion-content">
				<p class="first-p"><?php echo $row['jb_descrip']; ?></p>
				<p class="first-p">Interview Date : <?php echo $row['jb_interview_date']; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				 Eligibility : <?php echo $row['eligibility']; ?></p>
				<p class="first-p">No Of Posts : <?php echo $row['num_posts']; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				 Last Date For Application : <?php echo $row['last_date_app']; ?></p>
				<p class="first-p"><a href="logs.php">Login</a>/<a href="candidate_register.php">Register</a> &nbsp; To apply</p>
				
			</div>

<?php
}
?>			
		</div>
		
		<!--
			End Accordion
		-->
			
		
	  </div>
	  
	  <?php include('leftsidebar.php');  ?>
	  
	   <?php include('rightsidebar.php');  ?>
	  
	  	   <?php include('footer.php');  ?>
