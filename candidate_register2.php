<?php include('header.php');  ?>
<link href="cal/calendar.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="cal/calendar.js"></script>


<?php include('menu.php');  ?>

	</div>
	
	<div id="container">																																																																																																																																																																											
	  <div id="center" class="column">
	  	
	  	<div id="content">
			
			<p><style>
	a, A:link, a:visited, a:active
		{color: #0000aa; text-decoration: none; font-family: Tahoma, Verdana; font-size: 11px}
	A:hover
		{color: #ff0000; text-decoration: none; font-family: Tahoma, Verdana; font-size: 11px}
	p, tr, td, ul, li
		{color: #000000; font-family: Tahoma, Verdana; font-size: 11px}
	th
		{background: #DBEAF5; color: #000000;}
	.header1, h1
		{color: #ffffff; background: #4682B4; font-weight: bold; font-family: Tahoma, Verdana; font-size: 13px; margin: 0px; padding-left: 2px; height: 21px}
	.header2, h2
		{color: #000000; background: #DBEAF5; font-weight: bold; font-family: Tahoma, Verdana; font-size: 12px;}
	.intd
		{color: #000000; font-family: Tahoma, Verdana; font-size: 11px; padding-left: 15px;}
	.wcell
		{background: #FFFFFF; vertical-align: top}
	.ctrl
		{font-family: Tahoma, Verdana, sans-serif; font-size: 12px; width: 100%;}
	.btnform
		{border: 0px; font-family: tahoma, verdana; font-size: 12px; background-color: #DBEAF5; width: 100%; height:18px; text-align: center; cursor: hand;}
	.btn
		{background-color: #DBEAF5; padding: 0px;}
	textarea, select,input
		{font: 9px Verdana, arial, helvetica, sans-serif; background-color: #DBEAF5;}
		
	/* classes for validator */
	.tfvHighlight
		{font-weight: bold; color: red;}
	.tfvNormal
		{font-weight: normal;	color: black;}
</style>
<link rel="stylesheet" href="js/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/jquery.validationEngine-en.js" type="text/javascript"></script>
		<script src="js/jquery.validationEngine.js" type="text/javascript"></script>
		
		<script>	
		$(document).ready(function() {
			$("#formID").validationEngine()
		});
	</script>
                        

<?php include_once("dbconnect.php");?>
<?php
		$jsid=$_REQUEST["jsid"];
		$sql_js="select * from job_seeker where js_id='$jsid'";
		$res_js=mysqli_query($conn,$sql_js);
		$row_js=mysqli_fetch_array($res_js);
		?>
                        
<form action="savexpd.php" method="post" name="registration" onsubmit="return v.exec()" name="formID" id="formID">
<input name="jsid" type="hidden" id="jsid" value="<?php echo $jsid; ?>">
<table cellpadding="0" cellspacing="0" border="0" width="600" align="center">
<tr>
	<td bgcolor="#4682B4" width="10"><img src="img/pixel.gif" width="10" height="1" border="0"></td>
	<td class="header1" nowrap>Experience Details of <?php  echo $row_js['js_fname']." ".$row_js['js_mname']." ".$row_js['js_lname']; ?><img src="img/pixel.gif" width="10" height="1" border="0"></td>
	<td><img src="img/formtab_r.gif" width="10" height="21" border="0"></td>
	<td background="img/line_t.gif" width="100%">&nbsp;</td>
	<td background="img/line_t.gif"><img src="img/pixel.gif" width="10" height="1" border="0"></td>
</tr>
<tr>
	<td background="img/line_l.gif"><img src="img/pixel.gif" border="0"></td>
	<td colspan="3">
	<img src="img/pixel.gif" width="1" height="10" border="0"><br>
	<div align="center"
	 id="error_registration" style="display: block;"></div>
	<table cellpadding="0" cellspacing="0" border="0" width="100%"><tr><td bgcolor="#DBEAF5">
		<table cellspacing="1" cellpadding="2" border="0" width="100%" id="tab1">
       
		<tr bgcolor="#ffffff">
			<td id="t_first_name" width="20%" colspan="2">&nbsp;Experience:</td>
			<td width="32%" colspan="2"><input type="text" name="exp_name" size="10" class="ctrl validate[required]"></td>
			<td id="t_last_name" width="16%">&nbsp; Description:</td>
			<td width="32%" colspan="2"><input type="text" name="exp_desc" size="10" class="ctrl validate[required]"></td>
		</tr>
		
		<tr bgcolor="#ffffff"> 
			
			<td class="2" id="t_experience" >&nbsp; From Date:</td>
			<td colspan="6" >                    <?php
					  $myCalendar = new tc_calendar("from_date", true);
					  $myCalendar->setIcon("cal/images/iconCalendar.gif");
					  $myCalendar->setDate(date('Y'), date('m'),date('d'));
					  $myCalendar->setPath("cal/");
					  $myCalendar->setYearInterval(1950, 2020);
					  $myCalendar->dateAllow('1950-01-01', '2020-03-01');
					  //$myCalendar->setHeight(350);
					  //$myCalendar->autoSubmit(true, "form1");
					 // $myCalendar->setSpecificDate(array("2011-04-01", "2011-04-13", "2011-04-25"), 0, 'month');
					  $myCalendar->setOnChange("myChanged('test')");
					  $myCalendar->rtl = true;
					  $myCalendar->writeScript();
					  ?></td>	
					  </tr>
					  
					  <tr bgcolor="#ffffff">
			<td colspan="2" id="t_designation" >&nbsp;To Date:</td>
			<td colspan="6">                    <?php
					  $myCalendar = new tc_calendar("to_date", true);
					  $myCalendar->setIcon("cal/images/iconCalendar.gif");
					  $myCalendar->setDate(date('Y'), date('m'),date('d'));
					  $myCalendar->setPath("cal/");
					  $myCalendar->setYearInterval(1950, 2020);
					  $myCalendar->dateAllow('1950-01-01', '2020-03-01');
					  //$myCalendar->setHeight(350);
					  //$myCalendar->autoSubmit(true, "form1");
					 // $myCalendar->setSpecificDate(array("2011-04-01", "2011-04-13", "2011-04-25"), 0, 'month');
					  $myCalendar->setOnChange("myChanged('test')");
					  $myCalendar->rtl = true;
					  $myCalendar->writeScript();
					  ?></td>
		</tr>
		
		
		
		<tr>
		
		
		</table></td></tr></table>
		<img src="img/pixel.gif" width="1" height="10" border="0"><br>
	</td>
	<td background="img/line_r.gif"><img src="img/pixel.gif" border="0"></td>
	</tr>
<tr>
	<td width="10"><img src="img/formtab_b.gif" width="10" height="20" border="0"></td>
	<td bgcolor="#4682B4" colspan="4" align="right">
	<table cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td class="btn" width="100"><input type="submit" name="Submit" value="Save" class="btnform"></td>
		<td width="1"><img src="img/pixel.gif" width="1" height="18" border="0"></td>
		<td class="btn" width="100"><input type="reset" name="Reset" value="Reset" class="btnform"></td>		
		<td width="1"><img src="img/pixel.gif" width="1" height="18" border="0"></td>
	</tr>
	</table>
	</td>
</tr>
</table>
</form>				

			
<br /></p>
			
		</div>
	  </div>
	  
	  <?php include('leftsidebar.php');  ?>
	  
	   
	  
	  	   <?php include('footer.php');  ?>
