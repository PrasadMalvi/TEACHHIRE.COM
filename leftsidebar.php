<div id="left" class="column">

	  	<div class="block">
		<img src="images/title11.jpg" alt="" width="168" height="42" /><br />
			
			<ul id="navigation">
				<li class="color"><a href="index.php">Home</a></li>
				<li><a href="contact.php">About Us</a></li>
				
				<!-- <li class="color"><a href="job_details.php">Jobs Details</a></li> -->
				<!-- <li><a href="company_details.php">Company Details</a></li> -->
				
				
				</ul>

		</div>
		
		
		<div class="block">
		<img src="images/title1.gif" alt="" width="168" height="42" /><br />

			<ul id="navigation">
<?php
$i=0;
include('dbconnect.php');
$sql="select * from job_category";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res))
{
$i=$i+1;
 if(($i%2)==0) 
 {
?>
		<li><a href="job_details1.php?jb_category=<?php echo $row['jb_category'];  ?>"><?php echo $row['jb_category'];  ?></a></li>				
<?php
}
else
{
?>
<li class="color"><a href="job_details1.php?jb_category=<?php echo $row['jb_category'];  ?>"><?php echo $row['jb_category'];  ?></a></li>

<?php
}
}
?>
				</ul>
			
		</div>
		
	  </div>