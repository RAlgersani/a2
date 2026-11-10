<?php
$pizza_p = "";
$extra_1 = "";
$extra_2 = "";
$extra_3 = "";
$prijs = 0;

if (!empty($_GET['pizza'])) {
    $pizza = $_GET['pizza'];
    if ($pizza == 1) {
        $pizza_p = "Spianata Piccante: € 12,50";
        $prijs = 12.50;
    } elseif ($pizza == 2) {
        $pizza_p = "Seppi: € 11,50";
        $prijs = 11.50;
    } elseif ($pizza == 3) {
        $pizza_p = "Tirato: € 10,50";
        $prijs = 10.50;
    }
} elseif (!empty($_GET)) {
    $pizza_p = "Kies eerst een pizza.";
}

if (isset($_GET['kaas'])) {
    $extra_1 = "Extra Kaas: € 1,50";
    $prijs += 1.50;
}
if (isset($_GET['olijf'])) {
    $extra_2 = "Olijven: € 2,50";
    $prijs += 2.50;
}
if (isset($_GET['bezorg'])) {
    $extra_3 = "Bezorging: € 3,50";
    $prijs += 3.50;
}
?>

<form method="get">
    <h1>Kies je pizza</h1>
    <table>
        <tr>
            <td><img src="imagess/pozzasal.png" height="275" width="275" alt="Spianata Piccante"></td>
            <td><img src="imagess/ruck.png" height="275" width="275" alt="Seppi"></td>
            <td><img src="imagess/meat.png" height="275" width="275" alt="Tirato"></td>
        </tr>
        <tr>
            <td><label><input type="radio" name="pizza" value="1"> Spianata Piccante - € 12,50</label></td>
            <td><label><input type="radio" name="pizza" value="2"> Seppi - € 11,50</label></td>
            <td><label><input type="radio" name="pizza" value="3"> Tirato - € 10,50</label></td>
        </tr>
    </table>

    <h1>Extra's</h1>
    <table>
        <tr>
            <td><img src="imagess/keas.png" height="150" width="150" alt="Kaas"></td>
            <td><img src="imagess/oli.png" height="150" width="150" alt="Olijven"></td>
        </tr>
        <tr>
            <td><label><input type="checkbox" name="kaas" value="1"> Kaas - € 1,50</label></td>
            <td><label><input type="checkbox" name="olijf" value="2"> Olijven - € 2,50</label></td>
        </tr>
    </table>

    <br>
    <label><input type="checkbox" name="bezorg" value="3"> Bezorgen - € 3,50</label>
    <br><br>
    <button type="submit">Bereken totaal</button>
</form>

<hr>
<p><?= $pizza_p ?></p>
<p><?= $extra_1 ?></p>
<p><?= $extra_2 ?></p>
<p><?= $extra_3 ?></p>
<?php if ($prijs > 0): ?>
    <p><strong>Totaal: € <?= number_format($prijs, 2, ',', '.') ?></strong></p>
<?php endif; ?>
