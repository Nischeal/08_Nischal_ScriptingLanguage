<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum or Triple Sum</title>
</head>
<body>
    <h1>Calculate Sum or Triple Sum</h1>
    <form method="post">
        <label>Number 1: </label>
        <input type="number" name="num1" required>
        <label>Number 2: </label>
        <input type="number" name="num2" required>
        <button type="submit">Calculate</button>
    </form>
    <?php
    function sumOrTriple($num1, $num2) {
        return $num1 === $num2 ? 3 * ($num1 + $num2) : $num1 + $num2;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $result = sumOrTriple($num1, $num2);
        echo "<p>Result: $result</p>";
    }
    ?>
</body>
</html>
