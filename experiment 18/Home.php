<?php
$message = "";
if (isset($_POST['create'])) {
    $dbname = $_POST['dbname'];
    $conn = mysqli_connect("localhost", "root", "");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS $dbname");
    mysqli_close($conn);
    $conn = mysqli_connect("localhost", "root", "", $dbname);
    $sql = "CREATE TABLE IF NOT EXISTS students (
        id INT AUTO_INCREMENT PRIMARY KEY,
        rollno INT UNIQUE,
        name VARCHAR(50),
        sub1 INT,
        sub2 INT,
        sub3 INT,
        sub4 INT
    )";
    if (mysqli_query($conn, $sql)) {
        $message = "Database & Table Created Successfully";
    } else {
        $message = "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
        }
        .container {
            width: 60%;
            margin: 20px auto;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin: auto;
        }
        th {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
        }
        td {
            padding: 10px;
            text-align: left;
        }
        input {
            padding: 8px;
            width: 100%;
        }
        .btn {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            margin: 5px;
        }
        .btn:hover {
            background-color: #2e7d32;
        }
        .message {
            color: green;
            font-weight: bold;
            margin: 15px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Home - Create Database & Table</h2>
        <?php
        if ($message != "") {
            echo "<div class='message'>$message</div>";
        }
        ?>
        <form method="POST">
            <table>
                <tr>
                    <td>Database Name:</td>
                    <td><input type="text" name="dbname" required></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;">
                        <input type="submit" name="create" value="Create" class="btn">
                    </td>
                </tr>
            </table>
        </form>
        <br><br>
        <form action="Insert.php" style="display:inline;">
            <input type="submit" value="Insert" class="btn">
        </form>
        <form action="Update.php" style="display:inline;">
            <input type="submit" value="Update" class="btn">
        </form>
        <form action="Delete.php" style="display:inline;">
            <input type="submit" value="Delete" class="btn">
        </form>
        <form action="View.php" style="display:inline;">
            <input type="submit" value="View" class="btn">
        </form>
    </div>
    </body>
</html>