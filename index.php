<?php 
require "db.php";
if(isset($_SESSION['logged_user'])) : ?>

<?php header("Location: main.php"); ?>
<?php else : ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    $title="Химия";
    require_once "blocks/head.php" ?>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

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
                    <a href="chat.php" class="nav-link">Чат</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Администрирование</a>
                </li>
               
            </ul>
            <div class="ml-a">
               <button class="btn btn-primary"><a href="login.php" style="text-decoration: none; color: white;">Войти</a></button>
               <button class="btn btn-info"><a href="signup.php" style="text-decoration: none; color: white;">Зарегистрироваться</a></button>
            </div>
        </div>
    </nav>

    <style type="text/css">
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

    </script>
    
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
<?php endif; ?>