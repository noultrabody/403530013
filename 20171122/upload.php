<html>
<head>
    <meta charset="UTF-8">
    <title>post</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        height: <input type="text" name="height"> m<br>
        weight: <input type="text" name="weight"> kg<br>
        <input type="file" name="file" id="file"><br>
        <input type="submit" name="submit" value="提交">
    </form>
    </body>
</html>
<?php
extract ($_POST);
if(empty($height)||empty($weight)==true){
    echo "please type in all information<br>";
}else{
    echo "height=$height<br>";
    echo "weight=$weight<br>";
    echo "BMI=".$weight/$height/$height."<br>";
}
if(empty($_FILES["file"]["name"])===true){
    echo "empty";
}elseif(strpos($_FILES["file"]["type"],"image/")!==false){
    $filename=iconv('utf-8','big5', $_FILES["file"]["name"]);
    move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$filename);
    echo '<img src="upload/'.$filename.'"/>';
}else{
    echo "wrong file type";
}
?>
