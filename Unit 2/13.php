<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shape Area</title>
</head>
<body>
    <h1>Calculate Area of a Shape</h1>
    <form method="post">
        <label>Base: </label>
        <input type="number" name="base" step="0.01" required>
        <label>Height: </label>
        <input type="number" name="height" step="0.01" required>
        <label>Shape: </label>
        <select name="shape" required>
            <option value="triangle">Triangle</option>
            <option value="parallelogram">Parallelogram</option>
        </select>
        <button type="submit">Calculate</button>
    </form>
    <?php
    function calculateShapeArea($base, $height, $shape) {
        if ($shape === 'triangle') {
            return 0.5 * $base * $height;
        } elseif ($shape === 'parallelogram') {
            return $base * $height;
        }
        return 0;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $base = $_POST['base'];
        $height = $_POST['height'];
        $shape = $_POST['shape'];
        $area = calculateShapeArea($base, $height, $shape);
        echo "<p>Area of $shape: $area</p>";
    }
    ?>
</body>
</html>
