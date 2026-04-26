<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                background-color: lightgreen;
            }
        </style>
    </head>
    <body>
        <?php 
        session_start();
        if(isset($_SESSION['visits'])){
            $_SESSION['visits']++;
        } else {
            $_SESSION['visits'] = 1;
        }
        if(isset($_POST['name'])){
            $_name = $_POST['name'];
            setcookie('username', $_name, time() + 3600);
            header("Location: cookie.php");
            exit();
        }
        ?>
        <h2  style="margin-top: 300px; margin-left:530px;">Welcome to our website</h2>
        <?php 
        if(isset($_COOKIE['username'])){
            echo "<h2 style='margin-left: 530px;'>Welcome back " . $_COOKIE['username']." </h2>";
        } else {
        ?>
            <form method="post">
                <label for="name" style='margin-left: 500px;'>Enter your name: </label>
                <input type="text" name="name">
                <input type="submit" name="submit">
            </form>
        <?php 
        }
        echo "<h3 style='margin-left: 550px;'><br>Number of visits:". $_SESSION['visits']." </h3> " ;
        ?>
        <br>
        <a href="logout.php" style='margin-left: 600px;'>Logout</a>
    </body>
</html>