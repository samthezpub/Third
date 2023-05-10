<?php 

if (isset($_COOKIE["login"])){
    echo "Login: " . $_COOKIE["login"] . "<br>";
    echo "<form action='formclick.php'><input type='submit'></form>";
}



?>