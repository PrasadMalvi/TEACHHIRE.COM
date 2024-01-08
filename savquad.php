<?php
  include("dbconnect.php");
  $js_id=$_POST["jsid"];
  $q_name=$_POST["q_name"];
  $uni_name=$_POST["uni_name"];
  $coll_name=$_POST["coll_name"];
  $yr_of_pass=$_POST["yr_of_pass"];
  $tot_marks=$_POST["tot_marks"];
  $obtain_marks=$_POST["obtain_marks"];
  
  $perc=$_POST["perc"];
  
  if($perc>=70)
  {
  $grd="distinction";
  }
  elseif($perc<70 && $perc>=60)
  {
  $grd="firstclass";
  }
  elseif($perc<60 && $perc>=50)
  {
  $grd="secondclass";
  }
  elseif($perc<50 && $perc>=35)
  {
  $grd="passclass";
  }
  else
  {
  $grd="not-eligible";
  }
  
//  $grd=$_POST["grd"];
  $sql="insert into qualification_details values(null,'$js_id','$q_name','$uni_name','$coll_name','$yr_of_pass','$tot_marks','$obtain_marks','$perc','$grd')";
  $res=mysqli_query($conn,$sql);
  ?>
  <script type="text/javascript">
  alert("record inserted");
  if(confirm('More Qualifications you have?'))
       document.location="candidate_register1.php?jsid=<?php echo $js_id; ?>";
else
 {
      if(confirm('You have an Experience?'))
       document.location="candidate_register2.php?jsid=<?php echo $js_id; ?>";
	 else  
       document.location="candidate_register.php";
 }	 
  </script>