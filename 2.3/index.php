<?php
require_once __DIR__ . '/app/core/trigger.php';
$pagina = triggerController();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($pagina['titel']) ?></title>
</head>
<body>
    <?= $pagina['html'] ?>
</body>
</html>
