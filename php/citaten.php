<?php
$a = "Ik heb niet gefaald";
$b = "die niet werken";
$c = 20000;

$edison_citaat = $a . ". Ik heb alleen " . $c . " manieren gevonden " . $b . ".";

$a = "die geen fout";
$b = "en";
$c = "niet.";

$plesman_citaat = "Mensen " . $a . "en maken, werken " . $b . " " . $c;
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Citaten</title>
</head>
<body>
    <p>
        <?php echo $edison_citaat; ?><br>
        - Thomas Edison
    </p>
    <p>
        <?php echo $plesman_citaat; ?><br>
        - Albert Plesman (KLM)
    </p>
</body>
</html>
