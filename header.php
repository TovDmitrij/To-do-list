<?php 
    session_start();
    include_once 'includes/index.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dark-mode.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    <title>Document</title>
    <script src="https://kit.fontawesome.com/3a90a82e13.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body class="bg-image" style="background-image: url('images/lightTheme.jpg'); background-repeat: repeat; background-size: cover;">
    <header class="bg-light border-bottom border-5 fixed-top">

        <!-- Смена темы -->

        <div class="col bg-gray-1 container-md position-absolute top-0" style="width: auto; height: auto;">
            <div class="form-check form-switch">
            <form method="post">
                <input type="checkbox" class="form-check-input" name="darkSwitch" id="darkSwitch">
                <label class="custom-control-label" for="darkSwitch">
                    <?php
                    //if(!$symbolSwitch)
                        echo '<i class="fa-solid fa-moon"></i>';
                    //else
                    //    echo '<i class="fa-solid fa-sun"></i>';
                    ?>
                </label>
            </form>
            </div>
            <script src="dark-mode-switch.min.js"></script>
        </div>

        <!-- Меню -->

        <form method="get">
            <div class="container px-4">
                <div class="row gx-5 justify-content-md-center">
                    <div class="col p-2 text-center bg-gray-1">
                        <button type="submit" name="mainPage" class="btn btn-dark btn-lg">Главная</button>
                    </div>
                    <div class="col p-2 text-center bg-gray-2">
                        <button type="submit" name="signUpPage" class="btn btn-dark btn-lg">Регистрация</button>
                    </div>
                    <div class="col p-2 text-center bg-gray-1">
                        <button type="submit" name="logInPage" class="btn btn-dark btn-lg">Авторизация</button>
                    </div>
                    <div class="col p-2 text-center bg-gray-2">
                        <button type="submit" name="toDoListPage" class="btn btn-dark btn-lg">Список дел</button>
                    </div>
                </div>
            </div>
        </form>
    </header>