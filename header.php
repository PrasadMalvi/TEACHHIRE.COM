<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>TEACHHIRE.COM</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5">
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<?php
require_once('cal/classes/tc_calendar.php');
?>


<body>
	<div id="header">
		<a href="index.html" class="float"><img src="logo.jpg" alt="" width="200" height="73" /></a>																																																		
	  <form name="form1" action="loc_jobs.php" method="post">
	  <div class="topblock1">
			City:<br /><select name="jb_loc_city" id="jb_loc_city">
			   <?php
	  

	  include('dbconnect.php');
	  $sql="select * from jobs";
	  $res=mysqli_query($conn,$sql);
	  while($row=mysqli_fetch_array($res))
	  {
	  ?>
	 			  
			  <option value="<?php echo $row['jb_city']; ?>"><?php echo $row['jb_city']; ?></option>
		<?php
		}
		?>  
		</select>
		</div>
	  
	  <div class="topblock1">
			State:<br /><select name="jb_loc_state" id="jb_loc_state">
			   <?php
	  

	  include('dbconnect.php');
	  $sql="select * from jobs";
	  $res=mysqli_query($conn,$sql);
	  while($row=mysqli_fetch_array($res))
	  {
	  ?>
	 			  
			  <option value="<?php echo $row['jb_state']; ?>"><?php echo $row['jb_state']; ?></option>
		<?php
		}
		?>  
		</select>
		</div>
	  
  		<div class="topblock1">
			Search For Location:<br />
			<input type="submit" name="Submit" value="Submit">
		</div>
		</form>
