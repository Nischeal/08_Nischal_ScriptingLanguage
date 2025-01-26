<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Power</title>
</head>
<body>
    <h1>Calculate Power (Voltage x Current)</h1>
    <form method="post">
        <label>Voltage: </label>
        <input type="number" name="voltage" step="0.01" required>
        <label>Current: </label>
        <input type="number" name="current" step="0.01" required>
        <button type="submit">Calculate</button>
    </form>
    <?php
    function calculatePower($voltage, $current) {
        return $voltage * $current;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $voltage = $_POST['voltage'];
        $current = $_POST['current'];
        $power = calculatePower($voltage, $current);
        echo "<p>Power: $power Watts</p>";
    }
    ?>
</body>
</html>
