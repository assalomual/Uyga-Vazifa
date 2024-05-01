<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ikkinchi Fayl</title><link rel="stylesheet" href="ikki.css">
</head>
<body>
<div class="container">
        <h1 class="Komronbek">Komronbek</h1>
    </div>
<div class="a">
<?php
$isminiz = $_POST['ism'];
$emailingiz = $_POST['email'];
$parolingiz = $_POST['parol'];
$parol_takrori = $_POST['parol_takror'];

echo "<h1>Ismingiz: $isminiz  <br></h1>";
echo "<h1>Emailingiz:  $emailingiz <br></h1> ";


if ($parolingiz === $parol_takrori) {
    echo "<h1>Parol to'g'ri kiritilgan. </h1>";
} else {
    echo "<h1>Parolni bir xil kiriting </h1>";
}
?>
<form action="uyga.php">
    <input type="submit" value="Ortga">
</form>
</div>
</body>
</html>