<?php
$sub_to_sem_id=$_REQUEST['subject_to_sem_id'];
include("dbconnect.php");
$sql="delete from subject_to_sem where subject_to_sem_id='$sub_to_sem_id'";
mysqli_query($conn,$sql);
//echo $sql;
?>
<script>
alert("deleted successfully");
document.location="subject_to_sem_view.php";
</script>