<?php
require_once "setup/konekcija.php";

$upit = "SELECT * FROM kategorija";
$rezultat = $konekcija->query($upit);

foreach($rezultat as $rez){
    echo "<li class='kat'><a data-id='$rez->id' class='filter-category' href='#'>$rez->naziv</a></li>";
}