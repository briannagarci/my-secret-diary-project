<?php

session_start();

if (array_key_exists("content", $_POST)) {

    include("connection.php");

    $sessionId = mysqli_real_escape_string($link, $_SESSION['id']);
    $content = mysqli_real_escape_string($link, $_POST['content']);

    $query = "UPDATE `users` SET `diary`='$content' WHERE id='$sessionId' LIMIT 1";

    mysqli_query($link, $query);

     
}

?>