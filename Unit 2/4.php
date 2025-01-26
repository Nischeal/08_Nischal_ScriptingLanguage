<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Two Numbers</title>
</head>
<body>
    <h1>Calculate Sum</h1>
    <form method="post">
        <label>Number 1: </label>
        <input type="number" name="num1" required>
        <label>Number 2: </label>
        <input type="number" name="num2" required>
        <button type="submit">Calculate</button>
    </form>
    <?php
    function calculateSum($num1, $num2) {
        return $num1 + $num2;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $sum = calculateSum($num1, $num2);
        echo "<p>Sum: $sum</p>";
    }
    ?>
</body>
</html>
