<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Data Types</title>
</head>
<body>
    <h1>PHP Data Types</h1>
    <?php
    $stringVar = "Hello, PHP!";
    $intVar = 42;
    $floatVar = 3.14;
    $boolVar = true;

    echo "<p>String: $stringVar</p>";
    echo "<p>Integer: $intVar</p>";
    echo "<p>Float: $floatVar</p>";
    echo "<p>Boolean: " . ($boolVar ? 'true' : 'false') . "</p>";
    $arrayVar = array("PHP", "HTML", "CSS");

    echo "<h2>Array Content:</h2>";
    echo "<pre>";
    print_r($arrayVar);
    echo "</pre>";

    echo "<h2>Array Data Types:</h2>";
    echo "<pre>";
    var_dump($arrayVar);
    echo "</pre>";
    echo "<h2>Data Type Checking:</h2>";
    echo "<p>\$stringVar is of type: " . gettype($stringVar) . "</p>";
    echo "<p>\$intVar is of type: " . gettype($intVar) . "</p>";
    echo "<p>\$floatVar is of type: " . gettype($floatVar) . "</p>";
    echo "<p>\$boolVar is of type: " . gettype($boolVar) . "</p>";
    ?>
</body>
</html>
