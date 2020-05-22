<?php
if (isset($_POST['submit'])){
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileType = $_FILES['file']['type'];
    $fileTmpNam = $_FILES['file']['tmp_name'];
    $fileError = $_FILES['file']['error'];
    $fileSize = $_FILES['file']['size'];
    $fileExt = explode(".",$fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg','jpeg','png','pdf');
    if (strlen($fileName) > 0){
        if (in_array($fileActualExt,$allowed)){
            if ($fileError === 0 ){
                if ($fileSize < 1000000){
                    $fileNameNew = uniqid(md5(' '),true).".".$fileActualExt;
                    $fileDestination = 'upload/'.$fileNameNew;
                    move_uploaded_file($fileTmpNam,$fileDestination);
                    header("location: index.php?error=up");
                }else{
                    echo 'the file is too big!';
                }
            }else{
                echo 'there was an error uploading file!';
            }
        }else{
            echo 'you cant upload this type of file!';
        }
    }else{
        echo "the file is empty";
    }
}








