<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" class="container">
        A: <input type="number" name="a" required><br>
        B: <input type="number" name="b" required><br>
        C: <input type="number" name="c" required><br><br>
        <input type="submit" name="calc" value="Calculate">
    </form>
    <?php
    if (isset($_POST['calc'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $avg = ($a + $b + $c) / 3;
        $smallest = min($a, $b, $c);
        echo "<h1>Average = $avg <br>";
        echo "Smallest = $smallest</h1>";
    }
    ?>
</body>
</html>