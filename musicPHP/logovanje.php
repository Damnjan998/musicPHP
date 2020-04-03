<?php
session_start();
include "setup/konekcija.php";
if(isset($_POST['send'])){
	$email = $_POST["email"];
	$sifra = $_POST["lozinka"];
	$siframd5 = md5($sifra);
	$validno = true;
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$validno = false; 
	}
	if(empty($sifra)){
		$validno = false;
	}
	if($validno){
		$upit="SELECT * from korisnik where email=:email and lozinka=:sifra";
		$priprema = $konekcija->prepare($upit);
		$priprema->bindParam(":email", $email);
		$priprema->bindParam(":sifra", $siframd5);
		$rezultat = $priprema->execute();
		if($rezultat){
			if($priprema->rowCount()==1){
				http_response_code(200);
				$korisnik=$priprema->fetch();
				$_SESSION['korisnik']=$korisnik;
				http_response_code(200);
			} else {
				http_response_code(404);
			}
		}
	} else {
		http_response_code(422);
	}
}
?>