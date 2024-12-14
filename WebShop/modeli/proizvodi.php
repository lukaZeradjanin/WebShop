<?php

$baza = new mysqli("localhost", "root", "", "web_shop");

if($baza->connect_error)
{
    die("Imte gresku");
}
if(!isset($_POST['ime']) || empty($_POST['ime']))
{
    die("Morate uneti ime");
}
if(!isset($_POST['opis']) || empty($_POST['opis']))
{
    die("Morate uneti opis");
}
if(!isset($_POST['cena']) || empty($_POST['cena']))
{
    die("Morate uneti cenu");
}
if(!isset($_POST['slika']) || empty($_POST['slika']))
{
    die("Morate uneti sliku");
}
if(!isset($_POST['kolicina']) || empty($_POST['kolicina']))
{
    die("Morate uneti kolicina");
}


$ime = $_POST['ime'];
$opis=$_POST['opis'];
$cena =$_POST['cena'];
$slika=$_POST['slika'];
$kolicina = $_POST['kolicina'];

$query = "INSERT INTO proizvodi (ime,opis,cena,slika,kolicina) values ('$ime', '$opis', '$cena', '$slika', '$kolicina')";

$rez=$baza->query($query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="listProuct.php">
        <input type="submit" value="Pogledaj listirane proizvode">
        
    </form>
   

</body>
</html>