<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Length Comparison</title>
</head>
<body>
    <h1>Compare String Lengths</h1>
    <form method="post">
        <label>String 1: </label>
        <input type="text" name="str1" required>
        <label>String 2: </label>
        <input type="text" name="str2" required>
        <button type="submit">Compare</button>
    </form>
    <?php
    function compareStringLengths($str1, $str2) {
        return strlen($str1) === strlen($str2);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $str1 = $_POST['str1'];
        $str2 = $_POST['str2'];
        $result = compareStringLengths($str1, $str2) ? 'True' : 'False';
        echo "<p>Strings are of equal length: $result</p>";
    }
    ?>
</body>
</html>
