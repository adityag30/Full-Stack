<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $rollno = $_POST['rollno'] ?? '';
    $course = $_POST['course'] ?? '';
    $age = $_POST['age'] ?? '';
    $gender = $_POST['gender'] ?? '';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
    <style>
        body {
            background-color: rgb(252, 248, 246);
            font-family: Arial;
        }
        .container {
            width: 50%;
            margin: auto;
            padding: 20px;
            border: 2px solid darkblue;
            border-radius: 10px;
            background-color: white;
        }
        h2 {
            text-align: center;
            color: darkblue;
        }
        p {
            font-size: 18px;
        }
        .logout-btn {
            margin-top: 20px;
            text-align: center;
        }
        button {
            background-color: red;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome Student, you have registered successfully!</h2>
        <p><b>Name:</b> <?php echo $name ?></p>
        <p><b>Email:</b> <?php echo $email ?></p>
        <p><b>Roll Number:</b> <?php echo $rollno ?></p>
        <p><b>Course:</b> <?php echo $course ?></p>
        <p><b>Age:</b> <?php echo $age ?></p>
        <p><b>Gender:</b> <?php echo $gender ?></p>
    </div>
    <div class="logout-btn">
        <form action="logout.php" method="POST">
            <button type="submit">Logout</button>
        </form>
    </div>
</body>
</html>