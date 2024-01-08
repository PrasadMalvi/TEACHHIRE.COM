<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php 

$sub_id=$_POST['subject_id'];
$student_id=$_POST['student_id'];

include('dbconnect.php');
$sql="insert into student_subject values (null,'$student_id','$sub_id')";
mysqli_query($conn,$sql);
?>
</body>
<script>
alert ("Successfull inserted");
document.location="student_subject_view.php";
</script>
</html>

