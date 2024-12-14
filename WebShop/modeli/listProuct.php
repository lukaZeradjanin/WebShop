<?php
    $baza = new mysqli("localhost","root", "", "web_shop");
    $rezultat =$baza->query( "SELECT * from proizvodi");

    $prozivod = $rezultat->fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proizvoid</title>
</head>
<body>
    <?php foreach($prozivod as $prozivod):?>
        <h1><?=$prozivod['ime']?></h1>
        <p><?=$prozivod['opis']?></p>
        <p><?=$prozivod['cena']?></p>
        <p><?=$prozivod['kolicina']?></p>
        <?php if($prozivod['kolicina']==0):?>
            <p>Nema na stanju </p>
            <?php else: ?>
                <p>Ima na stanju</p>
                <?php endif;?>
                <a href="index.php?id=<?=$prozivod['id']?>">Pogledaj proizvod</a>
    <?php endforeach;?>
    
</body>
</html>