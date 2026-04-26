<?php
$message = "";
if (isset($_POST['submit'])) {
    $conn = mysqli_connect("localhost", "root", "", "semester_6");
    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $sub1 = $_POST['sub1'];
    $sub2 = $_POST['sub2'];
    $sub3 = $_POST['sub3'];
    $sub4 = $_POST['sub4'];
    $sql = "INSERT INTO students (rollno, name, sub1, sub2, sub3, sub4)
            VALUES ('$rollno', '$name', '$sub1', '$sub2', '$sub3', '$sub4')";
    if (mysqli_query($conn, $sql)) {
        $message = "Student record inserted successfully";
    } else {
        $message = "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Insert Student</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
        }
        form {
            margin-top: 20px;
        }
        input {
            padding: 8px;
            margin: 5px;
        }
        .btn {
            padding: 10px 20px;
            background-color: #008CBA;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #005f73;
        }
        .message {
            color: green;
            font-weight: bold;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <h2>Enter Student Marks</h2>
    <?php
    if ($message != "") {
        echo "<div class='message'>$message</div>";
    }
    ?>
    <form method="POST">
        Roll Number: <input type="number" name="rollno" required><br><br>
        Name: <input type="text" name="name" required><br><br>
        Subject 1: <input type="number" name="sub1" required><br><br>
        Subject 2: <input type="number" name="sub2" required><br><br>
        Subject 3: <input type="number" name="sub3" required><br><br>
        Subject 4: <input type="number" name="sub4" required><br><br>
        <input type="submit" name="submit" value="Insert" class="btn">
    </form>
    <br>
    <form action="Home.php">
        <input type="submit" value="Back to Home" class="btn">
    </form>
</body>
</html>