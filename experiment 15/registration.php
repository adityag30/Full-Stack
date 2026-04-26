<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Course Registration Form</title>
    <style>
        body {
            background-color: rgb(252, 248, 246);
        }
        input[type=submit], input[type=reset] {
            background-color: darkblue;
            color: white;
            margin: 4px 2px;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: rgb(3, 177, 3);
        }
        input[type=reset]:hover {
            background-color: rgb(209, 4, 4);
        }
        input[type=text],input[type=email],input[type=number] {
            width: 50%;
            padding: 12px 20px;
            border: 1px solid blue;
            border-radius: 4px;
            cursor: pointer;
        }
        input:invalid {
            border-color: rgb(209, 4, 4);
        }
        input:valid {
            border-color: rgb(3, 177, 3);
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
    <h1>Student Course Registration Form</h1>
    <form action="details.php" method="post">
        <label for="name">Student Name</label><br>
        <input type="text" id="name" name="name" required minlength="3" maxlength="30"><br><br>
        <label for="email">University Email ID</label><br>
        <input type="email" id="email" name="email" pattern="[A-Za-z0-9._]+@geu.ac.in"><br><br>
        <label for="rollno">USN/Roll Number</label><br>
        <input type="number" id="rollno" name="rollno"><br><br>
        <label for="course">Course</label><br>
        <select name="course" id="course">
            <option value="B.Tech">B.Tech</option>
            <option value="M.Tech">M.Tech</option>
            <option value="BCA">BCA</option>
            <option value="BBA">BBA</option>
        </select><br><br>
        <label for="age">Age</label><br>
        <input type="number" id="age" name="age" min="18" max="30"><br><br>
        <label for="gender">Gender</label><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br><br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
        <form action="logout.php" method="POST">
            <button type="submit">Logout</button>
        </form>
    </form>
</body>
</html>