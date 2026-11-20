<?php
function users(): array
{
    if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
        http_response_code(400);
       
        return [
            'titel' => 'Ongeldig ID',
            'html'  => '
                <h1>Ongeldig ID</h1>
                <p>Gebruik een numeriek ID.</p>
                <p><a href="javascript:history.back()">Terug</a> | <a href="index.php?controller=home">Home</a></p>
            '
        ];
    }

    $id = (int) $_GET['id'];

    return [
        'titel' => 'Gebruiker',
        'html'  => "
            <h1>Gebruiker</h1>
            <p>ID: {$id}</p>
            <p><a href=\"javascript:history.back()\">Terug</a> | <a href=\"index.php?controller=home\">Home</a></p>
        "
    ];
}
