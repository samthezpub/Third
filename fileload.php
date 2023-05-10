<?php

$type = explode('/', $_FILES['userfile']['type']);
$type = '.'.$type[1]; // $type[1] -> 'png',    $type = '.png'

$_FILES['userfile']['name'] = $_COOKIE["login"]. ".$type";
$uploaddir = 'uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);

echo "<img style='width:50px;height:50px;border-radius:50px;' src='$uploadfile'>"




?>
<form action="unlogin.php" method="post">
    <button type="submit">Сменить аватарку</button>
</form>