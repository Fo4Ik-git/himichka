<?php  
require "db.php";
$data = $_POST;

if(isset($data['save_name'])){
    $id = $_SESSION['logged_user']->id;
    $user = R::load('users', $id);
    $user->name = $data['new_name'];
    R::store($user);
    
   unset($_SESSION['logged_user']);
   header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    $title="Настройки";
    require_once "blocks/head.php"; 
    require_once "blocks/log.php"; ?>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <?php require_once "blocks/menu_settings.php" ?>
    <div class="text-center">
        <h1>Настроики профиля</h1>
    </div>
    <hr>
    <div class="col-xs-4 col-sm-4 col-md-6 col-lg12">
        <div class="text-center">
            <h3>Имя пользователя</h3>
            <form action="settings_user.php" method="POST">
                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="new_name" placeholder="Name">
                </div>
                <button type="submit" class="btn btn-success" name="save_name">Сохранить</button>
            </form>
        </div>
        <hr>
        <hr>
        <div class="text-center">
            <h3>Сменить пароль</h3>
            <form action="settings_user.php" method="POST">
                <div class="wrap-input100 validate-input">
                    <input class="input100" type="password" name="pass" placeholder="Password">
                </div>
                <div class="wrap-input100 validate-input">
                    <input class="input100" type="password" name="pass_new" placeholder="New password">
                </div>
                <button type="submit" class="btn btn-success" name="save_pass">Сохранить</button>
            </form>
        </div>
    </div>








    <!--   <style type="text/css">
        #hellopreloader>p {
            display: none;
        }

        #hellopreloader_preload {
            display: block;
            position: fixed;
            z-index: 99999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            min-width: 1000px;
            background: #2574A9 url(http://hello-site.ru//main/images/preloads/puff.svg) center center no-repeat;
            background-size: 41px;
        }

    </style>
    <div id="hellopreloader">
        <div id="hellopreloader_preload"></div>
    </div>
    <script type="text/javascript">
        var hellopreloader = document.getElementById("hellopreloader_preload");

        function fadeOutnojquery(el) {
            el.style.opacity = 1;
            var interhellopreloader = setInterval(function() {
                el.style.opacity = el.style.opacity - 0.05;
                if (el.style.opacity <= 0.05) {
                    clearInterval(interhellopreloader);
                    hellopreloader.style.display = "none";
                }
            }, 16);
        }
        window.onload = function() {
            setTimeout(function() {
                fadeOutnojquery(hellopreloader);
            }, 1000);
        };

    </script> -->


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
