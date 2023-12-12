<?php
if(isset($_POST['submit'])){
    $image = $_FILES['photo']['name'];
    $image = filter_var($image, FILTER_SANITIZE_STRING);
    $ext = pathinfo($image, PATHINFO_EXTENSION);
    $rename = uniqid().'.'.$ext;
    $image_size = $_FILES['photo']['size'];
    $image_tmp_name = $_FILES['photo']['tmp_name'];
    $image_folder = '../uploaded_files/'.$rename;
    move_uploaded_file($image_tmp_name, $image_folder);
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
    <form action="IMG.PHP" method="post" enctype="multipart/form-data">
        <input type="file" name="photo" id="">
        <input type="submit" value="submit" name="submit">
    </form>
</body>

</html>