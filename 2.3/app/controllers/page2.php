<?php

function page2()
{
    if (isset($_GET["id"])) {

        if (is_numeric($_GET["id"])) {
            $id = (int) $_GET["id"];
        } else {
            http_response_code(400);

            return [
                "titel" => "Ongeldig ID",
                "html" => '
                    <h1>Ongeldig ID</h1>
                    <p>Gebruik een numeriek ID.</p>
                    <a href="javascript:history.back()">Terug</a> |
                    <a href="index.php?controller=home">Home</a>
                '
            ];
        }

        $extra = "<br>ID: " . $id;
    } else {
        $extra = "";
    }

    return [
        "titel" => "Pagina 2",
        "html" => '
            <h1>Pagina 2</h1>

            ' . renderNav() . '

            <p>hoi.' . $extra . '</p>
        '
    ];
}