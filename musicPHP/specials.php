<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Music-Box | Specials</title>
<link rel="icon" href="images/tab.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Askovic Damnjan 174.17"/>
<meta name="keywords" content="Music, Albums, Artists, Online-Shop"/>
<meta name="language" content="English"/>
<meta name="description" content="If you searching for a good music, you are at the right place, ENJOY!">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link href='//fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.min.js"></script>
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
			<li>
				<a href="contact.php">Get In Touch&nbsp;</a>
			</li>
			<li>
				<a href="https://www.facebook.com/" target="_blank">
					<img src="images/facebook.png" alt="" />
				</a>
			</li>
			<li>
				<a href="https://twitter.com/" target="_blank">
					<img src="images/twitter.png" alt="" />
				</a>
			</li>
			<li>
				<a href="https://plus.google.com/discover"target="_blank">
					<img src="images/gplus.png" alt="" />
				</a>
			</li>
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
<div class="content">
	<h2>Our Products</h2>
	<div class="select" id="sortiranje">
		<select id="selectPrductSort">
			<option value="0">Sort</option>
			<option value="1">Year: Low to High</option>
			<option value="2">Year: High to Low</option>
			<option value="3">Product Name: A to Z</option>
			<option value="4">Product Name: Z to A</option>
		</select>
	<div id="prikazProizvoda">
		<?php
			include "ispisAlbuma.php";
		?>
	</div>
		<div id='paginacija'>
			<?php
				include "paginacija.php";
			?>
		</div>	
	<div class="clear"></div>
</div>
</div>
<div class="sidebar">
<div class="sidebar-list">
	<h2>Filter By Categories</h2>
		<ul id="prikazKategorije">
			<?php
				include "kategorije.php"
			?>
	</ul>
</div>
</div>
<div class="clear"></div>
</div>
</div>
</div>
<div class="footer-bg">
		<?php
			include "footer.php";
		?>
	</div>
</div>
<script src="js/special.js" type="text/javascript"></script>
</body>
</html>