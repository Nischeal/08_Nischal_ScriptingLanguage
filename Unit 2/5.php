<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area of a Triangle</title>
</head>
<body>
    <h1>Calculate Area of a Triangle</h1>
    <form method="post">
        <label>Base: </label>
        <input type="number" name="base" step="0.01" required>
        <label>Height: </label>
        <input type="number" name="height" step="0.01" required>
        <button type="submit">Calculate</button>
    </form>
    <?php
    function triangleArea($base, $height) {
        return 0.5 * $base * $height;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $base = $_POST['base'];
        $height = $_POST['height'];
        $area = triangleArea($base, $height);
        echo "<p>Area of Triangle: $area</p>";
    }
    ?>
</body>
</html>
