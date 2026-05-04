<!doctype html>
<html lang="en">
<head>
    <title>Simple Form</title>
    <style>
        body {
            background-color: #f1e779;
        }
        .form-container {
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border: 1px solid #4830d1;
            border-radius: 5px;
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input {
            width: 100%;
            padding: 6px;
            margin-top: 5px;
            border: 1px solid #0b0b0b;
            border-radius: 3px;
        }
        button {
            width: 60%;
            margin-top: 15px;
            margin-left: 20%;
            padding: 8px;
            background-color: #71ce19;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #555;
        }
        .output {
            margin-top: 10px;
            font-size: 14px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>User Form</h1>
        <form method="post">
            <label>Username</label>
            <input type="text" name="username" required />
            <label>Email</label>
            <input type="text" name="email" required />
            <label>Password</label>
            <input type="text" name="password" required />
            <label>Age</label>
            <input type="integer" name="age" required />
            <button type="submit">Submit</button>
        </form>
        <div class="output">
            <?php 
            if (
                isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) &&
                isset($_POST['age'])
            ) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $age = $_POST['age'];
                echo "Username Type:" . gettype($username) . "<br />";
                echo "Email Type: " . gettype($email) . "<br />";
                echo "Password Type: " . gettype($password) . "<br />";
                echo "Age Type:" . gettype($age) . "<br />";
                settype($age, 'integer');
                if ($age > 18) {
                    echo "<br />User is above 18<br />";
                    echo "Username Type: " . $username . "<br />";
                    echo "Email Type: " . $email . "<br />";
                    echo "Password Type:" . $password . "<br />";
                    echo "Age Type: " . $age . "<br />";
                } else {
                    echo "<br />User is below 18<br />";
                }
                unset($username, $email, $password, $age);
                if (isset($username) || isset($email) || isset($password) || isset($age))
                    echo "Details not removed";
                else echo "Details removed";
            }
            ?>
        </div>
    </div>
</body>
</html>