<?php
    include 'db_connection.php';

    $arr = array();
    $id = 0;
    $result = mysqli_query($connection, "SELECT `mess` FROM `messages`");

    while($line = mysqli_fetch_assoc($result)){
        $arr[$id] = $line;
        $id++;
    }
    echo json_encode($arr);
?>