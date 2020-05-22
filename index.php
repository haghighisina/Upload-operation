<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file"><br>
    <button type="submit" name="submit">UPLOAD</button>
    <?php
    include_once "upload.php";
    if (isset($_GET['error'])){
        if ($_GET['error'] ==  "up"){
            echo "file uploaded";
        }
    }
    ?>
</form>
</body>
</html>