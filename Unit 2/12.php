<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursive String Length</title>
</head>
<body>
    <h1>Recursive String Length</h1>
    <form method="post">
        <label>String: </label>
        <input type="text" name="string" required>
        <button type="submit">Get Length</button>
    </form>
    <?php
    function recursiveLength($str) {
        return $str === "" ? 0 : 1 + recursiveLength(substr($str, 1));
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $string = $_POST['string'];
        $length = recursiveLength($string);
        echo "<p>String Length: $length</p>";
    }
    ?>
</body>
</html>
