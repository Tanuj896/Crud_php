<?php
error_reporting(0);

if (isset($_POST['submit'])) {
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "uploads/" . $filename;

    // Create uploads directory if not exists
    if (!is_dir("uploads")) {
        mkdir("uploads", 0777, true);
    }

    if (move_uploaded_file($tempname, $folder)) {
        echo "✅ File uploaded successfully!";
    } else {
        echo "❌ Failed to upload file.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>File Upload</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="uploadfile"><br><br>
        <input type="submit" name="submit" value="Upload File">
    </form>
</body>

</html>
