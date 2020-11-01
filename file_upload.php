<?php
        if(isset($_POST['submit'])){
               $file_name=$_FILES['file']['name'];
               $file_type=$_FILES['file']['type'];
               $temp_loc=$_FILES['file']['tmp_name'];
               $file_store="image/".$file_name;
               move_uploaded_file($temp_loc,$file_store);
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="#" method="post" enctype="multipart/form-data">
            <input type="file" name="file">
            <input type="submit" name="submit" value="upload">
    </form>
</body>
</html>