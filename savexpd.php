<?php
   include("dbconnect.php");
   $js_id=$_POST["jsid"];
   $exp_name=$_POST["exp_name"];
   $exp_desc=$_POST["exp_desc"];
   $frm_dt=$_POST["frm_dt"];
   $to_dt=$_POST["to_dt"];
   $sql="insert into experience_details values(null,'$js_id','$exp_name','$exp_desc','$frm_dt','$to_dt')";
   $res=mysqli_query($conn,$sql);
?>
<script type="text/javascript">
   alert("record inserted");
 if(confirm('More Experience you have?'))
       document.location="candidate_register2.php?jsid=<?php echo $js_id; ?>";
else
       document.location="candidate_register.php";
</script>