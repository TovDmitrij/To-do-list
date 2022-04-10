<?php
    if(isset($_GET["mainPage"]))
        header("Location: index.php");
    if(isset($_GET["signUpPage"]))
        header("Location: signUp.php");
    if(isset($_GET["logInPage"]))
        header("Location: logIn.php");
    if(isset($_GET["toDoListPage"]))
    {
        if($_SESSION["userName"] == null)
            header("Location: logIn.php");
        else
            header("Location: toDoList.php");
    }
    // if(isset($POST["darkSwitch"]))
    //     $symbolSwitch = true;
    // else $symbolSwitch = false;
?>