<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Legs</title>
</head>
<body>
    <h1>Calculate Total Animal Legs</h1>
    <form method="post">
        <label>Chickens: </label>
        <input type="number" name="chickens" required>
        <label>Cows: </label>
        <input type="number" name="cows" required>
        <label>Pigs: </label>
        <input type="number" name="pigs" required>
        <button type="submit">Calculate</button>
    </form>
    <?php
    function totalLegs($chickens, $cows, $pigs) {
        return ($chickens * 2) + ($cows * 4) + ($pigs * 4);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $chickens = $_POST['chickens'];
        $cows = $_POST['cows'];
        $pigs = $_POST['pigs'];
        $legs = totalLegs($chickens, $cows, $pigs);
        echo "<p>Total Legs: $legs</p>";
    }
    ?>
</body>
</html>
