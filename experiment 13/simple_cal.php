<!DOCTYPE html>
<html>
<head>  <link rel="stylesheet" href="style.css">  </head>
<body>
    <form method="post" class="container">
        Number 1: <input type="number" name="a" required><br>
        Number 2: <input type="number" name="b" required><br>
        Operator:
        <select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br><br>
        <input type="submit" name="calc" value="Calculate"><br>
    </form>
    <?php
    if (isset($_POST['calc'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $op = $_POST['op'];
        switch ($op) {
            case "+":
                $c = $a + $b;
                echo "<h1>$c</h1>";
                break;
            case "-":
                $c = $a - $b;
                echo "<h1>$c</h1>";
                break;
            case "*":
                $c = $a * $b;
                echo "<h1>$c</h1>";
                break;
            case "/":
                if($b != 0){
                    $c = $a / $b;
                    echo "<h1>$c</h1>";
                }    
                else{
                    echo "<h1>Division by zero error</h1>";
                }
                break;
        }
    }
    ?>
</body>
</html>