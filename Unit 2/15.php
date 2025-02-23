<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Value at Index</title>
</head>
<body>
    <h1>Find Value at a Given Index</h1>
    <form method="post">
        <label>Array (comma-separated): </label>
        <input type="text" name="array" required>
        <label>Index: </label>
        <input type="number" name="index" required>
        <button type="submit">Find</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $array = explode(',', $_POST['array']);
        $index = $_POST['index'];
        echo isset($array[$index]) ? "<p>Value: $array[$index]</p>" : "<p>Invalid index</p>";
    }
    ?>
</body>
</html>
