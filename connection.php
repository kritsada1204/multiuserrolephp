<?php


    $db_host = "localhost";// localhost server
    $db_user = "root";
    $db_password = "";
    $db_name = "php_multiplelogin";

    try {

        $db = new PDO("mysql:host={$db_host}; dbname={$db_name}", $db_user, $db_password);
        $db-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        $e->getMessage();
    }



?>