<?php
function redirect(string $url): void
{
    header("Location: " . $url);
    exit;
}

function renderNav(): string
{
    return '
        <nav>
            <a href="index.php?controller=home">Home</a> |
            <a href="index.php?controller=page1">Pagina 1</a> |
            <a href="index.php?controller=page2">Pagina 2</a>
        </nav>
    ';
}

function triggerController(): array
{
    if (isset($_GET['terug'])) {
        redirect('index.php?controller=home');
    }

    $controller = !empty($_GET['controller']) ? $_GET['controller'] : 'home';
    $toegestaan = ['home', 'page1', 'page2', 'users'];

    if (!in_array($controller, $toegestaan, true)) {
        http_response_code(404);
        return [
            'titel' => 'Pagina niet gevonden',
            'html'  => '
                <h1>Pagina niet gevonden</h1>
                <p>Deze pagina bestaat niet.</p>
                <p><a href="index.php?controller=home">Naar home</a></p>
            '
        ];
    }

    require_once __DIR__ . '/../controllers/' . $controller . '.php';
    return $controller();
}
