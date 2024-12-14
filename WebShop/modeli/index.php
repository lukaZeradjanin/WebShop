<?php
    $baza = new mysqli("localhost", "root","", "web_shop");

    $idProizvoda = $_GET['id'];

    $rez = $baza->query("SELECT  * from proizvodi where id = $idProizvoda");

    if($rez->num_rows ==0)
    {
        die("Proizvod ne postoji");
    }

    $proizvod = $rez-> fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?=$proizvod['ime']?></h1>
    <p><?=$proizvod['opis']?></p>
    <p> Cena proizvoda:<?=$proizvod['cena']?></p>
    <?php if($proizvod['kolicina'] == 0):?>
        <p>Nema na stanju</p>
        <?php else:?>
            <p>Ima na stanju</p>



        <?php endif;?>
</body>
</html>