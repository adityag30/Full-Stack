<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: lightgoldenrodyellow;
        }
        input[type=submit] {
            background-color: darkblue;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: green;
        }
    </style>
    <title>Form Handling</title>
</head>
<body>
    <h1 style="color: darkblue">Login</h1>
    <form action="authentication.php" method="post">
        Username: <br><input type="text" name="username"><br><br>
        Password: <br><input type="text" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>