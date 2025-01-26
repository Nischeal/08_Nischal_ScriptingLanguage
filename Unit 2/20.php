<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repeat Front Characters</title>
</head>
<body>
    <h1>Repeat Front Characters</h1>
    <form method="post">
        <label>Input String: </label>
        <input type="text" name="string" required>
        <button type="submit">Transform</button>
    </form>
    <?php
    function repeatFrontChars($string) {
        $front = substr($string, 0, 2);
        return strlen($string) < 2 ? $string : str_repeat($front, 4);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $string = $_POST['string'];
        $result = repeatFrontChars($string);
        echo "<p>Result: $result</p>";
    }
    ?>
</body>
</html>
