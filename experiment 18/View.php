<?php
$conn = mysqli_connect("localhost", "root", "", "semester_6");
$result = mysqli_query($conn, "SELECT * FROM students");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Table</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
        }
        th {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
        }
        td {
            padding: 10px;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
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
    </style>
</head>
<body>
    <h2>Student Marks Table</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Roll No</th>
            <th>Name</th>
            <th>Sub1</th>
            <th>Sub2</th>
            <th>Sub3</th>
            <th>Sub4</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['rollno']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['sub1']}</td>
                    <td>{$row['sub2']}</td>
                    <td>{$row['sub3']}</td>
                    <td>{$row['sub4']}</td>
                </tr>";
        }
        ?>
    </table>
    <br>
    <form action="Home.php">
        <input type="submit" value="Back to Home" class="btn">
    </form>
</body>
</html>
<?php
mysqli_close($conn);
?>