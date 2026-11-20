<?php
function home(): array
{
    return [
        'titel' => 'Home',
        'html'  => '
            <h1>Home</h1>
            ' . renderNav() . '
            <p>Welkom op de startpagina.</p>
        '
    ];
}
