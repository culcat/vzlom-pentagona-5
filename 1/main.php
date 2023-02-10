<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input name="text" type="text">
        <button type="submit">Проверить</button>
    </form>
</body>
</html>

<?php
    if($_POST['text']==strrev($_POST['text'])){
        echo 'da';
    }
    if($_POST['text']!=strrev($_POST['text'])){
        echo 'net';
    }