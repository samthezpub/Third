
<?php
if (isset($_COOKIE["login"]))
{
    header('Location: http://localhost:3000/unlogin.php ');
}
function Register($login, $password)
{
    $contcantanated = "$login.$password";
    file_put_contents("$login.txt", $contcantanated);
    setcookie("login", $login);
    header('Location: http://localhost:3000/unlogin.php ');
}

if (isset($_POST['login']) && 
isset($_POST['password'])  &&
isset($_POST['password_confirmation'])
) {
    echo 'кнопка обработчика была нажата!<br>';
    $login = htmlentities($_POST["login"]);
    $password = htmlentities($_POST["password"]);
    $password_confirmation = htmlentities($_POST["password_confirmation"]);
    echo $login. "<br>";
    echo $password. "<br>";
    echo $password_confirmation. "<br>";
    if ($password != $password_confirmation) {
        echo "Пароли не равны!!!"."<br>";   
    }
    else {
        if(!(empty($_POST['login']) || empty($_POST['password']) || empty($_POST['password_confirmation']))){
            if (strlen($login) >= 6 && strlen($password) >= 6) {
                Register($login, $password);
            }
            
        }
        
    }
}

if(empty($_POST['login']) || empty($_POST['password']) || empty($_POST['password_confirmation'])){
    echo "Не все поля заполнены!"."<br>";
}
if (strlen($login) < 6 && strlen($password) < 6) {
    echo "Длинна меньше 6 символов!!!";
}

?>