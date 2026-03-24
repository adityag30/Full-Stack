<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd and Even</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" class="container">
        Enter Number : <input type='number' name='num'><br><br>
        <input type='submit'>
    </form>
    <?php
    if (isset($_POST['num'])) {
        $a = $_POST['num'];
        if ($a % 2 == 0) echo "<h1>Even</h1>";
        else echo "<h1>Odd</h1>";
    }
    ?>
</body>
</html>