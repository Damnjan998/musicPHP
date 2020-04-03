<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Music-Box | Login | Register </title>
<link rel="icon" href="images/tab.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Askovic Damnjan 174.17"/>
<meta name="keywords" content="Music, Albums, Artists, Online-Shop"/>
<meta name="language" content="English"/>
<meta name="description" content="If you searching for a good music, you are at the right place, ENJOY!">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/login.js" type="text/javascript"></script>
</head>
<body>
<div class="menu-bg">
<div class="wrap">
	<div class="menu">
    	<ul class="nav" id="prikaz">
            <?php
				include "meni.php"
			?>
        </ul>
	</div>
	<div class="soc-icons">
		<ul>
			<li><a href="contact.php">Get In Touch&nbsp;</a></li>
			<li><a href="https://www.facebook.com/"target="_blank"><img src="images/facebook.png" /></a></li>
			<li><a href="https://twitter.com/"target="_blank"><img src="images/twitter.png" /></a></li>
			<li><a href="https://plus.google.com/discover"target="_blank"><img src="images/gplus.png" /></a></li>
		</ul>
	</div>
	<div class="clear"></div>
</div>
</div>
<div class="header-bg">
<div class="wrap">
<div class="header">
	<div class="logo">
		<a href="index.php"><img src="images/logo.png" alt="" title="logo"></a>
	</div>
   <div class="clear"></div>
</div>
</div>
</div>
<div class="content-bg">
<div class="wrap">
<div class="main">
<div class="section group">				
		<div class="col span_1_of_3">
			<div class="contact_info">
			 	<h3>Log In</h3>
      		</div>
      		<div class="company_address">
					<form action="#" method="POST">
                <div>
                    <span><label class="logovanje">E-MAIL</label></span>
                    <span><input type="text" value="" id="tbLoginEmail" name="tbLoginEmail" placeholder="Enter Your E-mail.."/></span>
                </div>
                <div>
                    <span><label class="logovanje">PASSWORD</label></span>
                    <span><input type="password" value="" id="tbLoginPass" name="tbLoginPass" placeholder="Enter Your Password.."/></span>
                </div>
                <div>
					<span><input type="submit" value="Log in" id="btnLogin" name="btnLogin"></span>
					  </div>
						</form>
			</div>
		</div>				
		<div class="col col1 span_2_of_4">
			  <div class="contact-form">
			  	<h3>Register</h3>
				    <form action="registracija.php" method="post">
				    	<div>
					    	<span><label>FIRST NAME</label></span>
							<span><input type="text" value="" id="tbIme" name="tbIme" placeholder="Enter Your First Name.."></span>
							<label id="greskaName">Example : John </label>
                        </div>
                        <div>
					    	<span><label>LAST NAME</label></span>
							<span><input type="text" value="" id="tbPrezime" name="tbPrezime" placeholder="Enter Your Last Name.."></span>
							<label id="greskaPrezime">Example : Tompson</label>
					    </div>
					    <div>
					    	<span><label>E-MAIL</label></span>
							<span><input type="text" value="" id="tbFormaMail" name="tbFormaMail" placeholder="Enter Your Email.."></span>
							<label id="greskaMail">Example : example@gmail.com</label>
					    </div>
					    <div>
                            <span><label>PASSWORD</label></span>
                            <span><input type="password" value="" id="tbFormaLozinka" name="tbFormaLozinka" placeholder="Enter Your Password.."></span>
							<label id="greskaSifra">Example : Lozinka123</label>
					   <div>
								 <span><input type="submit" value="Register" id="registracija" name="registracija"></span>
					  </div>
	     	    </form>
		    </div>
  		</div>				
</div>
<div class="clear"></div>
</div>
</div>
</div>
</div>
<div class="footer-bg">
		<?php
			include "footer.php"
		?>
</div>
</body>
</html>