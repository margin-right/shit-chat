<?php
    include 'server/db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.6.0.min.js?antirtk=on"></script>
    <title>chat</title>
</head>
<body>
    <input type="text" id="chat-input">
    <button onclick="send()">отправить</button>
    <div id="result">

    </div>
    <script src="script.js"></script>
</body>
</html>