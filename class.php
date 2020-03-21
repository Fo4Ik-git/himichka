<?php 
if(isset($_SESSION['logged_user'])) :
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Выбери</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>


    <body style="top: -80%;">
        <!-- HelloPreload http://hello-site.ru/preloader/ -->

        <!-- HelloPreload http://hello-site.ru/preloader/ -->
        <div class="link">
            <div class="text-center" style="
            margin: center;
            margin-left: auto;
            margin-right: auto;">
                <h1>Выбирете класс</h1>
                <p></p>
                <button type="button" class="btn btn-primary"><a href="7.php" style="text-decoration: none; color: white;">7</a></button>
                <button type="button" class="btn btn-secondary"><a href="8.php" style="text-decoration: none; color: white;">8</a></button>
                <button type="button" class="btn btn-success"><a href="9.php" style="text-decoration: none; color: white;">9</a></button>
                <button type="button" class="btn btn-danger"><a href="10.php" style="text-decoration: none; color: white;">10</a></button>
                <button type="button" class="btn btn-info"><a href="11.php" style="text-decoration: none; color: white;">11</a></button>
                <button type="button" class="btn btn-warning"><a href="index.php" style="text-decoration: none; color: white;">Главная</a></button>
            </div>
        </div>
    </body>







    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
<?php else : ?>
<?php header("Location: index.php"); ?>
<?php endif; ?>