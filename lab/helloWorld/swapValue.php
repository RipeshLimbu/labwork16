<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swap Two Variables</title>
</head>
<body>
    <h1>Swap Two Variables</h1>
    <form method="post">
        <label for="var1">Enter Value for Variable 1:</label>
        <input type="number" id="var1" name="var1" step="any" required>
        <br><br>
        <label for="var2">Enter Value for Variable 2:</label>
        <input type="number" id="var2" name="var2" step="any" required>
        <br><br>
        <button type="submit">Swap</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve values from form
        $var1 = $_POST['var1'];
        $var2 = $_POST['var2'];

        echo "<h2>Before Swapping: Variable 1 = $var1, Variable 2 = $var2</h2>";

        // Swap the values without using a temporary variable
        $var1 = $var1 + $var2;
        $var2 = $var1 - $var2;
        $var1 = $var1 - $var2;

        echo "<h2>After Swapping: Variable 1 = $var1, Variable 2 = $var2</h2>";
    }
    ?>
</body>
</html>
