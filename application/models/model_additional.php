<?php

    class Model_Additional extends Model
    {
        public function get_data()
        {

            $routes = explode( '/', $_SERVER['REQUEST_URI'] );
            
            // get additional service's id
            if ( !empty($routes[3]) )
            {
                $service = $routes[3];
            };

            $result = null;
            $pdo = null;
            require __DIR__ . '/../core/std_incl.php';

            $pdo->query("SET CHARACTER SET 'utf8'");
            
            $result = $pdo->query("SELECT 
                `Title`, `Article`, `Img`, `TitleURL`
                FROM `additional_services_list` WHERE `TitleURL` LIKE '$service' ;");
            return $result;
        }
        public function get_data2()
        {
            $result = null;
            $pdo = null;
            require __DIR__ . '/../core/std_incl.php';

            $pdo->query("SET CHARACTER SET 'utf8'");
            
            $result = $pdo->query("SELECT 
                `Img` 
                FROM `additional_services_rehabimg`");
            return $result;
        }
        public function get_data3()
        {
            $result = null;
            $pdo = null;
            require __DIR__ . '/../core/std_incl.php';

            $pdo->query("SET CHARACTER SET 'utf8'");
            
            $result = $pdo->query("SELECT 
                `Title`, `Article`, `Img` 
                FROM `additional_equipment_list`");
            return $result;
        }

    }

?>