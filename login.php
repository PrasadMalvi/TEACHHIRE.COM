<?php session_start(); ?>
<?php
	$username=$_POST["username"];
	$password=$_POST["password"];	
	include('dbconnect.php');
	$sql="select * from admin where user_name='$username' and password='$password'";
	$res=mysqli_query($conn,$sql);
	if($row=mysqli_fetch_array($res))
	{
	$type=$row["type"];
	$_SESSION["uname"]=$username;
	if($type=="admin")
	{
	?>
	<script>
	document.location="admin/home.php";
	</script>
	<?php
	}
	
	else if($type=="jobseeker")
	{
	?>
	<script>
	document.location="jobseeker/home.php";
	</script>
	<?php
	}
	else if($type=="company")
	{
	?>
	<script>
	document.location="company/home.php";
	</script>
	<?php
	}
	
	
}
	else
	{
	?>
	<script>
	alert("Invalid User name Or Password");
	history.back();
	</script>
	<?php
	
	}
	?>

