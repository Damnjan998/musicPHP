<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Music-Box | Home</title>
	<link rel="icon" href="images/tab.ico">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="author" content="Askovic Damnjan 174.17"/>
	<meta name="keywords" content="Music, Albums, Artists, Online-Shop"/>
	<meta name="language" content="English"/>
	<meta name="description" content="If you searching for a good music, you are at the right place, ENJOY!">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href='//fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
	<!--slider-->
	<!-- flipster -->
	<link rel="stylesheet" href="css/jquery.flipster.css">
	<script type="text/javascript" src="js/modernizr.custom.53451.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.gallery.js"></script>
	<script type="text/javascript">
		$(function () {
			$('#dg-container').gallery({
				autoplay: true
			});
		});
	</script>
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
					<a href="index.php">
						<img src="images/logo.png" alt="" title="logo">
					</a>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div class="slider-bg">
		<div class="wrap">
			<div class="container">
				<section id="dg-container" class="dg-container">
					<div class="flipster">
						<ul id="slajder">
							<li>
								<div class="about-grid-agile">
									<img src="images/1.jpg" alt=" " class="img-responsive">
								</div>
							</li>
							<li>
								<div class="about-grid-agile">
									<img src="images/2.jpg" alt=" " class="img-responsive">
								</div>
							</li>
							<li>
								<div class="about-grid-agile">
									<img src="images/3.jpg" alt=" " class="img-responsive">
								</div>
							</li>

						</ul>
					</div>
					<!-- End Flipster List -->
				</section>
			</div>
		</div>
	</div>
	<div class="content-bg">
		<div class="wrap">
			<div class="main">
				<div class="content">
					<h2>Featured Albums</h2>
					<div class="section group" id="prikazProizvoda">
						<?php
							include "features.php"
						?>
					</div>
					<h2 class="bg">Our Specials</h2>
					<div class="section group" id="prikazSpecial">
						<?php
							include "specialAlbums.php"
						?>
					</div>
				</div>
				<div class="sidebar">
					<?php
						include "survey.php"
					?>
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


	<script src="js/jquery.flipster.js"></script>
	<script>
		

		$(function () {
			$(".flipster").flipster({
				style: 'carousel',
				start: 0
			});
		});

		
	</script>
</body>

</html>