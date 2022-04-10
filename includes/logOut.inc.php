<?php
    session_unset();
    session_destroy();
    //header("Location: index.php");
    echo '<script>location.replace("index.php");</script>'; exit;
?>