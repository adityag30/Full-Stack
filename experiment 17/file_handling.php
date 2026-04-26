<!DOCTYPE html>
<html lang="en">
<head>
    <title>File Uploading</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #ffffff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 350px;
        }
        h1 {
            margin-bottom: 20px;
            color: #333;
        }
        input[type="file"] {
            margin: 10px 0;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .message {
            margin-top: 15px;
            font-size: 14px;
            color: #444;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Upload File</h1>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="myfile">
            <br><br>
            <input type="submit" name="submit" value="Upload">
        </form>
        <div class="message">
            <?php
            if (isset($_POST['submit'])) {
                if (isset($_FILES['myfile']) && ($_FILES['myfile']['error'] === 0)) {
                    $filename = $_FILES['myfile']['name'];
                    $filetempname = $_FILES['myfile']['tmp_name'];
                    $filesize = $_FILES['myfile']['size'];
                    $fileext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
                    $allowed = array('png', 'jpg', 'pdf');
                    $folder = "uploads/";
                    if (!is_dir($folder)) {
                        mkdir($folder, 0777, true);
                    }
                    if (in_array($fileext, $allowed)) {
                        if ($filesize <= 2000000) {
                            $newname = uniqid("file_", true) . "." . $fileext;
                            $destination = $folder . $newname;
                            if (move_uploaded_file($filetempname, $destination)) {
                                echo "File uploaded successfully <br>";
                                echo "Original name: " . $filename . "<br>";
                                echo "Saved as: " . $newname;
                            } else {
                                echo "Failed to move file.";
                            }
                        } else {
                            echo "File too large";
                        }
                    } else {
                        echo "Invalid file extension";
                    }
                } else {
                    echo "No file selected";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>