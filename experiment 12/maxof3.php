<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max of 3 Numbers</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" class="container">
        A: <input type="number" name="a" required><br>
        B: <input type="number" name="b" required><br>
        C: <input type="number" name="c" required><br><br>
        <input type="submit" name="max" value="Find Max">
    </form>
    <?php
    if (isset($_POST['max'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $max = max($a, $b, $c);
        echo "<h1>Maximum = $max</h1>";
    }
    ?>
</body>
</html>