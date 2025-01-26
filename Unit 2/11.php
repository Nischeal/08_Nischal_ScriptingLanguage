<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisibility by 5</title>
</head>
<body>
    <h1>Check Divisibility by 5</h1>
    <form method="post">
        <label>Number: </label>
        <input type="number" name="number" required>
        <button type="submit">Check</button>
    </form>
    <?php
    function isDivisibleByFive($number) {
        return $number % 5 === 0;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $number = $_POST['number'];
        $result = isDivisibleByFive($number) ? 'True' : 'False';
        echo "<p>Is divisible by 5: $result</p>";
    }
    ?>
</body>
</html>
