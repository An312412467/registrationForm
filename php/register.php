<?php
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

    if(mb_strlen($login) < 1 || mb_strlen($login) > 20) {
        echo "недопустимая длина логина";
        exit();
    } else if(mb_strlen($name) < 1 || mb_strlen($name) > 20) {
        echo "недопустимая длина имени";
        exit();
    } else if(mb_strlen($pass) < 5 || mb_strlen($name) > 25) {
        echo "недопустимая длина пароля";
        exit();
    }

    $pass = md5($pass); //хэширование пароля

    $db_connect = new mysqli('localhost', 'root', 'qwerty', 'register_users'); //подключение к БД
    $db_connect->query("INSERT INTO `users` (`login`, `password`, `name`) 
    VALUES ('$login', '$pass', '$name')"); //добавление данных

    $db_connect->close();

    header('Location: /');
    exit();
?>