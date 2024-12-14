<?php

$baz = new mysqli("localhost", "root", "", "web_shop");


$ime1 = $_POST['ime1'];
$opis1 = $_POST['opis1'];

if(!isset($_POST['ime1']) || empty($_POST['ime1']))
{
    die("Morate uneti imel");
}
if(!isset($_POST['opis1']) || empty($_POST['opis1']))
{
    die("Morate uneti opis");
}

$rez = $baz ->query($query = "SELECT * FROM proizvodi WHERE ime LIKE '%$ime1%' OR opis = '%$opis1%'");

$proizvod = $rez->fetch_assoc();

echo $proizvod['ime'];
echo $proizvod['opis'];
echo $proizvod['cena'];
echo $proizvod['slika'];
echo $proizvod['kolicina'];



?>