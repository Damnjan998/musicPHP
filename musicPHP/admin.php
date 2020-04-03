<?php
    session_start();
    require_once "setup/konekcija.php";
    if(!isset($_SESSION["korisnik"])){
        header("location: index.php");       
    } else{
        if($_SESSION["korisnik"]->id_uloga == 1){
            header("location: index.php");
            }
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Music-Box | Admin Panel</title>
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
                <div class="main">
                    <div class="content">
                        <h2>Admin Panel</h2>
                            <h3 class="nasloviAdmin">Albums</h3>
                                <table id="tabelaAlbumi">
                                    <tr>
                                        <th class="tabelaIdAlbuma">Id</th>
                                        <th class="tabelaNazivAlbuma">Name</th>
                                        <th class="tabelaGodinaAlbuma">Year</th>
                                        <th class="tabelaPutanjaSlikeAlbuma">Image</th>
                                        <th class="tabelaKategodijaAlbuma">CategoryId</th>
                                        <th class="taster">Update</th>
                                        <th class="taster">Delete</th>
                                    </tr>
                                    <?php
                                        $upit = "SELECT * FROM album";
                                        $rezultat = $konekcija->query($upit);
                                        foreach($rezultat as $album){
                                            echo "<tr>
                                            <td class='tabelaIdAlbuma'>$album->id</td>
                                            <td class='tabelaNazivAlbuma'>$album->naziv</td>
                                            <td class='tabelaGodinaAlbuma'>$album->godina</td>
                                            <td class='tabelaPutanjaSlikeAlbuma'>$album->slika</td>
                                            <td class='tabelaKategodijaAlbuma'>$album->id_kategorija</td>
                                            <td class='taster'><a href='izmeni.php?id=$album->id'><button class='submit-btn' type='submit' name='izmeni'>Update</button></a></td>
                                            <td class='taster'><a href='izbrisi.php?id=$album->id'><button class='submit-btn' type='submit' name='izbrisi'>Delete</button></a></td>
                                            </tr>";
                                        }
                                    ?>
                                </table>     
                                <h3 class="nasloviAdmin">New album</h3>
                                <form action="unesi.php" name="formaDodaj"  method="POST" enctype="multipart/form-data">
                                <table id="insertTabela">
                                    <tr>
                                        <td>Name:</td>
                                        <td><input type="text" required pattern="^[A-Z][a-z]{1,11}(\s[A-Z][a-z]{1,11})*$" title="Example: Herald" id="tbNazivAlbuma" name="naziv"></td>
                                    </tr>
                                    <tr>
                                        <td>Year:</td>
                                        <td><input type="text" required pattern="^[1-9]{1}[0-9]{2,3}$" title="Example: 1998" id="tbGodinaAlbuma" name="godina"></td>
                                    </tr>
                                    <tr>
                                        <td>Description:</td>
                                        <td><input type="text" required  title="Tell us something about your Album." id="tbOpisAlbuma" name="opis"></td>
                                    </tr>
                                    <tr>
                                        <td>Featured:</td>
                                        <td><input type="text" required pattern="^[0-1]{1}$" title="0 OR 1" id="tbIstaknut" name="istaknut"></td>
                                    </tr>    
                                    <tr>
                                        <td>Image:</td>
                                        <td><input type="file" id="slika" required name="slika"></td>
                                    </tr>
                                    <tr>
                                        <td>Category:</td>
                                        <td><select class='listaKategorija' id="ddlKategorija" name='listaKategorija'>
                                        <?php
                                        $upit2 = "SELECT * FROM kategorija";
                                        $rezultat2 = $konekcija->query($upit2);
                                        $rez2 = $rezultat2->fetchAll();
                                        foreach($rez2 as $kat){
                                            echo "<option value=$kat->id>$kat->naziv</option>";
                                        }
                                        ?>
                                         </select>
                                        </td>
                                    </tr>
                                    <tr> 
                                        <td colspan="2"><input class="submit-btn" id='btnIzmena' value="Insert" type="submit" name="unesi"></td>
                                    </tr>   
                                    </table>  
                                    </form>
                                    <h3 class="nasloviAdmin">Users</h3> 
                                    <table id="tabelaKorisnici">
                                        <tr>
                                            <th class="tabelaIdKorisnika">Id</th>
                                            <th class="tabelaImeKorisnika">First Name</th>
                                            <th class="tabelaPrezimeKorisnika">Last Name</th>
                                            <th class="tabelaEmailKorisnika">Email</th>
                                            <th class="tabelaVremeKorisnika">Date Of Registration</th>
                                            <th class="taster">Delete</th>
                                        </tr>
                                        <?php 
                                        $upit3 = "SELECT * FROM korisnik WHERE id_uloga=1";
                                        $rezultat3 = $konekcija->query($upit3);
                                        foreach($rezultat3 as $kor){
                                            echo "<tr>
                                            <td class='tabelaIdKorisnika'>$kor->id</td>
                                            <td class='tabelaImeKorisnika'>$kor->ime</td>
                                            <td class='tabelaPrezimeKorisnika'>$kor->prezime</td>
                                            <td class='tabelaEmailKorisnika'>$kor->email</td>
                                            <td class='tabelaVremeKorisnika'>$kor->datum_registracije</td>
                                            <td class='taster'><a href='izbrisiKorisnike.php?id=$kor->id'><button class='submit-btn' type='submit' name='izbrisiKorisnike'>Delete</button></a></td>
                                            </tr>";
                                        }
                                        ?>
                                    </table>  
                                    <h3 class="nasloviAdmin">Survey Results</h3>
                                    <table id="tabelaAnketa">
                                        <tr>
                                            <th class="tabelaImeAnketa">First Name</th>
                                            <th class="tabelaPrezimeAnketa">Last Name</th>
                                            <th class="tabelaOdgovorAnketa">Answer</th>
                                        </tr>
                                        <?php 
                                        $upit4 = "SELECT k.ime as ime, k.prezime as prezime, o.odg as odgovor From korisnik k inner join korisnik_odgovor ko ON k.id = ko.id_korisnika INNER join odgovor o ON ko.id_odgovora = o.id";
                                        $rezultat4 = $konekcija->query($upit4);
                                        foreach($rezultat4 as $ank){
                                            echo "<tr>
                                            <td class='tabelaImeAnketa'>$ank->ime</td>
                                            <td class='tabelaPrezimeAnketa'>$ank->prezime</td>
                                            <td class='tabelaOdgovorAnekta'>$ank->odgovor</td>
                                            </tr>";
                                        }
                                        ?>
                                    </table>
                            </div>
                    <div class="sidebar">
                    </div>
                    <div class="clear"></div>
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