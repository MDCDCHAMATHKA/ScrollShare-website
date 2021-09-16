<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location: login.php');
}
?>

<html>
    <head>
        <title>home</title>
    </head>
    <body>
        Hi
    </body>
</html>