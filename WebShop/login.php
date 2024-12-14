<?php
$baza = new mysqli("localhost", "root", "", "web_shop");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registracija</title>
</head>
<body>
    <form method="post"  action="uspesnolog.php">
  <input type="email" name="email" placeholder="Unesite email">
    <input type="password" name="sifra"placeholder="Unesite sifru">
    <input type="submit" value="Napravi nalog" name="dodaj">
    </form>
  
</body>
</html>