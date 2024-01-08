<?php include('header.php');  ?>

<?php include('menu.php');  ?>

<script language="javascript">


function calcMARKS()
{
  
	var tot_marks = parseInt(document.getElementById('tot_marks').value);
	
	var obtain_marks = parseInt(document.getElementById('obtain_marks').value);
	

	var result = Math.round((obtain_marks/tot_marks)*100);
	document.getElementById('perc').value=result+"%";
}
</script>


<link rel="stylesheet" href="js/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/jquery.validationEngine-en.js" type="text/javascript"></script>
		<script src="js/jquery.validationEngine.js" type="text/javascript"></script>
		
		<script>	
		$(document).ready(function() {
			$("#formID").validationEngine()
		});
	</script>

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
<?php include_once("dbconnect.php");?>
<?php
		$jsid=$_REQUEST["jsid"];
		$sql_js="select * from job_seeker where js_id='$jsid'";
		$res_js=mysqli_query($conn,$sql_js);
		$row_js=mysqli_fetch_array($res_js);
		?>

                        
<form action="savquad.php" method="post" name="formID" id="formID" onsubmit="return v.exec()">
 <input name="jsid" type="hidden" id="jsid" value="<?php echo $jsid; ?>">
<table cellpadding="0" cellspacing="0" border="0" width="600" align="center">
<tr>
	<td bgcolor="#4682B4" width="10"><img src="img/pixel.gif" width="10" height="1" border="0"></td>
	<td class="header1" nowrap>Educational Details of <?php  echo $row_js['js_fname']." ".$row_js['js_mname']." ".$row_js['js_lname']; ?><img src="img/pixel.gif" width="10" height="1" border="0"></td>
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
			<td id="t_first_name" width="20%" colspan="2">&nbsp;Qualification:</td>
			<td width="32%" colspan="2"><input type="text" name="q_name" size="10"  class="ctrl validate[required]"></td>
			<td id="t_last_name" width="16%">&nbsp; University:</td>
			<td width="32%" colspan="2"><input type="text" name="uni_name" size="10" class="ctrl validate[required]"></td>
		</tr>
		<tr bgcolor="#ffffff"> 
		    <td colspan="2" id="t_university">&nbsp; College Name:</td>
			<td width="10%" colspan="2"><input type="text" name="coll_name" class="ctrl validate[required]" size="5"></td>
			<td colspan="2" id="t_university" width="10%">&nbsp; Year Of Passing:</td>
			<td width="10%" colspan="2"><input type="text" name="yr_of_pass" class="ctrl validate[required,custom[onlyNumber]]" size="5"></td>		
		</tr>
		<tr bgcolor="#ffffff"> 
			<td colspan="2" id="t_year_pass">&nbsp;Total Marks:</td>
			<td colspan="2"><input name="tot_marks" id="tot_marks" type="text" class="ctrl validate[required,custom[onlyNumber]]" size="10" ></td>
			<td id="t_percentage" width="10%">&nbsp; Obtained Marks:</td>
			<td width="10%" colspan="2"><input type="text" name="obtain_marks" id="obtain_marks" onchange="calcMARKS()" class="ctrl validate[required,custom[onlyNumber]]" size="5"></td>	
		</tr>
		<tr bgcolor="#ffffff"> 
		<td id="t_first_name" width="20%" colspan="2">&nbsp;Percentage:</td>
			<td width="32%" colspan="5"><input type="text" name="perc" id="perc" size="10" class="ctrl"></td>
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
