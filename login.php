<?php
function Login($login, $password)
{
    if (file_exists("$login.txt")) {
        echo "Существует!!";
        $str = file_get_contents("$login.txt");
        $newstring = explode(".", $str);
        $serverlogin = $newstring[0];
        $serverpassword = $newstring[1];
        if ($login == $serverlogin && $password == $serverpassword) {
            echo "Вы вошли на аккаунт $login";
            echo "<form action='formclick.php'><input type='submit'></form>";
        } 


    }
}

if (isset($_POST['login']) && 
isset($_POST['password']) ) {
    echo 'кнопка обработчика была нажата!<br>';
    $login = htmlentities($_POST["login"]);
    $password = htmlentities($_POST["password"]);
    Login($login, $password);
}
?>