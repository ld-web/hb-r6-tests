<?php

require_once __DIR__ . '/verificationPassword.php';

$testData = [
    'aZe789sq4MWK5AUE52smyoHYK' => true,
    '1234' => false,
    'toto' => false,
    'UgSU4MSuEINH' => true
];

foreach ($testData as $password => $expectedResult) {
    $result = verificationPassword($password);

    if ($result === $expectedResult) {
        echo "✅ $password" . PHP_EOL;
    } else {
        echo "⛔ $password" . PHP_EOL;
    }
}