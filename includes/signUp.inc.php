<?php
    if(isset($_GET["login"]) && isset($_GET["email"]) && isset($_GET["password"]) && isset($_GET["reg"]) && $_GET['password'] == $_GET["passwordRepeat"])
    {
        require_once 'db.inc.php';
       $login = $_GET["login"];
       $password = $_GET["password"];
       $email = $_GET["email"];
       if($login != "" && $password != "" && $email != "")
       {
            $sql = "INSERT INTO users(login, email, password) VALUES('$login','$email','$password')";
            $mysqli_result = $mysqli->query($sql);
            if ($mysqli_result)
            {
            setcookie("userName", $login);
            header("Location: logIn.php");
            exit();
            }
       }
    }
?>