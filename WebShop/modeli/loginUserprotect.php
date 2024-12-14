
<?php
$baza = new mysqli("localhost", "root", "", "web_shop");

if($baza->connect_error)
{
    die("Imte gresku");
}

?>



<?php
$email = $_POST['email1'];
$sifra = $_POST['sifra1'];

if(!isset($_POST['email1']) || empty($_POST['email1']))
{
    die("Morate uneti email");
}
if(!isset($_POST['sifra1']) || empty($_POST['sifra1']))
{
    die("Morate uneti sifru");
}




$query = "SELECT * from korsinci where email like '" . $email . "'";

$rez = $baza -> query($query);

if($rez->num_rows ==1)
{
    $korisnik = $rez->fetch_assoc();
    $verifikovanasifra = password_verify($sifra,$korisnik['sifra']);

    if($verifikovanasifra==true)
    {
        echo "Dobrodosli:" .  $korisnik['email'];
        header("Location: addProducts.php");
    }
    else
    {
        echo "Nije dobra sifra";
    }
}
else
{
    echo "Nema korisnika";
}










?>