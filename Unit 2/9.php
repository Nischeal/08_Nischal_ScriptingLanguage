<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football Points</title>
</head>
<body>
    <h1>Calculate Football Team Points</h1>
    <form method="post">
        <label>Wins: </label>
        <input type="number" name="wins" required>
        <label>Draws: </label>
        <input type="number" name="draws" required>
        <label>Losses: </label>
        <input type="number" name="losses" required>
        <button type="submit">Calculate</button>
    </form>
    <?php
    function calculatePoints($wins, $draws, $losses) {
        return ($wins * 3) + ($draws * 1) + ($losses * 0);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $wins = $_POST['wins'];
        $draws = $_POST['draws'];
        $losses = $_POST['losses'];
        $points = calculatePoints($wins, $draws, $losses);
        echo "<p>Total Points: $points</p>";
    }
    ?>
</body>
</html>
