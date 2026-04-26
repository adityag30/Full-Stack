<!DOCTYPE html>
<html>
<head>
    <title>Attendance System</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial;
            text-align: center;
            background: linear-gradient(135deg, #8089da, #6778b0);
            margin-top: 40px;
        }
        .box {
            background: white;
            width: 420px;
            margin: auto;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0px 8px 25px rgba(0, 0, 0, 0.2);
            transition: 0.3s;
        }
        .box:hover {
            transform: translateY(-5px);
        }
        h2 {
            color: #8e44ad;
            margin-bottom: 15px;
        }
        input[type="text"], select {
            width: 80%;
            padding: 8px;
            border: 2px solid #e0b3ff;
            border-radius: 8px;
            margin-top: 5px;
            background: #faf5ff;
        }
        input[type="submit"] {
            background: linear-gradient(135deg, #8e44ad, #e84393);
            color: white;
            border: none;
            padding: 10px 18px;
            cursor: pointer;
            border-radius: 25px;
            font-size: 15px;
            transition: 0.3s;
        }
        input[type="submit"]:hover {
            background: linear-gradient(135deg, #732d91, #d63384);
            transform: scale(1.05);
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #eee;
        }
        th {
            background: linear-gradient(135deg, #8e44ad, #e84393);
            color: white;
        }
        tr:hover {
            background-color: #faf5ff;
        }
        p {
            color: #6c3483;
            font-weight: bold;
        }
        b {
            color: #5b2c6f;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>Add Attendance</h2>
        <form method="post">
            Roll No: <input type="text" name="roll" required><br><br>
            Name: <input type="text" name="name" required><br><br>
            Status:
            <select name="status">
                <option>Present</option>
                <option>Absent</option>
            </select><br><br>
            <input type="submit" name="submit" value="Add Record">
        </form>
        <?php
        $filename = "attendance.txt";
        /* ---------------- WRITE TO FILE ---------------- */
        if (isset($_POST['submit'])) {
            $roll = $_POST['roll'];
            $name = $_POST['name'];
            $status = $_POST['status'];
            $data = $roll . " - " . $name . " - " . $status . "\n";
            file_put_contents($filename, $data, FILE_APPEND);
            echo "<p>Record added successfully!</p>";
        }
        /* ---------------- READ FROM FILE ---------------- */
        if (!file_exists($filename)) {
            die("attendance.txt file not found!");
        }
        $lines = file($filename);
        $total = 0;
        $present = 0;
        $absent = 0;
        echo "<h2>Attendance Records</h2>";
        echo "<table>";
        echo "<tr> 
        <th>Roll No</th> 
        <th>Name</th> 
        <th>Status</th> 
      </tr>";
        foreach ($lines as $line) {
            $line = trim($line);
            if ($line == "") continue;
            list($roll, $name, $status) = explode(" - ", $line);
            echo "<tr> 
            <td>$roll</td> 
            <td>$name</td> 
            <td>$status</td> 
          </tr>";
            $total++;
            if ($status == "Present") {
                $present++;
            } else {
                $absent++;
            }
        }
        echo "</table>";
        echo "<br><b>Total Students:</b> $total <br>";
        echo "<b>Present:</b> $present <br>";
        echo "<b>Absent:</b> $absent <br>";
        ?>
    </div>
</body>
</html>