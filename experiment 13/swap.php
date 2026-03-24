<!DOCTYPE html>
<html>
<head>  <link rel="stylesheet" href="style.css">  </head>
<body>
    <h3>Swap Two Numbers</h3>
    <form method="post" class="container">
        Number 1: <input type="number" name="num1" required><br><br>
        Number 2: <input type="number" name="num2" required><br><br>
        <input type="submit" name="swap" value="Swap">
    </form>
    <?php
    if (isset($_POST['swap'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        echo "<h4>Before Swapping:</h4>";
        echo "Number 1 = $num1 <br>";
        echo "Number 2 = $num2 <br>";
        // Swapping using temporary variable
        $temp = $num1;
        $num1 = $num2;
        $num2 = $temp;
        echo "<h4>After Swapping:</h4>";
        echo "Number 1 = $num1 <br>";
        echo "Number 2 = $num2";
    }
    ?>
</body>
</html>