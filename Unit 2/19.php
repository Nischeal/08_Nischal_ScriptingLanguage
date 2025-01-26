<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add 'if' to String</title>
</head>
<body>
    <h1>Add 'if' to String</h1>
    <form method="post">
        <label>Input String: </label>
        <input type="text" name="string" required>
        <button type="submit">Transform</button>
    </form>
    <?php
    function addIf($string) {
        return substr($string, 0, 2) === "if" ? $string : "if " . $string;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $string = $_POST['string'];
        $result = addIf($string);
        echo "<p>Result: $result</p>";
    }
    ?>
</body>
</html>
