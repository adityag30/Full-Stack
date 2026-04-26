<?php
$message = "";
if (isset($_POST['update'])) {
    $conn = mysqli_connect("localhost", "root", "", "semester_6");
    $rollno = $_POST['rollno'];
    $sub1 = $_POST['sub1'];
    $sub2 = $_POST['sub2'];
    $sub3 = $_POST['sub3'];
    $sub4 = $_POST['sub4'];
    $sql = "UPDATE students 
            SET sub1='$sub1', sub2='$sub2', sub3='$sub3', sub4='$sub4'
            WHERE rollno='$rollno'";
    mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn) > 0) {
        $message = "Student record updated successfully";
    } else {
        $message = "Cannot update: Roll number not found";
    }
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Student</title>
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
        <h2>Update Student Marks</h2>
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
                    <td>Subject 1:</td>
                    <td><input type="number" name="sub1" required></td>
                </tr>
                <tr>
                    <td>Subject 2:</td>
                    <td><input type="number" name="sub2" required></td>
                </tr>
                <tr>
                    <td>Subject 3:</td>
                    <td><input type="number" name="sub3" required></td>
                </tr>
                <tr>
                    <td>Subject 4:</td>
                    <td><input type="number" name="sub4" required></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;">
                        <input type="submit" name="update" value="Update" class="btn">
                    </td>
                </tr>
            </table>
        </form>
        <br>
        <button class="btn" onclick="window.location.href='Home.php'">Back to Home</button>
    </div>
</body>
</html>