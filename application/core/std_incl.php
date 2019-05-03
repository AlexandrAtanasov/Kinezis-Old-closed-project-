<?php
    require __DIR__ . "/config.php";
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    try {
        $pdo = new PDO(
            "mysql:host={$db_host};dbname={$db_name}",
            $db_user,
            $db_user_pass
        );
    } catch(Exception $e) {
        die ("<h1>ERROR</h1>");
    }
?>