<?php
 include("dbconnect.php");
  $fname=$_POST["fname"];
  $mname=$_POST["mname"];
  $lname=$_POST["lname"];
  $dob=$_POST["dob"];
   $gender=$_POST["gender"];
  $addr=$_POST["addr"];
  $city=$_POST["city"];
  $state=$_POST["state"];
  $pcode=$_POST["pcode"];
  $phone=$_POST["phone"];
  $mobile=$_POST["mobile"];
  $emailid=$_POST["emailid"];
  $p=$_POST["password"];
  $q=$_POST["secret_q"];
  $a=$_POST["secret_a"];

$student_image=$_FILES['student_image']['name'];
 $tmp_location=$_FILES['student_image']['tmp_name'];
 $target="photo/".$student_image;
 move_uploaded_file($tmp_location,$target);
  
  $sql="insert into job_seeker values(null,'$fname','$mname','$lname','$dob','$gender','$addr','$city','$state','$pcode','$phone','$mobile','$emailid','$p','$q','$a','$student_image')";
  $res=mysqli_query($conn,$sql);
  //$id=mysqli_insert_id();
  
  $sql1="insert into admin values(null,'$fname','$p','jobseeker')";
  mysqli_query($conn,$sql1);
 
  ?>
  <script>
  alert("Registration Successfully");
  document.location="logs.php";
  </script>
  <!--.<script>
  alert("New Job Seekar  INSERTED");
 // document.location="candidate_register1.php?jsid=<?php// echo $id;?>";
  </script>-->
  