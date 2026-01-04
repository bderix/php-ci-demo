<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Calculator;

$calc = new Calculator();
$result = $calc->add(2, 3);
?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>PHP CI/CD Demo</title>
</head>
<body>
<h1>PHP CI/CD Demo</h1>
<p>2 + 3 = <?= htmlspecialchars((string) $result, ENT_QUOTES, "UTF-8") ?></p>
</body>
</html>
