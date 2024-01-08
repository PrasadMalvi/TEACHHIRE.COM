<?php
	$username=$_POST["username"];
	$q=$_POST["secret_q"];
	$a=$_POST["secret_a"];	
	include('dbconnect.php');
	$sql="select * from job_seeker";
	$res=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($res);
	$u=$row["js_fname"];
	$q1=$row["secret_q"];
	$a1=$row["secret_a"];

if($username==$u && $q==$q1 && $a==$a1)
{
?>
	<script>
	alert('Your Password is <?php echo $row['password'];  ?>');
	document.location="index.php";
	</script>
	
<?php
}
else
{

?>
	<script>
	alert('Your Details is wrong');
	document.location="index.php";
	</script>
<?php
}
?>