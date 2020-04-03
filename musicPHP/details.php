<?php
    session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Music-Box | Details</title>
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
<div class="page">
	<div id="detalji">
        <?php
            if(isset($_GET["id"])){
                $id = $_GET["id"];
                $upit="SELECT * from album where id=$id";
                $rezultat = $konekcija->query($upit);
                $rez = $rezultat->fetch();

                echo "
                    <p class='nazivAlbum'>$rez->naziv</p></br></br>
                    <img class='slikaAlbum' src='$rez->slika' alt='$rez->alt' /></br></br>
                    <p class='godinaAlbum'>Year: $rez->godina </p></br></br>
                    <p class='opisAlbum'>$rez->opis</p></br></br>
                ";
            }
        ?>        
        <div class="cleaner"></div>
    </div>
</div>
</div>
</div>
<div class="footer-bg">
	<?php
		include "footer.php";
	?>
	</div>
</body>
</html>