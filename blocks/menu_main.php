<?php 
require "db.php";
?>
<?php if(isset($_SESSION['logged_user'])) : ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <a href="#" class="navbar-barnd"><img src="img/icon.png" width="30px" height="30px" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-laber="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <br>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a href="index.php" class="nav-link">Главная</a>
            </li>
            <li class="nav-item">
                <a href="class.php" class="nav-link">Новости</a>
            </li>
            <li class="nav-item ">
                <a href="index_chat.php" class="nav-link">Чат</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Администрирование</a>
            </li>
        </ul>
        <div class="dropdown show">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php                         
                    echo '<div style="color:white;
                    left: 15%;">Ваше Имя: '.$_SESSION['logged_user'] ->name.'</div>';
                ?>
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="settings_user.php">Настройки</a>
                <a class="dropdown-item" href="logout.php">Выйти</a>
            </div>
        </div>
    </div>
</nav>

<?php else : ?>
<?php header("Location: index.php"); ?>
<?php endif; ?>
