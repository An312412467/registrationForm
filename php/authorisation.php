<?php
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

    $pass = md5($pass); //хэширование пароля

    $db_connect = new mysqli('localhost', 'root', 'qwerty', 'register_users'); //подключение к БД
   
    $result = $db_connect->query("SELECT * FROM `users` WHERE
    `login` = $login `password` = $pass");

    $user = $result->fetch_assoc(); //конвертируем данные в массив
    if(count($users) == 0) {
        echo "Такой пользователь не найден";
        exit();
    }

    setcookie('user', $user['name'], time() + 3600, "/");

    $db_connect->close();

    header('Location: /');
    exit();
?>