<?php include('header.php');  ?>

<?php include('menu.php');  ?>

	</div>
	<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
}
-->
    </style>
	
	
	<div id="container">																																																																																																																																																																											
	  <div id="center" class="column">
	  	
	  	<div id="content">
			<h2>Company Recruited Details</h2>
			<p>&nbsp;
</p><div class="stuff">
			
			<table width="505" border="1">
              <tr>
                <td width="60"><span class="style1">Sl No </span></td>
                <td width="172"><span class="style1">Company Name </span></td>
                <td width="251"><span class="style1">Recruited Candidates </span></td>
              </tr>
			  <?php
			include('dbconnect.php');
			$sl=0;
			$sql="select * from company_details";
			$res=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($res))
			{
			$cid=$row['cmp_id'];
			$sql2="select count(cmp_id) from job_application where cmp_id='$cid'  and status='Recruited'";
			$res2=mysqli_query($conn,$sql2);
			$row2=mysqli_fetch_array($res2);
			$sl=$sl+1;
			$tot_comp=$row2[0];
			?>
              <tr>
                <td height="30"><strong>&nbsp;<?php echo $sl;?></strong></td>
                <td><strong>&nbsp;<?php echo $row['cmp_name'];?></strong></td>
                <td><strong>&nbsp;<font color="#990000"><?php echo $tot_comp;?></font></strong></td>
              </tr>
            
			<?php
			}
			?>
			</table>
				
				
			
		</div>
		</div>
	  </div>
	  
	  <?php include('leftsidebar.php');  ?>
	  
	   <?php include('rightsidebar.php');  ?>
	  
	  	   <?php include('footer.php');  ?>
