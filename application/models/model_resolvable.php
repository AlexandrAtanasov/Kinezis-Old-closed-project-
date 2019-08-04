<?php

    class Model_Resolvable extends Model
    {
        public function get_data()
        {

            $routes = explode( '/', $_SERVER['REQUEST_URI'] );
            
            // get problem's id
            if ( !empty($routes[3]) )
            {
                $problem = $routes[3];
            };
            require_once __DIR__ . '/../core/std_incl.php';
            $pdo->query("SET CHARACTER SET 'utf8'");
            $result = $pdo->query("SELECT 
                `Title`, `Article`, `Img` 
                FROM `resolvable_problems_list` WHERE `TitleURL` LIKE '$problem' ;");
            return $result;
            $pdo = null;
        }
    }

?>