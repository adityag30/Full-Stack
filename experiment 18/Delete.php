<?php
$message = "";
if (isset($_POST['delete'])) {
    $conn = mysqli_connect("localhost", "root", "", "semester_6");
    $rollno = $_POST['rollno'];
    $sql = "DELETE FROM students WHERE rollno='$rollno'";
    mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn) > 0) {
        $message = "Student record deleted successfully";
    } else {
        $message = "Cannot delete: Roll number not found";
    }
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Delete Student</title>
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
            width: 100%;
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
            padding: 8px 15px;
            font-size: 14px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px;
        }
        .btn:hover {
            background-color: #2e7d32;
        }
        .message {
            font-weight: bold;
            margin: 15px 0;
        }
        .success {
            color: green;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Delete Student</h2>
        <?php
        if ($message != "") {
            if (strpos($message, "successfully") !== false) {
                echo "<div class='message success'>$message</div>";
            } else {
                echo "<div class='message error'>$message</div>";
            }
        }
        ?>
        <form method="POST">
            <table>
                <tr>
                    <td>Roll Number:</td>
                    <td><input type="number" name="rollno" required></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;">
                        <input type="submit" name="delete" value="Delete" class="btn">
                    </td>
                </tr>
            </table>
        </form>
        <br>
        <button class="btn" onclick="window.location.href='Home.php'">Back to Home</button>
    </div>
</body>
</html>