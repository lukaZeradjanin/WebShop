
<?php   

    require_once "modeli/baza.php";
if(!isset($_POST['email']) || empty($_POST['email']))
{
    die("Morate uneti email");
}
if(!isset($_POST['sifra']) || empty($_POST['sifra']))
{
    die("Morate uneti sifru");
}

$email = $_POST['email'];
$sifra = password_hash($_POST['sifra'], PASSWORD_BCRYPT);
 
    
    $query = "INSERT INTO korsinci (email,sifra) values ('$email','$sifra')";
    
    $rezultat = $baza->query($query);
    
 

    

?>