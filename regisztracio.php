<?php
require_once("kapcsolat.php");
/*
//teszt: adatbeszúrása táblába
$email = "emailcim2";
$nev = "testnev2";
$jelszo = "testpwd";
$jelszo = md5($jelszo);
$felhasznalonev = "testfelhnev2";
$kapcsolat->query("INSERT into felhasznalok(email, nev, jelszo, felhasznalonev) values ('$email','$nev','$jelszo','$felhasznalonev')");
*/

if(isset($_POST['submit']))
{
    $nev                = $_POST['nev'];
    $jelszo             = md5($_POST['jelszo']);
    $jelszo_megerosites = md5($_POST['jelszo_megerosites']);
    $email              = $_POST['email'];
     //Tesztelés használt kiírások
    /* echo $_POST['nev']."<br>";
    echo md5($_POST['jelszo'])."<br>";
    echo md5($_POST['jelszo_megerosites'])."<br>";
    echo $_POST['email']."<br>" ;*/

    if($jelszo!=$jelszo_megerosites){
        header('Location: index.php?jelszo=1');
    }
    else{
        $sql = "SELECT email FROM felhasznalok WHERE (email = '$email')";
        $lekerdez = $kapcsolat->query($sql);
        $talalat = mysqli_num_rows($lekerdez);

        if($talalat == 1)
        {
            header('Location: index.php?email=1');
        }
        else{
            $query = "INSERT into felhasznalok(email, nev, jelszo) values ('$email','$nev','$jelszo')";

            if($kapcsolat->query($query) === TRUE)
            {
                header('Location: index.php?reg=1');
            }
            else{
                echo "Error: " .$query. "<br>" .$kapcsolat->error;
            }
        }
    }
   
}
?>
