
<form enctype="multipart/form-data" action="fileload.php" method="POST">
    Отправить этот файл: <input name="userfile" type="file" accept="image/png, image/jpeg"/>
    <input type="submit" value="Отправить файл" />
</form>
    

<?php 

if (isset($_COOKIE["login"])){
    echo "Login: " . $_COOKIE["login"] . "<br>";
    echo "<form action='formclick.php'><input type='submit'></form>";
}



?>