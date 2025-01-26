<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minutes to Seconds</title>
</head>
<body>
    <h1>Convert Minutes to Seconds</h1>
    <form method="post">
        <label>Minutes: </label>
        <input type="number" name="minutes" required>
        <button type="submit">Convert</button>
    </form>
    <?php
    function minutesToSeconds($minutes) {
        return $minutes * 60;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $minutes = $_POST['minutes'];
        $seconds = minutesToSeconds($minutes);
        echo "<p>$minutes minutes is equal to $seconds seconds.</p>";
    }
    ?>
</body>
</html>
