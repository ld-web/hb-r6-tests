<?php

require_once __DIR__ . '/verificationPassword.php';

// Arrange
$testData = [
    'aZe789sq4MWK5AUE52smyoHYK' => true,
    '1234' => false,
    'toto' => false,
    'UgSU4MSuEINH' => true,
    'Bobby' => true
];

foreach ($testData as $password => $expectedResult) {
    // Act
    $result = verificationPassword($password);

    try {
        // Assert
        assert($result === $expectedResult);
        echo "✅ $password" . PHP_EOL;
    } catch(AssertionError $e) {
        echo "⛔ $password" . PHP_EOL;
    }
}