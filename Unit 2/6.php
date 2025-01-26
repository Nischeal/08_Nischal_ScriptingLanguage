<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age in Days</title>
</head>
<body>
    <h1>Convert Age in Years to Days</h1>
    <form method="post">
        <label>Age in Years: </label>
        <input type="number" name="age" required>
        <button type="submit">Convert</button>
    </form>
    <?php
    function ageInDays($age) {
        return $age * 365;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $age = $_POST['age'];
        $days = ageInDays($age);
        echo "<p>Age in Days: $days</p>";
    }
    ?>
</body>
</html>
