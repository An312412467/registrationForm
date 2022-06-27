<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма для регистрации</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
    <?php
        if($_COOKIE['user' == '']):
    ?>
        <div class = "row">
            <div class="col">
                <h1>Форма регистрации</h1>
                <form action="php/register.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
                    <input type="text" class="form-control" name="password" id="password" placeholder="Введите пароль"><br>
                    <button class="btn btn-success" type="submit">Регистрация</button>
                </form>
            </div>
            <div class="col">
                <h1>Форма авторизации</h1>
                <form action="php/authorisation.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                    <input type="text" class="form-control" name="password" id="password" placeholder="Введите пароль"><br>
                    <button class="btn btn-success" type="submit">Войти</button>
                </form>
            </div>
        <?php
            else:
        ?>
            <p>Авторизация успешна. Чтобы выйте нажмите <a href="php/exit.php">сюда</a>.</p>
        <?php
            endif;
        ?>
        </div>
    </div>
</body>
</html>