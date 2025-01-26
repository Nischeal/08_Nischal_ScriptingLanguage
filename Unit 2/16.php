<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars Needed</title>
</head>
<body>
    <h1>Calculate Number of Cars Needed</h1>
    <form method="post">
        <label>Number of People: </label>
        <input type="number" name="people" required>
        <button type="submit">Calculate</button>
    </form>
    <?php
    function carsNeeded($people) {
        return ceil($people / 5);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $people = $_POST['people'];
        $cars = carsNeeded($people);
        echo "<p>Cars Needed: $cars</p>";
    }
    ?>
</body>
</html>
