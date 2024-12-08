<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Rectangle Area</title>
</head>
<body>
    <h1>Calculate the Area of a Rectangle</h1>
    <form method="post">
        <label for="length">Enter Length:</label>
        <input type="number" id="length" name="length" step="any" required>
        <br><br>
        <label for="width">Enter Width:</label>
        <input type="number" id="width" name="width" step="any" required>
        <br><br>
        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the input values
        $length = $_POST['length'];
        $width = $_POST['width'];

        // Validate inputs
        if ($length > 0 && $width > 0) {
            // Calculate the area
            $area = $length * $width;

            // Display the result
            echo "<h2>The area of the rectangle with length $length and width $width is $area.</h2>";
        } else {
            echo "<h2>Please enter valid positive numbers for length and width.</h2>";
        }
    }
    ?>
</body>
</html>
