<?php
extract ($_POST);
if(empty($height)||empty($weight)==true){
    echo "please type in all information";
}else{
    echo "height=$height<br>";
    echo "weight=$weight<br>";
    echo "BMI=".$weight/$height/$height."<br>";
}
if(empty($_FILES)==true){
    echo "empty";
}elseif($_FILES["file"]["type"]==""){

}
?>
