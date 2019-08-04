<?php

    class Pages_Info
    {
        static function getInfo()
        {
            $routes = explode( '/', $_SERVER['REQUEST_URI'] );
            $actualURL = $_SERVER['REQUEST_URI'];

            $result = null;
            require __DIR__ . '/../core/std_incl.php';
            $pdo->query("SET CHARACTER SET 'utf8'");
            $data = $pdo->query("SELECT 
            `Title`, `Description`
            FROM `pages_info` WHERE `URL` LIKE '$actualURL' ");
            $pdo = null;
            return $data;
        }
    }

?>