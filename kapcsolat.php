<?php
//---------------!!!!  Át kell írni mielőtt feltöltöd FTP-n  
//---------------!!!!  LOCALHOST  
/* $server     = "localhost";
$username   = "root";
$password   = "";
$dbname     = "caloriam_copy"; */


//---------------!!!!  TARHELYPARK  
$server     = "cpanel34.tarhelypark.hu";
$username   = "caloriam_mindenki";
$password   = "Mindenki12345";
$dbname     = "caloriam_adatbazis";
$kapcsolat = new mysqli($server, $username, $password, $dbname);

if($kapcsolat->connect_error)
{
    die('Kapcsolódási hiba: '.$kapcsolat->connect_error);
}
/*
//teszt: adatbeszúrása táblába

$email = "emailcim2";
$nev = "testnev2";
$jelszo = "testpwd";
$jelszo = md5($jelszo);
$felhasznalonev = "testfelhnev2";
$kapcsolat->query("INSERT into felhasznalok(email, nev, jelszo, felhasznalonev) values ('$email','$nev','$jelszo','$felhasznalonev')"); 
*/

$kapcsolat->query("SET NAMES 'UTF8'");
$kapcsolat->query("SET CHARACTER SET 'UTF8'");


?>