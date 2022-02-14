<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.min.css">
    <title>Авторизация</title>
</head>
<body>
    
<section class="login">
        <div class="container">
         
            <div class="login__title">Пожалуйста авторизуйтесь</div>
                <form action="" method="POST" class="login__form">
                        <div class="login__input login__name">
                        <input placeholder="example" name="name" type="text">
                            <label for="name">Логин</label>  
                        </div>
                        <div class="login__input login__password">
                        <input placeholder="*******" name="password" type="text">
                            <label for="password">Пароль</label>
                        </div>
                        <button class="btn">Авторизоваться</button>
                </form>

        </div>
    </section>


    <?php

    class User {
        const NAME = 'vlad';
        const PASS = '245';
    }



    
    if($_POST['name'] == User::NAME && $_POST['password'] == User::PASS) {
        echo '<h2 class="login__error">' . 'Вы авторизованы ' . $_POST['name'] . '</h2>';
    }

    if($_POST['name'] !== User::NAME && $_POST['password'] == User::PASS) {
        echo '<link rel="stylesheet" href="../sass/blocks/_link_name.css">' . '<h2 class="login__error">' . 'Пользователь не найден' . '</h2>' ;
    }

    if($_POST['name'] == User::NAME && $_POST['password'] !== User::PASS) {
        echo '<link rel="stylesheet" href="../sass/blocks/_link_pass.css">' . '<h2 class="login__error">' . 'Не правильно введён пароль' . '</h2>' ;
    }

    if($_POST['name'] !== User::NAME && $_POST['password'] !== User::PASS) {
        echo '<link rel="stylesheet" href="../sass/blocks/_link_name.css">' . '<h2 class="login__error">' . 'Пользователь не найден' . '</h2>' ;
    }

?>

</body>
</html>

