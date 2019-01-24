<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    echo $_SERVER["HTTP_USER_AGENT"]."<br>";
    echo $_SERVER["HTTP_HOST"]."<br>";
    echo $_SERVER["SERVER_ADDR"]."<br>";
    echo $_SERVER["SERVER_PORT"]."<br>";
    echo $_SERVER["RREMOTE_ADDR"]."<br>";
    echo $_SERVER["DOCUMENT_ROOT"]."<br>";
    echo $_SERVER["SCRIPT_FILENAME"]."<br>";
    echo $_SERVER["SERVER_PROTOCOL"]."<br>";
?>
</body>
</html>

