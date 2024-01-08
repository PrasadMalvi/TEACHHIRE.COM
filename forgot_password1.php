<!DOCTYPE html>
<html>
  <head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>TEACHHIRE.COM</title>

    <!-- slider stylesheet -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"
    />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css2/bootstrap.css" />

    <!-- fonts style -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins|Raleway:400,600|Righteous&display=swap"
      rel="stylesheet"
    />
    <!-- Custom styles for this template -->
    <link href="css2/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css2/responsive.css" rel="stylesheet" />
  </head>

  <body>
    <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.php">
              <span>
                TEACHHIRE.COM
              </span>
            </a>

            <div class="navbar-collapse" id="">
              <div
                class="d-none d-lg-flex ml-auto flex-column flex-lg-row align-items-center mt-3">
				 <ul class="navbar-nav  mr-5">
                  <li class="nav-item mr-5">
                    <a class="nav-link" href="index.php">
                      <span>Home</span>
                    </a>
                  </li>
                </ul>
				
				<ul class="navbar-nav  mr-5">
                  <li class="nav-item mr-5">
                    <a class="nav-link" href="contact.php">
                      <span>About Us</span>
                    </a>
                  </li>
                </ul>
				 <ul class="navbar-nav  mr-5">
                  <li class="nav-item mr-5">
                    <a class="nav-link" href="job_details.php">
                      <span>Job Details</span>
                    </a>
                  </li>
                </ul>
				  <ul class="navbar-nav  mr-5">
                  <li class="nav-item mr-5">
                    <a class="nav-link" href="logs.php">
                      <span>Login</span>
                    </a>
                  </li>
                </ul>
				</ul> 
              </div>

              <div class="custom_menu-btn">
                <button onclick="openNav()">
                  <span class="s-1"> </span>
                  <span class="s-2"> </span>
                  <span class="s-3"> </span>
                </button>
              </div>
              <div id="myNav" class="overlay">
                <div class="overlay-content">
                  <a href="contact.php">About US</a>
                  <a href="job_details.php">job Details</a>
				  <a href="logs.php">login</a>
                  
                </div><div id="myNav" class="overlay">
                <div class="overlay-content">
                  <h1>Stay Hungry Stay Foolish</h1>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- end header section -->
	  <br><br><br><br><br><br><br>
	  <div align="center">
<?php
include('dbconnect.php');
$uname=$_POST["username"];
$sql="select * from job_seeker where js_fname='$uname'";
$sql;
$res=mysqli_query($conn,$sql);
if($row=mysqli_fetch_array($res))
{
    $hintqtn=$row["question"];
	$hintans=$row["answer"];
	$pwd=$row["pass"];
?>
<body>
  <section class="container">
    <div class="login">
      <h1>Please Enter Your Hint Answer.</h1>
						
					<div class="alert alert-info">
						Hint Question: <?php echo " ".$hintqtn; ?>
					</div>
					<form class="form-horizontal" action="getpwd.php" method="post">
						<fieldset>
							
						<div class="input-prepend" title="Hint Answer" data-rel="tooltip">
								<input name="hintans1" type="text" class="input-large span10" id="username" size="50" autofocus  />
						      <input name="hintans" type="hidden" id="hintans" value="<?php echo $hintans; ?>">
                              <input name="pwd" type="hidden" id="pwd" value="<?php echo $pwd; ?>">
</div>
							
							<div class="clearfix"></div>

						
							<div class="clearfix"></div>
							<br>
							<p class="center span5">
							<button type="submit" class="btn btn-primary">Get Password</button>
							</p>
						</fieldset>
					</form>
				</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br>

</body>
</html>
<?php	
	
}
else
{
?>
<script type="text/javascript">
alert("Wrong Username");
document.location="index.php";
</script>
<?php
}
?>

