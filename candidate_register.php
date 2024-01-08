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
				<div class="overlay-content"><h4>TEACHHIRE.COM</h4>
				<h5>CHOOSE THE OPTION FROM BELOW</h5>
                  <h3></h3><a href="contact.php">About US</a>
                  <a href="job_details.php">job Details</a>
				  <a href="logs.php">login</a>
                  
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- end header section -->
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



                        
<form action="savjsee.php" method="post" name="formID" onsubmit="return v.exec()" enctype="multipart/form-data" id="formID">
<table cellpadding="0" cellspacing="0" border="0" width="600" align="center">
<tr>
	<td bgcolor="#4682B4" width="10"><img src="img/pixel.gif" width="10" height="1" border="0"></td>
	<td class="header1" nowrap>Register User<img src="img/pixel.gif" width="10" height="1" border="0"></td>
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
			<td id="t_first_name" width="20%" colspan="2">&nbsp;First Name Or UserName: </td>
			<td width="32%" colspan="2"><input type="text" name="fname" size="10" class="form-control validate[required,custom[onlyLetter]]"></td>
			<td id="t_last_name" width="16%">&nbsp; Last Name:</td>
			<td width="32%" colspan="2"><input type="text" name="lname" size="10" class="form-control validate[required,custom[onlyLetter]]"></td>
		</tr>
		<tr bgcolor="#ffffff">
			<td id="t_first_name" width="20%" colspan="2">&nbsp;Middle Name:</td>
			<td width="32%" colspan="5"><input type="text" name="mname" size="10" class="form-control validate[required,custom[onlyLetter]]"></td>
			
		</tr>
		<tr bgcolor="#ffffff"> 
			<td colspan="2" name="dob">&nbsp;Date of Birth:</td>
			<td colspan="2">
                    <input name="dob" class="form-control" type="Date" id="dob"></td>
			<td id="t_gender" width="10%">&nbsp; Gender:</td>
			<td width="10%" colspan="2">
				<select name="gender" class="form-control">
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select></td>	
		</tr>
		<tr bgcolor="#ffffff"> 
			<td colspan="2" id="t_street_address">&nbsp;Street address:</td>
			<td bgcolor="#ffffff" colspan="5"><input type="text" name="addr" size="35" class="form-control validate[required]"></td>
		</tr>
		<tr bgcolor="#ffffff"> 
			<td colspan="5" id="t_city">&nbsp;Location&nbsp;&nbsp;</td>
		  <td colspan="5"><script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        // Countries
        var country_arr = new Array("Select Country","AUSTRALIA","INDIA","NEW ZEALAND","USA","UAE","MAURITIUS");

        $.each(country_arr, function (i, item) {
            $('#country').append($('<option>', {
                value: i,
                text : item,
            }, '</option>' ));
        });

        // States
        var s_a = new Array();
        s_a[0]="Select State";
        s_a[1]="Select State|QUEENSLAND|VICTORIA";
        s_a[2]="Select State|ANDHRAPRADESH|KARNATAKA|TAMILNADU|DELHI|GOA|W-BENGAL|GUJARAT|MADHYAPRADESH|MAHARASHTRA|RAJASTHAN";
        s_a[3]="Select State|AUCKLAND";
        s_a[4]="Select State|NEWJERSEY|ILLINOIS";
        s_a[5]="Select State|DUBAI";
        s_a[6]="Select State|MAURITIUS";

        // Cities
        var c_a = new Array();
        c_a['KARNATAKA']="DHARWAD|HUBLI|BELAGAVI|";
        c_a['TAMILNADU']="CHENNAI";
        c_a['DELHI']="DELHI";
        c_a['GOA']="GOA";
        c_a['W-BENGAL']="KOLKATA";
        c_a['GUJARAT']="AHMEDABAD1|AHMEDABAD2|AHMEDABAD3|BARODA|BHAVNAGAR|MEHSANA|RAJKOT|SURAT|UNA";
        c_a['MADHYAPRADESH']="INDORE";
        c_a['MAHARASHTRA']="MUMBAI|PUNE";
        


        $('#country').change(function(){
            var c = $(this).val();
            var state_arr = s_a[c].split("|");
            $('#state').empty();
            $('#city').empty();
            if(c==0){
                $('#state').append($('<option>', {
                    value: '0',
                    text: 'Select State',
                }, '</option>'));
            }else {
                $.each(state_arr, function (i, item_state) {
                    $('#state').append($('<option>', {
                        value: item_state,
                        text: item_state,
                    }, '</option>'));
                });
            }
            $('#city').append($('<option>', {
                value: '0',
                text: 'Select City',
            }, '</option>'));
        });

        $('#state').change(function(){
            var s = $(this).val();
            if(s=='Select State'){
                $('#city').empty();
                $('#city').append($('<option>', {
                    value: '0',
                    text: 'Select City',
                }, '</option>'));
            }
            var city_arr = c_a[s].split("|");
            $('#city').empty();

            $.each(city_arr, function (j, item_city) {
                $('#city').append($('<option>', {
                    value: item_city,
                    text: item_city,
                }, '</option>'));
            });


        });
    });
