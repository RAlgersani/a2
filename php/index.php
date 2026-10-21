<?php
$voornaam = "Reza";
$achternaam = "Algersani";
$studentnummer = "97136029";
$klascode = "SD1A";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Mijn Info</title>
</head>
<body>
    <p>
        <?php echo $voornaam . " " . $achternaam; ?><br>
        <?php echo $studentnummer; ?><br>
        <?php echo $klascode; ?>
    </p>
</body>
</html>
