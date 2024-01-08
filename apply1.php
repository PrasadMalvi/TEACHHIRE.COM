<?php
$jid=$_REQUEST["jid"];
$js_id=$_REQUEST["js_id"];
$cmp_id=$_REQUEST["cmp_id"];
$date=date('Y-m-d');

include("dbconnect.php");
$sql="insert into job_application values(null,'$jid','$js_id','$date','Applied','good','$cmp_id')";
mysqli_query($conn,$sql);
?>

<script type="text/javascript">
	alert("Job Apply...");
document.location="index.php";
</script>
