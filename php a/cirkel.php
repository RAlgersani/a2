<?php
$diameter = 0;
$straal = 0;
$omtrek = 0;
$oppervlakte = 0;

if (isset($_POST["diameter"])) {
    $diameter = (float)$_POST["diameter"];
    
    if ($diameter > 0) {
        $straal = $diameter / 2;
        $omtrek = pi() * $diameter;
        $oppervlakte = pi() * $straal * $straal;
    }
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Cirkel Berekening</title>
</head>
<body>
    <form method="post" action="">
        <label for="diameter">Diameter (in cm):</label>
        <input type="number" step="any" name="diameter" id="diameter" required>
        <button type="submit">Bereken</button>
    </form>

    <?php if ($diameter > 0): ?>
        <p>
            Diameter: <?php echo $diameter; ?> cm<br>
            Straal: <?php echo $straal; ?> cm<br>
            Omtrek: <?php echo round($omtrek, 4); ?> cm<br>
            Oppervlakte: <?php echo round($oppervlakte, 4); ?> cm²
        </p>
    <?php endif; ?>
</body>
</html>
