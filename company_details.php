<?php include('header.php');  ?>

<?php include('menu.php');  ?>

	</div>
	
	<div id="container">																																																																																																																																																																											
	  <div id="center" class="column">
	  	
	  	<div id="content">
			
			<div class="stuff">
			<?php
			include('dbconnect.php');
			$sql="select * from company_details";
			$res=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($res))
			{
			?>
				<div class="item">
					<img src="admin/files/<?php echo $row['cmp_logo'];  ?>" alt="" width="124" height="90" />
					<a href="index2.html" class="name"><?php echo $row['cmp_name'];   ?></a>
					<span><?php echo $row['cmp_website'];   ?></span>
					<a href="com_profile.php?id=<?php echo $row['cmp_id'];  ?>" class="name">View Details</a>
				</div>
				
			<?php
			}
			?>
		</div>
	  </div>
	  
	  <?php include('leftsidebar.php');  ?>
	  
	   <?php include('rightsidebar.php');  ?>
	  
	  	   <?php include('footer.php');  ?>
