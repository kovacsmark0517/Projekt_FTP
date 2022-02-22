<?php 
require_once("kapcsolat.php");
if(isset($_POST['submit']))
{
    $jelszo = md5($_POST['jelszo']);
    $email = $_POST['email'];

    $sql = "SELECT asz FROM felhasznalok WHERE (email = '$email' and jelszo = '$jelszo')";
    $lekerdez = $kapcsolat->query($sql);
    $talalat = mysqli_num_rows($lekerdez);
    $tomb = $lekerdez->fetch_assoc();
    $azonosito = $tomb['asz'];
    

    if($talalat == 1)
    {
        session_start();
        $_SESSION['azonosito'] = $azonosito;
        header("location: belepve.php");
    }
    else
    {
        header("location: index.php");
    }
}
else
{
    header("location: index.php"); //ha nem gombnyomásra éri el a fájlt akkor vissza dobja az index.php-ra 
}
?>