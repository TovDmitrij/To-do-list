<?php
    if(isset($_GET["login"]) && isset($_GET["password"]) && isset($_GET["log"])){
        require_once 'db.inc.php';
        $login = $_GET["login"];
        $password = $_GET["password"];
        $sql = "SELECT count(*) from users where login = '$login' and password = '$password'";
        $mysqli_result = $mysqli->query($sql);
        $row = $mysqli_result->fetch_row();
        $count = $row[0];
        if($count != 0 && $login != "" && $password != "")
        {
          $_SESSION["userName"] = $login; 
          header("Location: toDoList.php");
          exit();
        }
      }
      if(isset($_GET["reg"])){
        header("Location: signUp.php");
        exit();
      }
?>