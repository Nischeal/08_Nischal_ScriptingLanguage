<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Difference from 51</title>
</head>
<body>
    <h1>Calculate Absolute Difference from 51</h1>
    <form method="post">
        <label>Number: </label>
        <input type="number" name="num" required>
        <button type="submit">Calculate</button>
    </form>
    <?php
    function differenceFrom51($num) {
        $diff = abs($num - 51);
        return $num > 51 ? 3 * $diff : $diff;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num = $_POST['num'];
        $result = differenceFrom51($num);
        echo "<p>Result: $result</p>";
    }
    ?>
</body>
</html>