</script>
<select name="country" id="country"></select> <select name="state" id="state">
</select>
<select name="city" id="city">
</select>
<br>
<br>
</body>
</html>
</td>	
		</tr>
		<tr bgcolor="#ffffff">
			<td colspan="2" id="t_state">&nbsp;Pincode:</td>
			<td colspan="2"><input type="text" name="pcode" size="10" class="form-control validate[required,custom[onlyNumber]]" >
			
			<td colspan="2" id="t_mobile_no">&nbsp;Phone No:</td>
			<td colspan="2"><input type="text" name="phone"  class=" validate[required,custom[telephone]" ></td>
			
			
		
		<tr bgcolor="#ffffff"> 
		<td colspan="2" id="t_mobile_no">&nbsp;Mobile No:</td>
			<td colspan="5"><input type="text" name="mobile" size="10" class="form-control validate[required,custom[telephone]"></td>
			
			
		</tr>
		
		<tr bgcolor="#ffffff"> 
		 <td colspan="2" id="t_email">&nbsp;Email:</td>
			<td colspan="5"><input type="text" name="emailid" size="35" class="form-control validate[required,custom[email]]"></td>
		
		</tr>
		
		<tr bgcolor="#ffffff"> 
		 <td colspan="2" id="t_email">&nbsp;Password:</td>
			<td colspan="5"><input type="password" name="password" size="35" class="form-control validate[required]"></td>
		
		</tr>
		
		<tr bgcolor="#ffffff"> 
		 <td colspan="2" id="t_email">&nbsp;Enter Your Question:</td>
			<td colspan="5"><select class="ctrl" name="secret_q">
						<option value="" selected>-select-</option>
						<option value="My Nickname...?">My Nickname...?</option>
						<option value="My First School Name...?">My First School Name...?</option>
						<option value="My Birth Place...?">My Birth Place...?</option>
			</select>
			
		</tr>
		
		<tr bgcolor="#ffffff"> 
		 <td colspan="2" id="t_email">&nbsp;Your Answer:</td>
			<td colspan="5"><input type="text" name="secret_a" size="35" class="form-control validate[required]"></td>
		
		</tr>
		
		<tr bgcolor="#ffffff"> 
		 <td colspan="2" id="t_email">&nbsp;Add Your Photo:</td>
			<td colspan="5"><input type="file" name="student_image" size="35" class="ctrl"></td>
		
		</tr>
		
		
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
<?php include('val.php');?>	
<br /></p>
			
		</div>
	  </div>
	   <section class="container-fluid footer_section">
      <p>
        &copy; 2022 All Rights Reserved. Design & Developed By
        <a href="#">Prasad Malvi</a>
      </p>
    </section>
    <!-- footer section -->

    <script>
      function openNav() {
        document.getElementById("myNav").classList.toggle("menu_width");
        document
          .querySelector(".custom_menu-btn")
          .classList.toggle("menu_btn-style");
      }
    </script>
  </body>
</html>
