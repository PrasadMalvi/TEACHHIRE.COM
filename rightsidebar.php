 <div id="right" class="column">
	  
		<div class="rightblock">
			
			
			<div class="blocks">
				<img src="images/top_bg.gif" alt="" width="218" height="12" />
				<div id="news">
					<img src="images/title5.gif" alt="" width="201" height="28" />
					<marquee direction="up" scrollamount="3" height="450px">
					<?php
include('dbconnect.php');
$sql="select * from company_details";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res))
{
?>
					<a href="com_profile.php?id=<?php echo $row['cmp_id'];  ?>"><img src="admin/files/<?php echo $row['cmp_logo'];  ?>" width="180px" height="100px";></a>
					<br/>
					<?php
					}
					?>
					</marquee>
				</div>
				<img src="images/bot_bg.gif" alt="" width="218" height="10" /><br />
			</div>
		</div>
	  </div>
	</div>
