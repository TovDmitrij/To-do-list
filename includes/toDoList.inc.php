<?php
    $userName = $_SESSION['userName'];
    $sql = "SELECT id, task from tasks where login = '$userName'";
    $mysqli_result = $mysqli->query($sql);
    $list = $mysqli_result->fetch_all();
    if(count($list) > 0)
    {
        $i = 0;
        foreach($list as $value)
        {
            $i++;
            echo 
                "<tr>
                    <td>".$i."</td>
                    <td>".$value[1]."</td>
                    <td>
                        <button type='submit' class='btn btn-dark' name='del' value='".$value[0]."'><i class='fa-solid fa-eraser'></i> Удалить</button>
                        <button type='button' onclick=ChangeTask(value); name='ch' class='btn btn-dark' data-bs-toggle='modal' data-bs-target='#ChangeTask' value='".$value[0]."'><i class='fa-solid fa-marker'></i> Изменить</button>
                    </td>
                </tr>";
        }
        unset($value);
    }
    else
    {
        echo
            "<tr>
                <td></td>
                <td>Задачи отсутствуют!</td>
                <td></td>
            </tr>";
    }

    if(isset($_POST["logOut"]) || isset($_GET["mainPage"]) || isset($_GET["signUpPage"]) || isset($_GET["logInPage"])){
        include 'logOut.inc.php';
    }
    if(isset($_POST['del']))
    {
        $id1 = $_POST['del'];
        $sql = "DELETE FROM tasks where id = '$id1'";
        $mysqli->query($sql);
        //header("Refresh:0");
        echo '<script>location.replace("toDoList.php");</script>'; exit;
    }
    if(isset($_POST['change_acceptButton']))
    {
        $idOfTask = $_COOKIE['postId'];
        $text = $_POST['textOfTask'];
        if($text == "" || $text == null)
            return;
        $sql = "UPDATE tasks set task = '$text' where id = '$idOfTask'";
        $mysqli->query($sql);
        //header("Refresh:0");
        echo '<script>location.replace("toDoList.php");</script>'; exit;
    }
    if(isset($_POST['add_acceptButton']))
    {
        $text = $_POST['textOfTask'];
        if($text == "" || $text == null)
            return;
        $sql = "SELECT id, task from tasks where login = '$userName'";
        $mysqli_result = $mysqli->query($sql);
        $list = $mysqli_result->fetch_all();    
        foreach($list as $value)
        {
            if($value[1] == $text)
                return;
        }
        $user = $_SESSION['userName'];
        $sql = "INSERT into tasks(task, login) VALUES('$text','$user')";
        $mysqli->query($sql);
        //header("Refresh:0");
        echo '<script>location.replace("toDoList.php");</script>'; exit;
    }
?>