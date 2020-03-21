<?php  

require "db.php";
$data = $_POST;

 $errors = array();

if(isset($data['do_login'])){
    $user = R::findOne('users', 'login = ?', array($data['login']));
    if($user){
      if(password_verify($data['pass'], $user->password)){
           $_SESSION['logged_user'] = $user;
           header("Location: main.php");
      }
        else {
            $errors[] = 'Неверный пароль';
        }
    }
    else {
        $errors[] = 'Пользователь не найден';
    }
    
    if( ! empty($errors)){
        echo '<div style="color:red;">'.array_shift($errors).'</div><hr>';
    }
    
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    $title="Вход";
    require_once "blocks/log.php" ?></head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                <form action="login.php" method="POST">
                    <form class="login100-form validate-form">
                        <span class="login100-form-title p-b-33">
                            Вход в аккаунт
                        </span>

                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" name="login" placeholder="Login" value="<?php echo @$data['login']; ?>">
                        </div>

                        <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
                            <input class="input100" type="password" name="pass" placeholder="Password">
                        </div>

                        <div class="container-login100-form-btn m-t-20">
                            <button class="login100-form-btn" type="submit" name="do_login">
                                Войти
                            </button>
                        </div>

                        <div class="text-center p-t-45 p-b-4">
                            <span class="txt1">
                                Забыли
                            </span>

                            <a href="#" class="txt2 hov1">
                                Имя пользователя / Пароль?
                            </a>
                        </div>

                        <div class="text-center">
                            <span class="txt1">
                                Нет аккаутна?
                            </span>

                            <a href="signup.php" class="txt2 hov1">
                                Создайте
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
