<?php include('header.php');  ?>

<?php include('menu.php');  ?>

	</div>
	
	<div id="container">																																																																																																																																																																											
	  <div id="center" class="column">
	  	
	  	<div id="content">
			
				
			<div id="about">
				<?php
					$id=$_REQUEST['id'];
					include('dbconnect.php');
					$sql="select * from company_details where cmp_id='$id'";
					$res=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_array($res))
					{
				?>
				<div class="photos">
					<img src="admin/files/<?php echo $row['cmp_logo'];  ?>" alt="" width="227" height="215" /><br />
				</div>
				<div class="description">																																																																																																																																																			
					<p><u><?php echo $row['cmp_name'];   ?></u> </p>
					<p><?php echo $row['cmp_descrip'];   ?></p>
					<p>Address : <?php echo $row['cmp_addr'];   ?></p>
					
					<ul id="features">
						<li class="color"><span>Contact Person Name</span><?php echo $row['contact_person_name'];   ?></li>
						<li><span>Company Phone No</span><?php echo $row['cmp_phone_no'];   ?></li>
						<li class="color"><span>Company Mobile</span><?php echo $row['cmp_mobile'];   ?></li>
						<li><span>Company E-mail </span><?php echo $row['cmp_e_mail_id'];   ?></li>
						<li class="color"><span>Company Website</span><?php echo $row['cmp_website'];   ?></li>
						
					</ul>
					<a href="com_jobs.php?id=<?php echo $row['cmp_id']; ?>"><button>Search For Jobs</button></a>
				</div>
				<?php
				}
				?>
			</div>

		</div>
	  </div>
	  
	  <?php include('leftsidebar.php');  ?>
	  
	   <?php include('rightsidebar.php');  ?>
	  
	  	   <?php include('footer.php');  ?>
