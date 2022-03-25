<?php
    $dsn = 'mysql:host=localhost;dbname=zippyusedautos';
    $username = 'root';
    $password = '';

    try {
        $db = new PDO($dsn, $username);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../zippyusedauto/view/databaseerror.php');
        exit();
    }
?>