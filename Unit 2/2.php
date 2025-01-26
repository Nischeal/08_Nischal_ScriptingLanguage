<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area of a Circle</title>
</head>
<body>
    <h1>Calculate Area of a Circle</h1>
    <form method="post">
        <label>Radius: </label>
        <input type="number" name="radius" step="0.01" required>
        <button type="submit">Calculate</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $radius = $_POST['radius'];
        define('PI', 3.14159);
        $area = PI * $radius * $radius;
        echo "<p>Area of Circle: $area</p>";
    }
    ?>
</body>
</html>
