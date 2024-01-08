<!--<?php
require_once('calendar/classes/tc_calendar.php');
?> -->


<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar.php');   ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="datepickr.css" />


<link href="images/grid_style.css" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="images/dhtmlgoodies_calendar.css?random=20051112" media="screen" />
<SCRIPT type="text/javascript" src="images/dhtmlgoodies_calendar.js?random=20060118"></script>

            <!-- Page Content -->
            <div id="page-content">
                <!-- END Breadcrumb -->

                <!-- General Forms Block -->
                <div class="block block-themed block-last">
                    <!-- General Forms Title -->
                    <div class="block-title">
                        <h4>Assign Student 2 Subject</h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
<form name="form1" method="post" action="student_subject_insert.php">
  <table width="200" border="1" align="center">
    
       <tr>
      <td>Subject </td>
      <td><select name="subject_id" id="subject_id">
  	<option>  Select </option>
	
	<?php
	 include('dbconnect.php');
	$sql1="select * from subject_details";
	$res1=mysqli_query($conn,$sql1);
	while($row1=mysqli_fetch_array($res1))
	{
	?>
	
	<option value="<?php echo $row1['subject_id'];  ?>"> <?php echo $row1['subject_name'];  ?>   <?php echo $row1['sem'];  ?>  </option>
	
	<?php
	}
	?>
  
      </select></td>
    </tr>
    <tr>
      <td>Student </td>
      <td><select name="student_id" id="student_id">
  	<option>  Select </option>
	
	<?php
	$sql1="select * from student_details";
	$res1=mysqli_query($conn,$sql1);
	while($row2=mysqli_fetch_array($res1))
	{
	?>
	
	<option value="<?php echo $row2['student_id'];  ?>">   <?php echo $row2['student_name']."".$row2['usn'];  ?>  </option>
	
	<?php
	}
	?>
  
      </select></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><textarea name="description" id="description" class="validate[required]"></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit">
        <input type="reset" name="Reset" value="Reset">
      </div></td>
    </tr>
  </table>
</form>
<script type="text/javascript" src="datepickr.min.js"></script>
		<script type="text/javascript">

			
			new datepickr('datepick2', {
				'dateFormat': 'Y/m/d'
			});
			
		</script>
                    </div>
                    <!-- END General Forms Content -->
                </div>
                <!-- END General Forms Block -->
            </div>
            <!-- END Page Content -->
			
			
<?php include('footer.php');   ?>



























