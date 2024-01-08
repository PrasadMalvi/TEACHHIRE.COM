<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Login Form</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="js/modernizr.custom.63321.js"></script>
        <!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>
			body {
				background: #e1c192 url(images/wood_pattern.jpg);
			}
		</style>
    </head>
    <body>
        <div class="container">
		
			<!-- Codrops top bar -->
            <!--/ Codrops top bar -->
<header>
<h1>JOB FOR ME </h1>
	  <h2>&nbsp;</h2>
				
			  </header>
			
			<section class="main">
				<form name="form1" class="form-2" method="post" action="forgot_pass1.php">
					<p>Username 
					  <input name="username" type="text" id="username">
				  </p>
					<p>&nbsp;</p>
					<p>Select Your Secret Question...?</p>
					<p>
					  <select name="secret_q" id="secret_q">
					  <option value="" selected>-select-</option>
						<option value="My Nickname...?">My Nickname...?</option>
						<option value="My First School Name...?">My First School Name...?</option>
						<option value="My Birth Place...?">My Birth Place...?</option>
				      </select> 
				    </p>
					<p>&nbsp;</p>
					<p>Enter Your Answer... </p>
					  <p><input name="secret_a" type="text" id="secret_a">
				  </p>
				  
				  <p class="clearfix"> 
						<input type="submit" name="submit" value="Log in">
												
					</p>
				</form>??
			</section>
			
        </div>
		<!-- jQuery if needed -->
    </body>
</html>