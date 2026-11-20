<?php

function page1()
{
    return [
        "titel" => "Pagina 1",
        "html" => '
            <h1>Pagina 1</h1>

            ' . renderNav() . '

            <p>hoireza1.</p>
        '
    ];
}