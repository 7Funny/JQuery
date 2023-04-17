<!DOCTYPE html>
<html lang='ru'>

<head>
    <title>Главная</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="..\main/style.css">
    <script type="text/javascript"></script>

</head>

<body>
    <div class='all'>
    <div class="head">
        <a href="..\main/index.php" class="banner"><p>Главная</p></a>
        <div class="right_banner">
            <a href="..\main/contacts.php" class="banner"><p>Контакты</p></a>
            <?php if (!empty($_SESSION['user']['login']) and !empty($_SESSION['user']['admin'])) { ?> 
                <a href="..\users/profile.php" class="banner"><p>Профиль</p></a>
                <a href="..\news/new_add.php" class="banner"><p>Добавить новость</p></a>
                <a href="..\users/logout.php" class="banner"><p>Выйти</p></a>
                
            <?php } if(!empty($_SESSION['user']['login']) and empty($_SESSION['user']['admin'])) { ?> 
                <a href="..\users/profile.php" class="banner"><p>Профиль</p></a>
                <a href="..\users/logout.php" class="banner"><p>Выйти</p></a>
            <?php } if(empty($_SESSION['user']['login'])) { ?> 
                <a href="..\users/register.php" class="banner"><p>Войти</p></a>
            <?php } ?>
        </div>
    </div>

