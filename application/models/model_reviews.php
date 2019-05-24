<?php

    class Model_Reviews extends Model
    {
        public function get_data()
        {
            require_once __DIR__ . '/../core/std_incl.php';

            $pdo->query("SET CHARACTER SET 'utf8'");
            
            $result = $pdo->query("SELECT
                FirstName, LastName, About, Img 
            FROM `reviews`;");
            return $result;
        }
    }

?>