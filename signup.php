<?php  

require "db.php";
$data = $_POST;
if(isset($data['do_signup'])){
    $errors = array();
    
    if(trim($data['login']=='')){
        $errors[]='Введите логин';
    }
    if($data['pass']==''){
        $errors[]='Введите пароль';
    }
    if($data['pass_2'] != $data['pass']){
        $errors[]='Пароли не совпадают';
    }
    if(R::count('users', "login = ?", array($data['login'])) > 0){
        $errors[]='Пользователь с таким логином существует';
    }
    
    if(empty($errors)){
        $user = R::dispense('users');
        $user->login = $data['login'];
        $user->password = password_hash($data['pass'], PASSWORD_DEFAULT);
        $user->name = $data['name'];
        R::store($user);
        $_SESSION['logged_user'] = $user;
        header("Location: main.php");
        
    } else {
       echo '<div style="color:red;">'.array_shift($errors).'</div><hr>';
    }
    
    
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    $title="Регистрация";
    require_once "blocks/log.php" ?>
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                <form action="signup.php" method="POST">
                    <form class="login100-form validate-form">
                        <span class="login100-form-title p-b-33">
                            Регистрация
                        </span>

                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" name="login" placeholder="Login" value="<?php echo @$data['login']; ?>">
                        </div>
                        
                        <div class="wrap-input100 rs1 validate-input">
                            <input class="input100" type="text" name="name" placeholder="Name">
                        </div>

                        <div class="wrap-input100 rs1 validate-input">
                            <input class="input100" type="password" name="pass" placeholder="Password">
                            <input class="input100" type="password" name="pass_2" placeholder="Repeat password">
                        </div>
                        
                        <div class="container-login100-form-btn m-t-20">
                            <button class="login100-form-btn" type="submit" name="do_signup">
                                Зарегистрироваться
                            </button>
                        </div>

                        <div class="text-center">
                            <span class="txt1">
                                Уже есть аккаунт?
                            </span>

                            <a href="login.php" class="txt2 hov1">
                                Войдите
                            </a>
                        </div>
                    </form>
                </form>
            </div>
        </div>
    </div>



    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>
