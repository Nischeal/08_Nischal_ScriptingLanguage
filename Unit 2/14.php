<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Index</title>
</head>
<body>
    <h1>Find Index of a String in an Array</h1>
    <form method="post">
        <label>Array (comma-separated): </label>
        <input type="text" name="array" required>
        <label>Search String: </label>
        <input type="text" name="search" required>
        <button type="submit">Find</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $array = explode(',', $_POST['array']);
        $search = $_POST['search'];
        $index = array_search($search, $array);
        echo $index !== false ? "<p>Index of '$search': $index</p>" : "<p>'$search' not found in array</p>";
    }
    ?>
</body>
</html>
